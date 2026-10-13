document.addEventListener('DOMContentLoaded', () => {
    const year = document.querySelector('[data-current-year]');

    if (year) {
        year.textContent = new Date().getFullYear();
    }

    document.querySelectorAll('.project-gallery-toggle').forEach((toggle) => {
        const panelId = toggle.getAttribute('aria-controls');
        const panel = panelId ? document.getElementById(panelId) : null;
        const card = toggle.closest('.project-card');

        if (!(toggle instanceof HTMLButtonElement) || !(panel instanceof HTMLElement) || !card) {
            return;
        }

        toggle.addEventListener('click', () => {
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

            toggle.setAttribute('aria-expanded', String(!isExpanded));
            panel.setAttribute('aria-hidden', String(isExpanded));
            panel.inert = isExpanded;
            card.classList.toggle('is-gallery-open', !isExpanded);
        });
    });

    const projectImageModal = document.querySelector('#projectImageModal');
    const projectImageModalImage = document.querySelector('#projectImageModalImage');
    const projectImageModalTitle = document.querySelector('#projectImageModalTitle');
    const projectImageModalCaption = document.querySelector('#projectImageModalCaption');

    if (
        projectImageModal instanceof HTMLElement &&
        projectImageModalImage instanceof HTMLImageElement &&
        projectImageModalTitle instanceof HTMLElement &&
        projectImageModalCaption instanceof HTMLElement
    ) {
        projectImageModal.addEventListener('show.bs.modal', (event) => {
            const trigger = event.relatedTarget;
            const thumbnail = trigger instanceof HTMLElement
                ? trigger.querySelector('.project-gallery-item img')
                : null;

            if (!(thumbnail instanceof HTMLImageElement)) {
                return;
            }

            projectImageModalImage.src = thumbnail.src;
            projectImageModalImage.alt = thumbnail.alt;
            projectImageModalTitle.textContent = thumbnail.alt;
            projectImageModalCaption.textContent = thumbnail.alt;
        });

        projectImageModal.addEventListener('hidden.bs.modal', () => {
            projectImageModalImage.removeAttribute('src');
            projectImageModalImage.alt = '';
            projectImageModalTitle.textContent = 'Imagen ampliada';
            projectImageModalCaption.textContent = '';
        });
    }

    const contactForm = document.querySelector('#contactForm');

    if (contactForm instanceof HTMLFormElement) {
        const formStatus = document.querySelector('#contactFormStatus');
        const submitButton = contactForm.querySelector('button[type="submit"]');

        contactForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            if (!(formStatus instanceof HTMLElement) || !(submitButton instanceof HTMLButtonElement)) {
                return;
            }

            const setFormStatus = (message, state) => {
                formStatus.textContent = message;
                formStatus.classList.toggle('is-success', state === 'success');
                formStatus.classList.toggle('is-error', state === 'error');
            };

            setFormStatus('', '');
            submitButton.disabled = true;

            try {
                const response = await fetch('/send-contact.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(Object.fromEntries(new FormData(contactForm).entries()))
                });
                const result = await response.json();

                if (!response.ok) {
                    setFormStatus(result.error || 'No se pudo enviar el mensaje. Inténtalo de nuevo.', 'error');
                    return;
                }

                contactForm.reset();
                setFormStatus(result.message, 'success');
            } catch (error) {
                if (error instanceof TypeError) {
                    setFormStatus('No se pudo conectar con el servidor. Revisa tu conexión e inténtalo de nuevo.', 'error');
                } else if (error instanceof SyntaxError) {
                    setFormStatus('El servidor respondió con un formato inesperado. Inténtalo de nuevo más tarde.', 'error');
                } else {
                    throw error;
                }
            } finally {
                submitButton.disabled = false;
            }
        });
    }

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const scrollRevealTargets = document.querySelectorAll(
        'main > section, .project-card, .about-card, .site-footer'
    );

    if (!prefersReducedMotion && 'IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                entry.target.classList.toggle('is-visible', entry.isIntersecting);
            });
        }, {
            threshold: 0,
            rootMargin: '-8% 0px -8% 0px'
        });

        scrollRevealTargets.forEach((target) => {
            target.classList.add('scroll-reveal');
            revealObserver.observe(target);
        });
    }
});
