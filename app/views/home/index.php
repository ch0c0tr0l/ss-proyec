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
                <figure class="hero-visual">
                    <img src="/assets/images/imagen1.png" alt="SS-PROYEC: Ingeniería y proyectos industriales">
                    <div class="hero-services" aria-label="Servicios principales">
                        <div class="hero-service-item"><img src="/assets/images/imagen2.png" alt="Mantenimiento"></div>
                        <div class="hero-service-item"><img src="/assets/images/imagen3.png" alt="Automatización"></div>
                        <div class="hero-service-item"><img src="/assets/images/imagen4.png" alt="Instalaciones"></div>
                        <div class="hero-service-item"><img src="/assets/images/imagen5.png" alt="Ingeniería"></div>
                    </div>
                    <figcaption><span class="visual-dot"></span> De la idea al resultado</figcaption>
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
        <div class="container d-flex flex-column flex-sm-row justify-content-between gap-2">
            <span>ss-proyec</span>
            <span>© <span data-current-year></span> · Todos los derechos reservados</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>
</html>
