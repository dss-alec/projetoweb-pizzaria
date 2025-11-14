<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Delicia</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Ícones e Fontes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <!-- Seu CSS customizado (Mantido) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- CORREÇÃO CSS CRÍTICA: Remove margens indesejadas que causam o espaço em branco -->
    <style>
        body {
            /* Remove margens e padding padrão do body */
            margin: 0;
            padding: 0;
        }
        /* Garante que o hero-section comece no topo, removendo qualquer margem externa */
        .hero-section {
            margin-top: 0 !important; 
            padding-top: 0 !important;
        }
    </style>
</head>

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
                <!-- Botão 'Peça agora' com link direto do WhatsApp (corrigido) -->
                <a href="https://wa.me/556732336821?text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20pedido%20de%20pizza." 
                   class="btn btn-custom" 
                   target="_blank">
                    Peça agora
                </a>
                <a href="https://www.facebook.com" target="_blank" class="social-icon">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://wa.me/556732336821" target="_blank" class="social-icon">
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


    <!-- Footer -->
    @include('layouts.footer')

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>