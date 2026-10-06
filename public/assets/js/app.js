document.addEventListener('DOMContentLoaded', () => {
    const year = document.querySelector('[data-current-year]');

    if (year) {
        year.textContent = new Date().getFullYear();
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
