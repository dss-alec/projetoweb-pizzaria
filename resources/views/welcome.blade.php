<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Delicia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Great+Vibes&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
</head>

    <style>
       .cardapio-titulo {
            font-family: 'Bebas Neue', sans-serif;
            font-weight: bold;
            font-size: 2.5rem; /* ajuste se quiser maior ou menor */
            color: #9c1919; /* mesma cor que você já usa */
        }


        .card-img-fixed {
            height: 200px;
            object-fit: cover;
        }

        .btn-cardapio {
            background-color: #9c1919;
            border-color: #9c1919;
            color: white;
        }

        .btn-cardapio:hover {
            background-color: #7a1212;
            border-color: #7a1212;
        }

        .card-body h5 {
            font-weight: bold;
        }
    </style>

<body>
    <!-- Header / Navbar -->
    @include('layouts.nav-bar')


    <!-- Hero Section -->
    <div class="hero-section">
        <img src="{{ asset('img/hero-pizza.jpg') }}" alt="Pizza deliciosa" class="hero-image">
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

    

<!--MENU PIZZARIA --> 

<section class="cardapio py-5">
    <div class="container">
       <h2 class="text-center mb-5 cardapio-titulo">Cardápio</h2>
        <div class="row justify-content-center g-4">

            <div class="col-md-3">
                <div class="card h-100 text-center">
                    <img src="{{ asset('img/calabresa.jpg') }}" class="card-img-top card-img-fixed" alt="Pizza Calabresa">
                    <div class="card-body">
                        <h5 class="card-title">Pizza Calabresa</h5>
                        <p class="card-text">Ingredientes: Calabresa, queijo, molho de tomate, cebola.</p>
                        <p class="card-text"><strong>R$ 35,00</strong></p>
                        <a href="#" class="btn btn-cardapio w-100">Peça Agora</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 text-center">
                    <img src="{{ asset('img/chocolate.jpg') }}" class="card-img-top card-img-fixed" alt="Pizza Chocolate">
                    <div class="card-body">
                        <h5 class="card-title">Pizza Chocolate</h5>
                        <p class="card-text">Ingredientes: Chocolate, morango, creme de leite.</p>
                        <p class="card-text"><strong>R$ 40,00</strong></p>
                        <a href="#" class="btn btn-cardapio w-100">Peça Agora</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 text-center">
                    <img src="{{ asset('img/portuguesa.jpg') }}" class="card-img-top card-img-fixed" alt="Pizza Portuguesa">
                    <div class="card-body">
                        <h5 class="card-title">Pizza Portuguesa</h5>
                        <p class="card-text">Ingredientes: Presunto, queijo, ovos, azeitona, cebola.</p>
                        <p class="card-text"><strong>R$ 38,00</strong></p>
                        <a href="#" class="btn btn-cardapio w-100">Peça Agora</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 text-center">
                    <img src="{{ asset('img/marguerita.jpg') }}" class="card-img-top card-img-fixed" alt="Pizza Margherita">
                    <div class="card-body">
                        <h5 class="card-title">Pizza Margherita</h5>
                        <p class="card-text">Ingredientes: Molho de tomate, mussarela, manjericão.</p>
                        <p class="card-text"><strong>R$ 32,00</strong></p>
                        <a href="#" class="btn btn-cardapio w-100">Peça Agora</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <br>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>
