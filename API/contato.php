<!DOCTYPE html>
<html lang="pt-BR">
    <!-- Header -->
<head>
    <!-- Meta tags para SEO -->
    <meta name="description" content="Smartflex Móveis - Móveis personalizados e de alta qualidade">
    <meta name="keywords" content="móveis, design, personalizado, escritório, residencial">
    <meta name="author" content="Smartflex Móveis">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartflex Móveis</title>
     <script src="/JS/menu.js" defer></script>
     <script src="/JS/hamburguer.js" defer></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/cssfooter.css">
    <link rel="stylesheet" href="/CSS/contato.css">
</head>

<body class="contatobody">
<!-- Header -->
<header id="header" class="bg-* text-* text-center p-3 fixed-top w-100">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <section class="logo">
            <a href="index.php">
                <img src="/imagens/logo1.png" alt="Smartflex" class="img-fluid">
            </a>
        </section>
<!-- Menu Desktop (existente) -->
        <section class="menu-desktop">
            <nav>
                <ul class="list-unstyled d-flex mb-0">

                     <li class="mx-3">
                         <a href="index.php" class="text-black text-decoration-none" style="font-size: 25px;">Home</a>
                         </li>  
                    <li class="mx-3">
                        <a href="produtos.php" class="text-black text-decoration-none" style="font-size: 25px;">Produtos</a>
                    </li>
                    
                    <li class="mx-3">
                        <a href="quemsomos.php" class="text-black text-decoration-none" style="font-size: 25px;">Quem Somos</a>
                    </li>
                    <li class="mx-3">
                        <a href="contato.php" class="text-black text-decoration-none" style="font-size: 25px;">Contato</a>
                    </li>

                </ul>
            </nav>
        </section>

       
    </div>
     <!-- Novo Menu Mobile -->
     <div class="menu-mobile">
            <div class="hamburger-menu" onclick="toggleMobileMenu()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </div>

    <!-- Menu Mobile Overlay -->
    
    <div id="mobile-menu-overlay" class="mobile-menu-overlay">
    <span class="close-menu" onclick="toggleMobileMenu()">×</span>
    <div class="mobile-menu-content">
        <a href="index.php">Home</a>
        <a href="produtos.php">Produtos</a>
        <a href="quemsomos.php">Quem Somos</a>
        <a href="contato.php">Contato</a>
    </div>
</div>
    <!-- Menu Desktop (existente) -->
</header>
       <!-- /Header -->

       <!-- Formulario -->


       <main>
  <div class="content-container">
    <!-- Formulário -->
    <section class="form-container">
      <form  action="https://formsubmit.co/caiquepetrs@gmail.com" method="POST"> 
        <h1>Entre em contato</h1>
        <p>Preencha o formulário abaixo e entraremos em contato com você</p>
        <div class="input-single">
          <input class="input" type="text" id="nome" name="nome" >
          <label for="nome">Seu nome completo</label>
        </div>
        <div class="input-single">
          <input class="input" type="text" id="email" name="email" >
          <label for="email">Seu e-mail</label>
        </div>
        <div class="input-single">
          <input class="input" type="text" id="telefone" name="telefone" >
          <label for="telefone">Seu telefone</label>
        </div>
        <div class="input-single">
          <input class="input" type="text" id="mensagem" name="mensagem" >
          <label for="mensagem">Digite sua mensagem</label>
        </div>
        <div class="btn">
          <input type="submit" value="Enviar">
        </div>
      </form>
    </section>

    <!-- Information e Mapa -->
    <div class="linha">
      <!-- Information -->
      <section class="information">
        <div class="contato">
          <p><b>Entre em contato</b> com a SmartFlex por meio do formulário ao lado ou pelo telefone <b>(11) 99132-2982.</b></p>
        </div>
        
        <p><b>Endereço:</b><br> R. João Coelho de Souza, 338 - Vila Nogueira, Diadema - SP, 09950-020</p>
        
      </section>

      <!-- Mapa -->
      <section class="map-section">
        <h2>Onde ficamos?</h2>
        <div class="map-wrapper">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.894326885239!2d-46.62561672374369!3d-23.681777784619837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4398443c94ef%3A0x7b38679159cb95f2!2sR.%20Jo%C3%A3o%20Coelho%20de%20Souza%2C%20338%20-%20Vila%20Nogueira%2C%20Diadema%20-%20SP%2C%2009950-020!5e0!3m2!1spt-BR!2sbr!4v1710371234567!5m2!1spt-BR!2sbr"
            width="100%"
            height="300"
            style="border: 0; outline: none;"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </section>
    </div>
  </div>
</main>


            
       
    
   
<!-- Footer -->
<footer class="rodape" id="contato">
    <div class="rodape-div">

        <div class="rodape-div-1">
            <div class="rodape-div-1-coluna">
                <div class="logo12">
                    <a href="index.php">
                         <img src="/imagens/logotipo.png" width="auto" height="60">
                         </a>
                </div>
                <div class="texto">
                    <p>R. João Coelho de Souza, 338 - Vila Nogueira, Diadema - SP, 09950-020</p>
                </div>
            </div>
        </div>

        <div class="rodape-div-2">
            <div class="rodape-div-2-coluna">
                <span><b>Contato</b></span>
                <p>contato@smartflexmoveis.com</p>
                <p>(11) 991322-2982</p>
            </div>
        </div>

        <div class="rodape-div-3">
            <div class="rodape-div-3-coluna">
                <span><b>Links</b></span>
                <p><a href="#servicos">Sobre nós</a></p>
                <p><a href="contato.php">Fale Conosco</a></p>
                <p><a href="#catalogo">Catalógo</a></p>
                <p><a href="https://www.facebook.com/people/Smartflex-M%C3%B3veis/100066737858771/">Facebook</a></p>
            </div>
        </div>

        <div class="rodape-div-4">
            <div class="rodape-div-4-coluna">
                <span><b>Outros</b></span>
                <p><a href="/imagens/2.0v.pdf">Políticas</a></p>
            </div>
        </div>

    </div>
  
  <p class="rodape-direitos">&copy;2025 Smartflex Móveis, Ltda. Todos os direitos reservados. CNPJ 10.425.653/0001-76</p>
  </body>  
</footer>


</html>


