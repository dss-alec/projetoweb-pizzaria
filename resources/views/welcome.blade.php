<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginal Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        body, html {
            height: 100%; 
            margin: 0;  
            padding-top: 5px;  
        }

        body {
            background-image: url("img/pizza-suprema-tradicional-na-pedra-preta.jpg");
            background-size: cover;       
            background-position: center;  
            background-repeat: no-repeat; 
        }

        .navbar-brand{
            color: white;
            font-size: 30px;
        }
        .nav-link{
            color: white;
            font-size: 22px;
        }
        .navbar-brand:hover{
            color: #969595ff; 
            transition: color 0.3s; 
        }
        .nav-link:hover {
            color: #969595ff; 
            transition: color 0.3s; 
        }

    </style>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inicial</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catálogo</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Produtos</a></li>
                        <li><a class="dropdown-item" href="#">Serviços</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Fale conosco</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Sobre nós</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>

<body>

</body>

</html>