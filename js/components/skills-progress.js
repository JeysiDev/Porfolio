import { isInViewport } from '../utils/animations.js';

export function initSkillsProgress() {
    const skillsSection = document.querySelector('#skills');
    const progressBars = document.querySelectorAll('.progress-bar');
    let skillsShown = false;

    function showProgress() {
        progressBars.forEach(progress => {
            const value = progress.style.width;
            progress.style.width = '0';
            progress.style.transition = 'width 1s ease';
            setTimeout(() => {
                progress.style.width = value;
            }, 100);
        });
    }

    window.addEventListener('scroll', () => {
        if (!skillsShown && isInViewport(skillsSection)) {
            showProgress();
            skillsShown = true;
        }
    });
}