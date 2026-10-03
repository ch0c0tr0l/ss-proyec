document.addEventListener('DOMContentLoaded', () => {
    const year = document.querySelector('[data-current-year]');

    if (year) {
        year.textContent = new Date().getFullYear();
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
