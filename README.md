# ss-proyec
Pagina para ss-proyec

## Estructura MVC

```text
app/
	controllers/       Controladores de la aplicacion
	models/            Acceso y logica de datos
	views/             Plantillas HTML
public/
	assets/
		css/style.css    Estilos propios
		js/app.js        JavaScript propio
	index.php          Punto de entrada y controlador frontal
```

La vista de inicio carga Bootstrap 5.3.3 desde jsDelivr y los estilos locales desde `public/assets/css/style.css`. El formulario de contacto envía mensajes por SMTP mediante PHPMailer.

## Ejecutar localmente

Requiere PHP 8 o posterior con OpenSSL habilitado, Composer y conexion a internet para cargar Bootstrap desde el CDN y enviar correo por SMTP.

Desde la carpeta del proyecto, ejecuta:

```powershell
composer install
$env:SMTP_HOST = "smtp.hostinger.com"
$env:SMTP_PORT = "465"
$env:SMTP_ENCRYPTION = "ssl"
$env:SMTP_USERNAME = "contacto@ss-proyec.com"
$env:SMTP_PASSWORD = "<contrasena-del-buzon>"
$env:MAIL_FROM = "contacto@ss-proyec.com"
php -S localhost:8000 -t public
```

Abre [http://localhost:8000](http://localhost:8000) en el navegador.

Configura `SMTP_PASSWORD` con la contraseña del buzón en la terminal donde inicies PHP; no la agregues al código ni al repositorio. El formulario envía los mensajes a `contacto@ss-proyec.com` y usa el correo del visitante como dirección de respuesta.

En el hosting, define esas mismas variables de entorno para PHP y confirma en el panel de correo que SMTP esté habilitado para el buzón.
