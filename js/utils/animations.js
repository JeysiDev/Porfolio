// Animation utility functions
export function initTypeWriter(element, strings, options = {}) {
    return new Typed(element, {
        strings,
        typeSpeed: 50,
        backSpeed: 30,
        backDelay: 2000,
        loop: true,
        ...options
    });
}

export function animateProgressBars(progressBars) {
    progressBars.forEach(progress => {
        const value = progress.style.width;
        progress.style.width = '0';
        progress.style.transition = 'width 1s ease';
        setTimeout(() => {
            progress.style.width = value;
        }, 100);
    });
}

export function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}