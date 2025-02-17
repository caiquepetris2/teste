<?php
    include 'header.php';
?>


<!-- Banner Inicial -->
<section class="hero-site d-flex justify-content-start align-items-center" style="height: 100vh; background-image: url('/imagens/bannerhome1280x649.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
                <div class="txt-hero text-white text-left container">
                        <h1 class="display-4 font-weight-light mb-4">Bem-vindo à
                        <span class="font-weight-bold d-block">Smartflex Móveis</span> </h1>
                        <p class="h3 font-weight-light mb-4">Transformando espaços com design e qualidade</p>
                </div>
        </div>
</section>


<!-- /Banner Inicial -->


<!-- Carrosel -->

<!-- index.html -->
<section class="carousel-section">
  <div class="container">
    <h2 class="titlecarousel">Explore Nossas Linhas de Produtos</h2>
    
    <div class="carousel-container">
      <!-- Botões de navegação -->
      <button class="carousel-button prev">
        <i class="fas fa-chevron-left"></i>
      </button>
      
      <button class="carousel-button next">
        <i class="fas fa-chevron-right"></i>
      </button>


      <!-- Wrapper do carrossel -->
      <div class="carousel-wrapper">
        <div class="carousel-track">
            <script src="/JS/carrosel.js" defer></script>
          <!-- Os cards serão inseridos aqui via JavaScript -->
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

<!-- /Carrosel -->

<!-- Conteudo -->
<section class="conteudo-azul">
  <div class="caixa">
    <h2 class="title">Transforme Seus Espaços com a Smartflex</h2>
    <p class="text">
      Quer criar ambientes únicos e funcionais? Nossa equipe está pronta para ajudar você a encontrar as soluções perfeitas para seu espaço. 
      Entre em contato conosco e descubra como podemos transformar suas ideias em realidade.
    </p>
    <div class="btn-container">
        <button onclick="window.location.href='http://wa.me/55119913222982'"> 
            Fale com especialistas
        </button>
    </div>
   
  </div>
</section>


  

<?php
    include 'footer.php';
?>

</html>
