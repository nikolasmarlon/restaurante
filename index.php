<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <title>Restalrante</title>    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Rouge+Script&family=Source+Sans+Pro:wght@400;900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header>
    <div class="container" id="hero">
      <nav class="nav">
        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
          <i class="fas fa-times"></i>
        </div>
        <a href="index.html" class="logo"><img src="" alt=""></a>
        <ul class="nav-list">
          <li class="nav-item active">
            <a href="index.html" class="nav-link">Inicío</a>
          </li>
          <li class="nav-item">
            <a href="#menu" class="nav-link">Menu</a>
          </li>
          <li class="nav-item">
            <a href="#reservation" class="nav-link">Reservas</a>
          </li>
          <li class="nav-item">
            <a href="#news" class="nav-link">News</a>
          </li>          
          <li class="nav-item">
            <a href="#shop" class="nav-link">Shop</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contato</a>
            
          </li>
        </ul>
      </nav>      
    </div>
  </header>

  <section class="main" id="main">
    <div class="container">
      <h2 class="sub-headline">
        <span class="first-letter">B</span>em-vindo        
      </h2>
      <h1 class="headline">Restaurante</h1>
      <div class="headline-description">
        <div class="separator">
          <div class="line line-left"></div>
          <div class="asterisk"><i class="fas fa-asterisk"></i></div>
          <div class="line line-right"></div>
        </div>
        <div class="single-animation">
          <h5>Pronto para ser aberto</h5>
          <a href="#menu" class="btn cta-btn">Explorar</a>
        </div>
      </div>
    </div>
  </section>

  <section class="our-history">
    <div class="container">
      <div class="restaurant-info">
        <div class="restaurant-description padding-right animate-left">
          <div class="global-headline">
            <h2 class="sub-headline">
              <span class="first-letter">D</span>escobrir
            </h2>
            <h3 class="headline headline-dark">Nossa história</h3>
            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
          </div>
          <p>. A família Castelo, porém, resolveu apostar numa via de passagem, mais afastada. E isso mudou, inclusive, a forma como foram definidas as estratégias do restaurante. Em vez de buffet, a aposta foi no à la carte.  </p>
          <a href="#" class="btn body-btn">Sobre nós</a>
        </div>
        <div class="restaurant-img animate-right">
          <img src="./imag/our-story-1.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="tasteful-recipes between" id="news">
    <div class="container">
      <div class="global-headline">
        <div class="animate-top">
          <h2 class="sub-headline">
            <span class="first-letter">D</span>e bom gosto
          </h2>
        </div>        
        <div class="animate-bottom">
          <h3 class="headline">Receitas</h3>
        </div>                
      </div>
    </div>
  </section>

  <section class="discover-our-menu" id="menu">
    <div class="container">
      <div class="restaurant-info">
        <div class="image-group padding-right animate-left">
          <img src="./imag/menu-group-1.jpg" alt="">
          <img src="./imag/menu-group-2.jpg" alt="">
          <img src="./imag/menu-group-3.jpg" alt="">
          <img src="./imag/menu-group-4.jpg" alt="">
        </div>
        <div class="restaurant-description animate-right">
          <div class="global-headline">
            <h2 class="sub-headline">
              <span class="first-letter">D</span>escobrir
            </h2>
            <h3 class="headline headline-dark">Menu</h3>
            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
          </div>
          <p>. A família Castelo, porém, resolveu apostar numa via de passagem, mais afastada. E isso mudou, inclusive, a forma como foram definidas as estratégias do restaurante. Em vez de buffet, a aposta foi no à la carte.</p>
          <a href="#" class="btn body-btn">Veja o cardápio completo</a>
        </div>
      </div>
    </div>
  </section>

  <section class="perfect-blend between" id="shop">
    <div class="container">
      <div class="global-headline">
        <div class="animate-top">
          <h2 class="sub-headline">
            <span class="first-letter">O</span>perfeito
          </h2>
        </div>        
        <div class="animate-bottom">
          <h3 class="headline">Mistura</h3>
        </div>                
      </div>
    </div>
  </section>

  <section class="culinary-delight" id="reservation">
    <div class="container">
      <div class="restaurant-info">
        <div class="restaurant-description padding-right animate-left">
          <div class="global-headline">
            <h2 class="sub-headline">
              <span class="first-letter">C</span>ulinary
            </h2>
            <h3 class="headline headline-dark">Delight</h3>
            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
          </div>
          <p>A família Castelo, porém, resolveu apostar numa via de passagem, mais afastada. E isso mudou, inclusive, a forma como foram definidas as estratégias do restaurante. Em vez de buffet, a aposta foi no à la carte. 
          </p>
          <a href="#" class="btn body-btn">Fazer sua reserva</a>
        </div>
        <div class="image-group">
          <img class="animate-top" src="./imag/delight-group-1.jpg" alt="">
          <img class="animate-bottom" src="./imag/delight-group-2.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container" id="contact">
      <div class="back-to-top">
        <a href="#hero"><i class="fas fa-chevron-up"></i></a>
      </div>
      <div class="footer-content">
        <div class="footer-content-about animate-top">
          <h4>Restalrante</h4>
          <div class="asterisk"><i class="fas fa-asterisk"></i></div>
          <p>A família Castelo, porém, resolveu apostar numa via de passagem, mais afastada. E isso mudou, inclusive, a forma como foram definidas as estratégias do restaurante. Em vez de buffet, a aposta foi no à la carte.</p>
        </div>
        <div class="footer-content-divider animate-bottom">
          <div class="social-media">
            <h4>Siga nossas redes</h4>
            <ul class="social">
              <li><a href=""><i class="fab fa-instagram"></i></a></li>
              <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
              <li><a href=""><i class="fab fa-pinterest"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href=""><i class="fab fa-tripadvisor"></i></a></li>
            </ul>
          </div>
         
        </div>
      </div>
    </div>
  </footer>
  <script src="https://unpkg.com/scrollreveal"></script>
<script src="script.js"></script>
</body>
</html>