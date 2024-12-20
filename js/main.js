import { initTypeWriter } from './utils/animations.js';
import { initSmoothScroll, updateActiveNavLink } from './utils/navigation.js';
import { initContactForm } from './components/contact-form.js';
import { initProjectCards } from './components/project-cards.js';
import { initSkillsProgress } from './components/skills-progress.js';

document.addEventListener('DOMContentLoaded', function() {
    // Initialize type writer effect
    initTypeWriter('.typed-text', [
        'Web Developer'
    ]);

    // Initialize smooth scrolling
    initSmoothScroll();

    // Initialize scroll spy for navigation
    window.addEventListener('scroll', updateActiveNavLink);

    // Initialize project cards
    initProjectCards();

    // Initialize skills progress
    initSkillsProgress();

    // Initialize contact form
    initContactForm();
});