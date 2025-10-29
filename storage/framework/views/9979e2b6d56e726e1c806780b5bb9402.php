<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginal Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Great+Vibes&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .custom-red {
            background-color: #000000;
        }

        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(60%);
        }

        .hero-text {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            width: 90%;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            font-family: 'Bebas Neue', sans-serif;
            margin-bottom: 15px;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn-custom {
            background-color: #9c1919ff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 8px;
            font-family: 'Bebas Neue', sans-serif;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-custom:hover {
            background-color: #005018ff;
            transform: scale(1.05);
        }

        .social-icon i {
            font-size: 1.8rem;
            color: white;
            transition: color 0.3s, transform 0.3s;
        }

        .social-icon:hover i {
            color: #FF6B6B;
            transform: scale(1.2);
        }

        @media (max-width: 992px) {
            .hero-text h1 {
                font-size: 2.8rem;
            }
            .hero-text p {
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 2.3rem;
            }
            .hero-text p {
                font-size: 0.95rem;
            }
            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .hero-text h1 {
                font-size: 1.8rem;
            }
            .hero-text p {
                font-size: 0.85rem;
            }
            .hero-buttons {
                gap: 10px;
            }
        }

        .navbar-brand {
            color: white !important;
            font-size: 30px;
            font-weight: bold;
            transition: color 0.3s ease;
            font-family: 'Bebas Neue', sans-serif;
        }

        .navbar-brand:hover {
            color: #9c1919ff !important;
        }

        .nav-link.dropdown-toggle {
            color: white !important;
            font-size: 19px;
            transition: color 0.3s ease;
        }

        .nav-link.dropdown-toggle:hover {
            color: #9c1919ff !important;
        }

        .nav-link {
            color: white !important;
            font-size: 19px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #9c1919ff !important;
        }

        .icon-wpp {
            font-size: 1.42rem;
            color: #25D366;
            transition: transform 0.3s, color 0.3s;
            margin-left: 2rem;
        }

        .icon-wpp:hover {
            color: #128C7E;
            transform: scale(1.2);
        }

        .texto-menu {
            text-align: justify;
            line-height: 1.6;
            width: 70%;
            margin: 0 auto;
            font-size: 18px;
            padding-top: 75px;
        }

        .menu-pizzas {
            text-align: justify;
            line-height: 1.6;
            width: 70%;
            margin: 0 auto;
            font-size: 25px;
            text-align: center;
        }

        .ingredientes {
            text-align: justify;
            line-height: 1.6;
            width: 77%;
            margin: 0 auto;
            font-size: 18px;
            padding-top: 15px;
        }

        .ingredientes-2 {
            text-align: justify;
            line-height: 1.6;
            width: 90%;
            margin: 0 auto;
            font-size: 18px;
            padding-top: 15px;
        }

        footer {
            background-color: black;
        }

        .contato {
            color: white;
            text-align: center;
        }

        h5 {
            color: white;
        }

        #mapa {
            
        }
        
        footer  {
        background-color: black; color: white; text-align: center; padding: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Header / Navbar -->
  <header>
  <nav class="navbar navbar-expand-lg fixed-top custom-red">
    <div class="container">
      <a class="navbar-brand text-white" href="#">Pizzaria Delícia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto align-items-lg-center flex-wrap">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Catálogo
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo e(route('produtos')); ?>">Produtos</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('servicos')); ?>">Serviços</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo e(route('fale-conosco')); ?>">Fale conosco</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo e(route('sobre-nos')); ?>">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo e(route('login')); ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center p-0" href="https://wa.me/556732336821" target="_blank">
              <i class="bi bi-whatsapp icon-wpp"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


    <!-- Hero Section -->
    <div class="hero-section">
        <img src="<?php echo e(asset('img/hero-pizza.jpg')); ?>" alt="Pizza deliciosa" class="hero-image">
        <div class="hero-text">
            <h1>Bem-vindo à Pizzaria Delícia!</h1>
            <p>Na Pizzaria Delícia, cada fatia é feita com ingredientes frescos, muito amor e aquele toque secreto do nosso chef. Experimente o verdadeiro sabor que conquista corações e paladares!</p>

            <div class="hero-buttons">
                <a href="#" class="btn btn-custom">Peça agora</a>
                <a href="https://www.facebook.com" target="_blank" class="social-icon">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.whatsapp.com" target="_blank" class="social-icon">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Texto menu -->
    <div class="texto-menu">
        <h2>Localizada em Corumbá, a Pizzaria Delícia serve as requintadas pizzas do chefe Bob Esponja.</h2>
        <br>
        <p>
            A Pizzaria Delícia abriu suas portas no coração de Corumbá em 1998, com a missão de oferecer pizzas artesanais feitas com ingredientes frescos e selecionados, garantindo qualidade e sabor em cada fatia. Desde então, conquistamos o paladar dos moradores e visitantes, tornando-nos referência na cidade.
            Nosso ambiente é acolhedor e familiar, perfeito para encontros com amigos e momentos em família. Além das tradicionais pizzas, oferecemos opções gourmet e vegetarianas, além de deliciosas sobremesas e bebidas artesanais que complementam a experiência.
            Na Pizzaria Delícia, cada pizza é preparada com dedicação e paixão, seguindo receitas únicas e mantendo a essência da tradição italiana. Nosso compromisso é levar sabor, alegria e momentos inesquecíveis a todos que nos visitam.
            Venha nos conhecer e descubra porque nossa pizza é a favorita de Corumbá!
        </p>
    </div>

    <br><br>

    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('img/ivan-torres-MQUqbmszGGM-unsplash.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/shourav-sheikh-a66sGfOnnqQ-unsplash.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/nik-owens-40OJLYVWeeM-unsplash.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br><br>

  <!--  COLOCAR AQUI O MENU COM AS PIZZAS  -->
   
    <br><br>

    <!-- Footer -->
<footer style="background-color: #000; color: #fff; padding: 40px 20px;">
  <div class="container">
    <div class="row">
      <!-- Informações da Pizzaria -->
      <div class="col-md-4 mb-3">
        <h5>Pizzaria Delícia</h5>
        <p>Delícias que conquistam corações e paladares!</p>
        <p><strong>Horário:</strong> Seg-Sex: 17h - 23h <br> Sáb-Dom: 18h - 00h</p>
        <p><strong>Contato:</strong> (67) 3233-6821</p>
        <div class="social-icons mt-2">
          <a href="https://www.facebook.com" target="_blank" style="color: #3b5998; margin-right: 10px; font-size: 1.5rem;">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://www.instagram.com" target="_blank" style="color: #E1306C; margin-right: 10px; font-size: 1.5rem;">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://wa.me/556732336821" target="_blank" style="color: #25D366; font-size: 1.5rem;">
            <i class="bi bi-whatsapp"></i>
          </a>
        </div>
      </div>

      <!-- Mapa -->
      <div class="col-md-8">
        <h5>Localização</h5>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.493010531053!2d-57.65000459999999!3d-18.9979852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9387a099558d7d1d%3A0x2ee0c9eeab71d5f0!2sPizzaria%20Fiorella!5e0!3m2!1spt-BR!2sbr!4v1761743130470!5m2!1spt-BR!2sbr" 
          width="100%" height="250" style="border:0; border-radius:8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>

    <hr style="border-color: #444; margin: 20px 0;">

    <!-- Copyright -->
    <div class="text-center">
      <p>&copy; 2025 Pizzaria Delícia. Todos os direitos reservados.</p>
      <p>Alunos: Alec Santos, João Gabriel Massuda, Juan Cardoso e Sandy Mendes</p>
    </div>
  </div>
</footer>

</body>
</html>
<?php /**PATH C:\Users\sandy\Documents\GitHub\projetoweb-pizzaria\resources\views/welcome.blade.php ENDPATH**/ ?>