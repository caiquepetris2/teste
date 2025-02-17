// Animação suave ao scroll
document.addEventListener('DOMContentLoaded', function() {
    // Seleciona todos os cards
    const cards = document.querySelectorAll('.card');
    
    // Função para verificar se um elemento está visível na viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Função para animar cards quando ficarem visíveis
    function animateCardsOnScroll() {
        cards.forEach(card => {
            if (isElementInViewport(card)) {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }
        });
    }

    // Inicialmente, esconde todos os cards
    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.5s ease-in-out';
    });

    // Adiciona o evento de scroll
    window.addEventListener('scroll', animateCardsOnScroll);
    
    // Chama a função uma vez para animar os elementos já visíveis
    animateCardsOnScroll();
});