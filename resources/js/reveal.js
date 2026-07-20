/**
 * Premium landing-page motion helpers (no framework dependency):
 *  - reveal-on-scroll for elements marked `.su-reveal` / `.su-stagger`
 *  - animated count-up for `[data-count-to]` number tiles
 *
 * Everything degrades gracefully: if JS never runs, content stays visible
 * (the `.su-reveal-armed` class is only added here), and reduced-motion
 * users get the final state immediately.
 */
function armReveal() {
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const targets = document.querySelectorAll('.su-reveal, .su-stagger');

    if (targets.length === 0) {
        return;
    }

    // Signal the CSS that JS is active, so the hidden initial state applies.
    document.documentElement.classList.add('su-reveal-armed');

    if (reduce || !('IntersectionObserver' in window)) {
        targets.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    obs.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -8% 0px' }
    );

    targets.forEach((el) => observer.observe(el));

    /**
     * Safety sweep: the observer's first callback can run before the layout has
     * settled (late-applied CSS, web fonts, images), which would leave elements
     * that are already on screen stuck in their hidden state until the user
     * scrolls. Re-check anything still hidden once the page has fully loaded.
     */
    const sweep = () => {
        document.querySelectorAll('.su-reveal:not(.is-visible), .su-stagger:not(.is-visible)').forEach((el) => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                el.classList.add('is-visible');
                observer.unobserve(el);
            }
        });
    };

    window.addEventListener('load', () => {
        requestAnimationFrame(sweep);
        setTimeout(sweep, 400);
    });
}

function countUp(el) {
    if (el.dataset.counted === '1') {
        return;
    }
    el.dataset.counted = '1';

    const target = parseFloat(el.dataset.countTo || '0');
    const duration = parseInt(el.dataset.countDuration || '1400', 10);
    const suffix = el.dataset.countSuffix || '';
    const start = performance.now();

    function tick(now) {
        const progress = Math.min((now - start) / duration, 1);
        // easeOutCubic
        const eased = 1 - Math.pow(1 - progress, 3);
        const value = Math.round(target * eased);
        el.textContent = value.toLocaleString('en-US') + suffix;
        if (progress < 1) {
            requestAnimationFrame(tick);
        }
    }

    requestAnimationFrame(tick);
}

function armCounters() {
    const counters = document.querySelectorAll('[data-count-to]');

    if (counters.length === 0) {
        return;
    }

    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (reduce || !('IntersectionObserver' in window)) {
        counters.forEach((el) => {
            const suffix = el.dataset.countSuffix || '';
            el.textContent = parseFloat(el.dataset.countTo || '0').toLocaleString('en-US') + suffix;
        });
        return;
    }

    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    countUp(entry.target);
                    obs.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.5 }
    );

    counters.forEach((el) => observer.observe(el));

    // Same late-layout safety net as the reveal observer (see armReveal).
    const sweep = () => {
        counters.forEach((el) => {
            if (el.dataset.counted === '1') {
                return;
            }
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                observer.unobserve(el);
                countUp(el);
            }
        });
    };

    window.addEventListener('load', () => {
        requestAnimationFrame(sweep);
        setTimeout(sweep, 400);
    });
}

function init() {
    armReveal();
    armCounters();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    init();
}
