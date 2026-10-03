<?php

$title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | SS-PROYECT</title>
    <link rel="icon" type="image/png" href="/assets/images/7.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
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
                    <img src="/assets/images/imagen6.png" alt="SS-PROYEC: ingeniería, mantenimiento, automatización e instalaciones">
                </figure>
            </div>
        </section>

        <section class="projects-section page-section" id="proyectos">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow eyebrow-dark">Lo que hacemos</p>
                        <h2>Proyectos con <em>sentido.</em></h2>
                    </div>
                    <p class="section-intro">Cada proyecto es una oportunidad para pensar mejor, trabajar en equipo y crear algo que perdure.</p>
                </div>
                <div class="row g-3 project-list">
                    <div class="col-12 col-md-4">
                        <article class="project-card project-card-green">
                            <span class="project-number">01 / PLANIFICACIÓN</span>
                            <div class="project-mark mark-plan" aria-hidden="true"><span></span><span></span><span></span></div>
                            <h3>Una dirección clara</h3>
                            <p>Definimos objetivos y trazamos el camino para alcanzarlos.</p>
                        </article>
                    </div>
                    <div class="col-12 col-md-4">
                        <article class="project-card project-card-coral">
                            <span class="project-number">02 / COLABORACIÓN</span>
                            <div class="project-mark mark-team" aria-hidden="true"><span></span><span></span><span></span></div>
                            <h3>Ideas en conjunto</h3>
                            <p>Unimos perspectivas y talento para encontrar mejores soluciones.</p>
                        </article>
                    </div>
                    <div class="col-12 col-md-4">
                        <article class="project-card project-card-blue">
                            <span class="project-number">03 / RESULTADOS</span>
                            <div class="project-mark mark-result" aria-hidden="true"><span></span><span></span><span></span></div>
                            <h3>Avances que cuentan</h3>
                            <p>Llevamos cada iniciativa a resultados concretos y medibles.</p>
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
                            <span class="about-card-number">01</span>
                            <h3>Misión</h3>
                            <p>Brindar soluciones integrales de mantenimiento, ingeniería y proyectos industriales que contribuyan a la continuidad y eficiencia de las operaciones de nuestros clientes, mediante una ejecución segura, profesional y confiable, cumpliendo los alcances, tiempos y estándares acordados.</p>
                        </div>
                    </article>
                    <article class="col-12 col-md-4" id="vision">
                        <div class="about-card">
                            <span class="about-card-number">02</span>
                            <h3>Visión</h3>
                            <p>Consolidar a SS-PROYEC como una empresa reconocida y confiable en el sector industrial, distinguiéndonos por nuestra capacidad de respuesta, calidad de ejecución y desarrollo de soluciones que generen relaciones de largo plazo con nuestros clientes.</p>
                        </div>
                    </article>
                    <article class="col-12 col-md-4" id="valores">
                        <div class="about-card values-card">
                            <span class="about-card-number">03</span>
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
                <div>
                    <p class="eyebrow">Hablemos</p>
                    <h2>¿Tienes una idea en mente?</h2>
                </div>
                <a class="btn btn-lime" href="mailto:contacto@ss-proyec.com">Conversemos <span aria-hidden="true">↗</span></a>
            </div>
        </section>
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
