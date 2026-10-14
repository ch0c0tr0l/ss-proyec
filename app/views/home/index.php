<?php

$title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | SS-PROYEC</title>
    <link rel="icon" type="image/png" href="/assets/images/7.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css?v=<?= filemtime(__DIR__ . '/../../../public/assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>
    <header class="site-header sticky-top">
        <nav class="navbar navbar-expand-lg container" aria-label="Navegación principal">
            <a class="navbar-brand" href="#inicio" aria-label="ss-proyec, inicio">
                <img class="brand-symbol" src="/assets/images/1.png" alt="ss-proyec">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Abrir navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link nav-contact" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-section home-jumbotron" id="inicio">
            <div class="container hero-grid">
                <h1 class="hero-title">Soluciones que mantienen <em>tu operación en movimiento.</em></h1>
                <figure class="hero-visual">
                    <img src="/assets/images/fondo1.png" alt="SS-PROYEC: ingeniería, mantenimiento, automatización e instalaciones">
                </figure>
            </div>
        </section>

        <section class="projects-section page-section" id="proyectos">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow eyebrow-dark">Lo que hacemos</p>
                        <h2>Dos divisiones, un mismo <em>compromiso.</em></h2>
                    </div>
                </div>
                <div class="row g-3 project-list">
                    <div class="col-12 col-lg-4">
                        <article class="project-card project-card-green">
                            <h3>Proyectos industriales</h3>
                            <button class="project-gallery-toggle" type="button" aria-expanded="false" aria-controls="industrial-gallery">
                                Ver proyectos industriales <span aria-hidden="true">+</span>
                            </button>
                            <div class="project-gallery-panel" id="industrial-gallery" aria-hidden="true" inert>
                                <div class="project-gallery" role="region" aria-label="Galería de proyectos industriales" tabindex="0">
                                    <button class="project-gallery-item" type="button" data-bs-toggle="modal" data-bs-target="#projectImageModal" aria-label="Ampliar imagen: Mantenimiento industrial"><img src="/assets/images/industrial/MantenimientoIndustrial.png" alt="Mantenimiento industrial" loading="lazy"></button>
                                    <button class="project-gallery-item" type="button" data-bs-toggle="modal" data-bs-target="#projectImageModal" aria-label="Ampliar imagen: Pailería industrial"><img src="/assets/images/industrial/Paileria.png" alt="Pailería industrial" loading="lazy"></button>
                                    <button class="project-gallery-item" type="button" data-bs-toggle="modal" data-bs-target="#projectImageModal" aria-label="Ampliar imagen: Instalaciones industriales"><img src="/assets/images/industrial/instalacionesIndustriales.png" alt="Instalaciones industriales" loading="lazy"></button>
                                    <button class="project-gallery-item" type="button" data-bs-toggle="modal" data-bs-target="#projectImageModal" aria-label="Ampliar imagen: Automatizacion PLC"><img src="/assets/images/industrial/plc.png" alt="Automatización PLC" loading="lazy"></button>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center">
                        <p class="section-intro">Integramos proyectos industriales y servicios <br> para responder a las necesidades de cada operación.</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <article class="project-card project-card-coral">
                            <h3>Servicios para tu operación</h3>
                            <button class="project-gallery-toggle" type="button" aria-expanded="false" aria-controls="services-gallery">
                                Ver servicios <span aria-hidden="true">+</span>
                            </button>
                            <div class="project-gallery-panel" id="services-gallery" aria-hidden="true" inert>
                                <div class="project-gallery" role="region" aria-label="Galería de servicios" tabindex="0">
                                    <button class="project-gallery-item" type="button" data-bs-toggle="modal" data-bs-target="#projectImageModal" aria-label="Ampliar imagen: Servicio 1"><img src="/assets/images/servicios/1.png" alt="Electricidad e Iluminacion" loading="lazy"></button>
                                    <button class="project-gallery-item" type="button" data-bs-toggle="modal" data-bs-target="#projectImageModal" aria-label="Ampliar imagen: Servicio 2"><img src="/assets/images/servicios/2.png" alt="Mantenimiento de instalaciones" loading="lazy"></button>
                                    <button class="project-gallery-item" type="button" data-bs-toggle="modal" data-bs-target="#projectImageModal" aria-label="Ampliar imagen: Servicio 3"><img src="/assets/images/servicios/3.png" alt="Adecuaciones e Instalaciones" loading="lazy"></button>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section page-section" id="nosotros">
            <div class="container">
                <div class="about-heading">
                    <p class="eyebrow eyebrow-dark">Quiénes somos</p>
                    <h2>Un equipo que cree en el poder de <em>hacer.</em></h2>
                    <p>En ss-proyec trabajamos con intención, escuchamos distintas perspectivas y convertimos los retos en nuevas posibilidades.</p>
                </div>
                <div class="row g-3 about-grid">
                    <article class="col-12 col-md-4" id="mision">
                        <div class="about-card">
                            <h3>Misión</h3>
                            <p>Brindar soluciones integrales de mantenimiento, ingeniería y proyectos industriales que contribuyan a la continuidad y eficiencia de las operaciones de nuestros clientes, mediante una ejecución segura, profesional y confiable, cumpliendo los alcances, tiempos y estándares acordados.</p>
                        </div>
                    </article>
                    <article class="col-12 col-md-4" id="vision">
                        <div class="about-card">
                            <h3>Visión</h3>
                            <p>Consolidar a SS-PROYEC como una empresa reconocida y confiable en el sector industrial, distinguiéndonos por nuestra capacidad de respuesta, calidad de ejecución y desarrollo de soluciones que generen relaciones de largo plazo con nuestros clientes.</p>
                        </div>
                    </article>
                    <article class="col-12 col-md-4" id="valores">
                        <div class="about-card values-card">
                            <h3>Valores</h3>
                            <ul>
                                <li>Seguridad</li>
                                <li>Integridad</li>
                                <li>Compromiso</li>
                                <li>Calidad</li>
                                <li>Profesionalismo</li>
                                <li>Resultados</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="contact-section page-section" id="contacto">
            <div class="container contact-content">
                <div class="contact-copy">
                    <p class="eyebrow">Hablemos</p>
                    <h2>¿Tienes una idea en mente?</h2>
                    <button class="btn btn-lime" type="button" data-bs-toggle="modal" data-bs-target="#contactModal">
                        Conversemos <span aria-hidden="true">↗</span>
                    </button>
                </div>
                <figure class="contact-visual">
                    <img src="/assets/images/contacto.png" alt="SS-PROYEC: ingeniería, mantenimiento, automatización, instalaciones y proyectos">
                </figure>
            </div>
        </section>

        <div class="modal fade contact-modal" id="contactModal" tabindex="-1" aria-labelledby="contactModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <p class="eyebrow eyebrow-dark mb-2">Hablemos</p>
                            <h2 class="modal-title" id="contactModalTitle">Cuéntanos tu idea</h2>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <form class="contact-form" id="contactForm">
                        <div class="modal-body">
                            <p class="contact-form-note">Completa tus datos y enviaremos tu mensaje a nuestro equipo.</p>
                            <div class="mb-3">
                                <label class="form-label" for="contactName">Nombre</label>
                                <input class="form-control" type="text" id="contactName" name="name" autocomplete="name" maxlength="150" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="contactEmail">Correo electrónico</label>
                                <input class="form-control" type="email" id="contactEmail" name="email" autocomplete="email" maxlength="254" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="contactPhone">Teléfono <span class="text-muted">(opcional)</span></label>
                                <input class="form-control" type="tel" id="contactPhone" name="phone" autocomplete="tel" maxlength="40">
                            </div>
                            <div>
                                <label class="form-label" for="contactMessage">Mensaje</label>
                                <textarea class="form-control" id="contactMessage" name="message" rows="4" maxlength="5000" required></textarea>
                            </div>
                            <div class="contact-honeypot" aria-hidden="true">
                                <label for="contactWebsite">No completar este campo</label>
                                <input type="text" id="contactWebsite" name="website" tabindex="-1" autocomplete="off">
                            </div>
                            <p class="contact-form-status" id="contactFormStatus" role="status" aria-live="polite"></p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-outline-dark" type="button" data-bs-dismiss="modal">Cancelar</button>
                            <button class="btn btn-lime" type="submit">Enviar mensaje <span aria-hidden="true">↗</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade project-image-modal" id="projectImageModal" tabindex="-1" aria-labelledby="projectImageModalTitle" aria-describedby="projectImageModalCaption" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="projectImageModalTitle">Imagen ampliada</h2>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar imagen"></button>
                    </div>
                    <div class="modal-body">
                        <img id="projectImageModalImage" src="" alt="">
                        <p id="projectImageModalCaption"></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-2">
            <a class="footer-brand" href="#inicio" aria-label="ss-proyec, inicio">
                <span>ss-proyec</span>
            </a>
            <nav class="footer-social" aria-label="Redes sociales">
                <a href="https://prueba.ingex" aria-label="Instagram" title="Instagram">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle class="social-icon-dot" cx="17.5" cy="6.5" r="0.8"></circle></svg>
                </a>
                <a href="https://prueba.ingex" aria-label="Facebook" title="Facebook">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path class="social-icon-fill" d="M13.5 21v-8h2.8l.4-3h-3.2V8c0-.9.3-1.4 1.5-1.4h1.8V3.9c-.9-.1-1.8-.2-2.7-.2-2.7 0-4.5 1.6-4.5 4.5V10H7v3h2.6v8h3.9Z"></path></svg>
                </a>
                <a href="https://prueba.ingex" aria-label="WhatsApp" title="WhatsApp">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 11.5a8 8 0 0 1-11.8 7L4 20l1.4-3.9A8 8 0 1 1 20 11.5Z"></path><path d="M9 8.5c-.3-.3-.6-.3-.8-.3-.3 0-.5 0-.7.3-.2.2-.8.7-.8 1.7s.8 2 1 2.2c.1.2 1.6 2.5 3.9 3.4 1.9.8 2.3.6 2.7.6.4-.1 1.2-.5 1.4-1 .2-.5.2-.9.1-1-.1-.1-.3-.2-.5-.3l-1.5-.7c-.2-.1-.4-.1-.5.1l-.7.8c-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.6-.9-.6-.5-1-1.1-1.1-1.3-.1-.2 0-.3.1-.4l.4-.4c.1-.1.2-.2.2-.4.1-.1 0-.3 0-.4L9 8.5Z"></path></svg>
                </a>
            </nav>
            <span>© <span data-current-year></span> · Todos los derechos reservados</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>
</html>
