<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartflex Móveis</title>
     <script src="/JS/menu.js" defer></script>
    <link rel="stylesheet" href="/CSS/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/cssfooter.css">
    <link rel="stylesheet" href="/CSS/homepage.css">
    <link rel="stylesheet" href="/CSS/produtos.css">
    <link rel="stylesheet" href="/CSS/quemsomos.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="produtos.css" rel="stylesheet">
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="/JS/hamburguer.js" defer></script>
    
   
   
</head>
<body>

<header id="header" class="bg-* text-* text-center p-3 fixed-top w-100">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <section class="logo">
            <a href="index.php">
                <img src="/imagens/logo1.png" alt="Smartflex" class="img-fluid">
            </a>
        </section>

        <section class="menu-desktop">
            <nav>
                <ul class="list-unstyled d-flex mb-0">

                     <li class="mx-3">
                         <a href="index.php" class="text-white text-decoration-none" style="font-size: 25px;">Home</a>
                         </li>  
                    <li class="mx-3">
                        <a href="produtos.php" class="text-white text-decoration-none" style="font-size: 25px;">Produtos</a>
                    </li>
                    
                    <li class="mx-3">
                        <a href="quemsomos.php" class="text-white text-decoration-none" style="font-size: 25px;">Quem Somos</a>
                    </li>
                    <li class="mx-3">
                        <a href="contato.php" class="text-white text-decoration-none" style="font-size: 25px;">Contato</a>
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

</header>








