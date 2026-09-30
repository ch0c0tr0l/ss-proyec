<?php

$title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | ss-proyec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <header class="border-bottom">
        <nav class="navbar navbar-expand-lg container" aria-label="Navegación principal">
            <a class="navbar-brand fw-semibold" href="/">ss-proyec</a>
        </nav>
    </header>

    <main class="container py-5">
        <div class="row justify-content-center">
            <section class="col-12 col-lg-8">
                <p class="text-uppercase small fw-semibold text-primary mb-2">Modelo · Vista · Controlador</p>
                <h1 class="display-5 fw-bold mb-3"><?= $title ?></h1>
                <p class="lead text-secondary mb-4"><?= $message ?></p>
                <a class="btn btn-primary" href="https://getbootstrap.com/docs/5.3/" target="_blank" rel="noreferrer">Documentación de Bootstrap</a>
            </section>
        </div>
    </main>

    <footer class="container border-top py-3 text-secondary small">
        ss-proyec · <span data-current-year></span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>
</html>
