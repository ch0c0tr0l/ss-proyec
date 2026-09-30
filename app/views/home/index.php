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
                <span class="brand-symbol" aria-hidden="true">S</span>
                <span>ss-proyec</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Abrir navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
                    <li class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Nosotros</button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="#nosotros">Conócenos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#mision">Misión</a></li>
                            <li><a class="dropdown-item" href="#vision">Visión</a></li>
                            <li><a class="dropdown-item" href="#valores">Valores</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-contact" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-section" id="inicio">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow"><span></span> Ideas que avanzan</p>
                    <h1>Hacemos que las buenas ideas <em>tomen forma.</em></h1>
                    <p class="hero-description">Acompañamos cada proyecto desde su primera idea hasta convertirlo en una realidad.</p>
                    <div class="hero-actions">
                        <a class="btn btn-lime" href="#proyectos">Ver proyectos <span aria-hidden="true">↘</span></a>
                        <a class="text-link-light" href="#nosotros">Conoce ss-proyec</a>
                    </div>
                </div>
                <figure class="hero-visual">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=85" alt="Espacio de trabajo luminoso y contemporáneo">
                    <figcaption><span class="visual-dot"></span> De la idea al resultado</figcaption>
                </figure>
            </div>
            <div class="hero-index" aria-hidden="true">SSP / 01</div>
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
                            <p>Impulsar proyectos con propósito, creando soluciones responsables junto a las personas y comunidades involucradas.</p>
                        </div>
                    </article>
                    <article class="col-12 col-md-4" id="vision">
                        <div class="about-card">
                            <span class="about-card-number">02</span>
                            <h3>Visión</h3>
                            <p>Ser un equipo referente por transformar ideas en proyectos valiosos, sostenibles y preparados para el futuro.</p>
                        </div>
                    </article>
                    <article class="col-12 col-md-4" id="valores">
                        <div class="about-card values-card">
                            <span class="about-card-number">03</span>
                            <h3>Valores</h3>
                            <ul>
                                <li>Integridad</li>
                                <li>Colaboración</li>
                                <li>Compromiso</li>
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
