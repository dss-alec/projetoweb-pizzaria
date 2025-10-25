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

</body>

</html>
