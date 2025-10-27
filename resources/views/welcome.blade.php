<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginal Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
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
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .navbar-brand {
            color: white !important;
            font-size: 28px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #f5c065 !important;
        }
        
        .nav-link.dropdown-toggle {
            color: white !important;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .nav-link.dropdown-toggle:hover {
            color: #f5c065 !important;
        }

        .nav-link {
            color: white !important;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #f5c065 !important;
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

        footer{
            background-color: black;
        }
        .contato {
            color: white;
            text-align: center;
        }

        h5 {
            color: white;
        }
        #map-container {
            width: 500px; 
            height: 300px; 
            margin: 0 auto; 
        }
    </style>
</head>

<header>
    <nav class="navbar navbar-expand-lg bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Inicial</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catálogo</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('produtos') }}">Produtos</a></li>
                    <li><a class="dropdown-item" href="{{ route('servicos') }}">Serviços</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('fale-conosco') }}">Fale conosco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('sobre-nos') }}">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <div class="ms-auto pe-5">
                        <a href="https://wa.me/556732336821" class="nav-link d-flex align-items-center text-success fw-bold" target="_blank">
                            <i class="bi bi-whatsapp me-2"></i> Mensagem Instantânea
                        </a> 
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>

<body>
    <div class="hero-section">
        <img src="{{ asset('img/pizza-deliciosa-dentro-de-casa.jpg') }}" alt="Pizza deliciosa" class="hero-image">
        
        <div class="hero-text">
            <h1>Bem-vindo à Pizzaria Delícia!</h1>
            <p>As melhores pizzas da cidade, feitas com amor ❤️</p>
            <a href="#" class="btn btn-warning">Peça agora</a>
        </div>
    </div>
    
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
    
    <br>
    <br>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('img/ivan-torres-MQUqbmszGGM-unsplash.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/shourav-sheikh-a66sGfOnnqQ-unsplash.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/nik-owens-40OJLYVWeeM-unsplash.jpg') }}" class="d-block w-100" alt="...">
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

    <br>
    <br>
    
    <div class="menu-pizzas">
        <h2>Pizzas pronta entrega</h2>
        <br>

        <div class="container text-center">
            <div class="row row-cols-2 g-4">
                <div class="col">
                    <h3>Pizza de Calabresa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R$ 120,00</h3>
                    <p class="ingredientes">Molho de tomate, queijo mussarela, fatias de calabresa defumada, cebola fatiada e orégano.</p>
                </div>
                <div class="col">
                    <h3>Pizza de Strogonoff de Frango&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R$ 135,00</h3>
                    <p class="ingredientes-2">Molho branco, queijo mussarela, frango desfiado e temperado, champignon fatiado e salsa.</p>
                </div>
                <div class="col">
                    <h3>Pizza de Quatro Queijos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R$ 125,00</h3>
                    <p class="ingredientes">Queijo mussarela, queijo provolone, queijo gorgonzola, queijo parmesão e orégano.</p>
                </div>
               <div class="col">
                    <h3>Pizza de Bacon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R$ 130,00</h3>
                    <p class="ingredientes-2">Molho de tomate, queijo mussarela, bacon crocante picado, cebola caramelizada e orégano.</p>
                </div>
            </div>
        </div>
    </div>
</body>

<br>
<br>

<footer>
        <p class="contato">Rua das Pizzas, 123 – Bairro Sabores, Corumbá – MS, 01234-567, (67) 3233-6821, contato@pizzariadelicia.com</p>

        <div class="container text-center">

            <h5>Como chegar</h5>

            <div id="map-container" class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.4930109330903!2d-57.65257415947263!3d-18.9979851822647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9387a099558d7d1d%3A0x2ee0c9eeab71d5f0!2sPizzaria%20Fiorella!5e0!3m2!1spt-BR!2sbr!4v1761441615257!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
</footer>
</html>
