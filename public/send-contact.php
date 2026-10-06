<?php

declare(strict_types=1);

use PHPMailer\PHPMailer\Exception as MailerException;
use PHPMailer\PHPMailer\PHPMailer;

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

$respond = static function (int $status, array $payload): void {
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
};

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    $respond(405, ['error' => 'Método no permitido.']);
}

$autoloadPath = __DIR__ . '/../vendor/autoload.php';

if (!is_file($autoloadPath)) {
    error_log('Contact mail dependencies are missing. Run composer install.');
    $respond(503, ['error' => 'El servicio de contacto no está disponible en este momento.']);
}

require $autoloadPath;

$smtpHost = getenv('SMTP_HOST') ?: 'smtp.hostinger.com';
$smtpPort = filter_var(getenv('SMTP_PORT') ?: '465', FILTER_VALIDATE_INT);
$smtpEncryption = strtolower(getenv('SMTP_ENCRYPTION') ?: 'ssl');
$smtpUsername = getenv('SMTP_USERNAME') ?: '';
$smtpPassword = getenv('SMTP_PASSWORD') ?: '';
$fromAddress = getenv('MAIL_FROM') ?: 'contacto@ss-proyec.com';

if ($smtpPort === false || !in_array($smtpEncryption, ['ssl', 'tls'], true)) {
    error_log('Contact mail SMTP configuration has an invalid port or encryption type.');
    $respond(503, ['error' => 'El servicio de contacto no está configurado correctamente.']);
}

if ($smtpUsername === '' || $smtpPassword === '') {
    error_log('Contact mail SMTP credentials are not configured.');
    $respond(503, ['error' => 'El servicio de contacto aún no está configurado.']);
}

$payload = json_decode(file_get_contents('php://input'), true);

if (!is_array($payload)) {
    $respond(400, ['error' => 'No se pudieron leer los datos del formulario.']);
}

$name = isset($payload['name']) && is_string($payload['name']) ? trim($payload['name']) : '';
$email = isset($payload['email']) && is_string($payload['email']) ? trim($payload['email']) : '';
$phone = isset($payload['phone']) && is_string($payload['phone']) ? trim($payload['phone']) : '';
$message = isset($payload['message']) && is_string($payload['message']) ? trim($payload['message']) : '';
$website = isset($payload['website']) && is_string($payload['website']) ? trim($payload['website']) : '';

if ($website !== '') {
    $respond(400, ['error' => 'No se pudo validar el formulario.']);
}

if (
    $name === ''
    || strlen($name) > 150
    || preg_match('/[\r\n]/', $name)
    || strlen($email) > 254
    || filter_var($email, FILTER_VALIDATE_EMAIL) === false
    || strlen($phone) > 40
    || $message === ''
    || strlen($message) > 5000
) {
    $respond(422, ['error' => 'Revisa los campos e inténtalo de nuevo.']);
}

if (!filter_var($fromAddress, FILTER_VALIDATE_EMAIL)) {
    error_log('Contact mail sender address is invalid.');
    $respond(503, ['error' => 'El servicio de contacto no está configurado correctamente.']);
}

$mailer = new PHPMailer(true);

try {
    $mailer->isSMTP();
    $mailer->Host = $smtpHost;
    $mailer->SMTPAuth = true;
    $mailer->Username = $smtpUsername;
    $mailer->Password = $smtpPassword;
    $mailer->SMTPSecure = $smtpEncryption === 'ssl'
        ? PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer::ENCRYPTION_STARTTLS;
    $mailer->Port = $smtpPort;
    $mailer->Timeout = 15;
    $mailer->CharSet = PHPMailer::CHARSET_UTF8;
    $mailer->setFrom($fromAddress, 'SS-PROYEC - Sitio web');
    $mailer->addAddress('contacto@ss-proyec.com');
    $mailer->addReplyTo($email, $name);
    $mailer->Subject = 'Nuevo mensaje desde el sitio web';
    $mailer->Body = implode("\n", [
        "Nombre: {$name}",
        "Correo: {$email}",
        'Teléfono: ' . ($phone !== '' ? $phone : 'No proporcionado'),
        '',
        'Mensaje:',
        $message
    ]);
    $mailer->send();
} catch (MailerException $error) {
    error_log('Contact mail delivery failed: ' . $error->getMessage());
    $respond(502, ['error' => 'No se pudo enviar el mensaje. Inténtalo de nuevo más tarde.']);
}

$respond(200, ['message' => 'Tu mensaje fue enviado. Gracias por contactarnos.']);
