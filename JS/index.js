// Exemple : Animation au survol des cartes d'expérience
const cards = document.querySelectorAll('.exp-card');

cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-5px)';
        card.style.transition = '0.3s';
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
    });
});