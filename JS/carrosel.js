// carousel.js
class Carousel {
  constructor() {
    // Elementos do DOM
    this.container = document.querySelector('.carousel-wrapper');
    this.track = document.querySelector('.carousel-track');
    this.prevButton = document.querySelector('.carousel-button.prev');
    this.nextButton = document.querySelector('.carousel-button.next');
    
    // Estado do carrossel
    this.isDragging = false;
    this.startX = 0;
    this.scrollLeft = 0;
    
    // Dados dos produtos
    this.products = [
      {
        id: 1,
        title: 'Móveis de Aço',
        category: 'Escritório',
        image: 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
      },
      {
        id: 2,
        title: 'Móveis de Madeira',
        category: 'receba',
        image: 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
      },
      {
        id: 3,
        title: 'Cadeiras para Escritório',
        category: 'Escritório',
        image: 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
      },
      {
        id: 4,
        title: 'Sofás & Poltronas',
        category: 'Sala',
        image: 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
      }

      // ... mais produtos
    ];
    
    this.initialize();
  }
  
  initialize() {
    // Renderiza os cards iniciais
    this.renderCards();
    
    // Adiciona os event listeners
    this.addEventListeners();
    
    // Configura o scroll infinito
    this.setupInfiniteScroll();
  }
  
  renderCards() {
    // Duplica os produtos para criar o efeito infinito
    const items = [...this.products, ...this.products, ...this.products];
    
    this.track.innerHTML = items.map(product => `
      <div class="carousel-card" data-id="${product.id}">
        <div class="card-image">
          <img src="${product.image}" alt="${product.title}">
        </div>
        <div class="card-content">
          <h3 class="card-title">${product.title}</h3>
          <a href="produtos.php" class="card-button">Explorar</a>

        </div>
      </div>
    `).join("");
  }
  
  addEventListeners() {
    // Navegação por botões
    this.prevButton.addEventListener('click', () => this.scroll('left'));
    this.nextButton.addEventListener('click', () => this.scroll('right'));
    
    // Eventos de mouse para drag
    this.track.addEventListener('mousedown', this.startDragging.bind(this));
    this.track.addEventListener('mousemove', this.drag.bind(this));
    this.track.addEventListener('mouseup', this.stopDragging.bind(this));
    this.track.addEventListener('mouseleave', this.stopDragging.bind(this));
    
    // Previne o menu de contexto ao arrastar
    this.track.addEventListener('contextmenu', e => e.preventDefault());
    
    // Clique nos cards
    this.track.addEventListener('click', this.handleCardClick.bind(this));
  }
  
  startDragging(e) {
    if (e.button !== 0) return; // Apenas botão esquerdo do mouse
    
    this.isDragging = true;
    this.track.classList.add('dragging');
    this.startX = e.pageX - this.track.offsetLeft;
    this.scrollLeft = this.track.scrollLeft;
  }
  
  drag(e) {
    if (!this.isDragging) return;
    
    e.preventDefault();
    const x = e.pageX - this.track.offsetLeft;
    const walk = (x - this.startX) * 2;
    this.track.scrollLeft = this.scrollLeft - walk;
  }
  
  stopDragging() {
    this.isDragging = false;
    this.track.classList.remove('dragging');
  }
  
  scroll(direction) {
    const card = this.track.querySelector(".carousel-card"); // Obtém um item do carrossel
    const cardWidth = card.offsetWidth + parseInt(window.getComputedStyle(this.track).gap); // Calcula a largura total (incluindo gap)
    const scrollAmount = direction === "left" ? -cardWidth : cardWidth; // Define o deslocamento correto

    this.track.scrollBy({ left: scrollAmount, behavior: "smooth" }); // Realiza a rolagem suave
}

  
  setupInfiniteScroll() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Quando chegar ao final, volta ao início
          if (entry.target === this.track.lastElementChild) {
            this.track.scrollLeft = 0;
          }
          // Quando chegar ao início, vai para o final
          if (entry.target === this.track.firstElementChild) {
            this.track.scrollLeft = this.track.scrollWidth;
          }
        }
      });
    }, { threshold: 3 });
    
    // Observa o primeiro e último card
    observer.observe(this.track.firstElementChild);
    observer.observe(this.track.lastElementChild);
  }
  
  handleCardClick(e) {
    if (this.isDragging) return;
    
    const card = e.target.closest('.carousel-card');
    if (card) {
      const productId = card.dataset.id;
      window.location.href = `/produtos/${productId}`;
    }
  }
}

// Inicializa o carrossel quando o DOM estiver pronto
document.addEventListener('DOMContentLoaded', () => {
  new Carousel();
});
