// Dados de Produtos
const products = [
    {
        id: 1,
        name: "Cadeira de Escritório Ergonômica",
        category: "escritorio",
        image: "cadeira-escritorio.jpg"
    },
    {
        id: 2,
        name: "Sofá de Couro 3 Lugares",
        category: "sala",
        image: "sofa-couro.jpg"
    },
    {
        id: 3,
        name: "Mesa de Escritório Moderna",
        category: "escritorio",
        image: "mesa-escritorio.jpg"
    },
    // Adicione mais produtos aqui
];

// Renderizar Produtos
function renderProducts(filteredProducts = products) {
    const productsGrid = document.getElementById('products-grid');
    productsGrid.innerHTML = '';

    filteredProducts.forEach(product => {
        const productCard = document.createElement('div');
        productCard.classList.add('product-card');
        productCard.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <div class="product-actions">
                <button onclick="requestQuote(${product.id})">Solicitar Orçamento</button>
            </div>
        `;
        productsGrid.appendChild(productCard);
    });
}

// Filtrar Produtos
function filterProducts() {
    const categoryFilter = document.getElementById('category-filter').value;
    const searchInput = document.getElementById('search-input').value.toLowerCase();

    const filteredProducts = products.filter(product => 
        (categoryFilter === '' || product.category === categoryFilter) &&
        product.name.toLowerCase().includes(searchInput)
    );

    renderProducts(filteredProducts);
}

// Solicitar Orçamento
function requestQuote(productId) {
    const product = products.find(p => p.id === productId);
    alert(`Solicitar orçamento para: ${product.name}`);
    // Aqui você pode redirecionar para uma página de contato ou abrir um modal
}

// Event Listeners
document.getElementById('category-filter').addEventListener('change', filterProducts);
document.getElementById('search-input').addEventListener('input', filterProducts);
document.getElementById('search-button').addEventListener('click', filterProducts);

// Inicialização
renderProducts();