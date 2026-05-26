// JS/projets.js
document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.project-card');
    
    cards.forEach((card, index) => {
        // Apparition décalée pour un effet "wow"
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });
});