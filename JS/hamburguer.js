function toggleMobileMenu() {
    const menuOverlay = document.getElementById('mobile-menu-overlay');
    const overlayBg = document.querySelector('.overlay-background');
    const bars = document.querySelectorAll('.bar');
    
    menuOverlay.classList.toggle('active');
    overlayBg.classList.toggle('active');
    
    // Animação do hambúrguer
    if (menuOverlay.classList.contains('active')) {
        bars[0].style.transform = 'rotate(-45deg) translate(-5px, 6px)';
        bars[1].style.opacity = '0';
        bars[2].style.transform = 'rotate(45deg) translate(-5px, -6px)';
    } else {
        bars[0].style.transform = 'none';
        bars[1].style.opacity = '1';
        bars[2].style.transform = 'none';
    }
}

// Adicione este elemento ao seu HTML, logo antes do fechamento do body
document.body.insertAdjacentHTML('beforeend', '<div class="overlay-background"></div>');

// Event listener para fechar ao clicar fora
document.querySelector('.overlay-background').addEventListener('click', toggleMobileMenu);