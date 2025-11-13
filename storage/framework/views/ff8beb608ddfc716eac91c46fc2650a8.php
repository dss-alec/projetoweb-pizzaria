<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Delicia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Great+Vibes&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">    
</head>

<body>
    <!-- Header / Navbar -->
    <?php echo $__env->make('layouts.nav-bar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


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

    


    <br>

    <!-- Footer -->
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html>
<?php /**PATH /opt/lampp/htdocs/projetoweb-pizzaria/resources/views/welcome.blade.php ENDPATH**/ ?>