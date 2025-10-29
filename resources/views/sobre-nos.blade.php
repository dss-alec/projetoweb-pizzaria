<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nós - Pizzaria Delícia</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      padding-top: 100px;
    }

    .custom-red {
      background-color: #000000;
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

    .nav-link,
    .nav-link.dropdown-toggle {
      color: white !important;
      font-size: 19px;
      transition: color 0.3s ease;
    }

    .nav-link:hover,
    .nav-link.dropdown-toggle:hover {
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

    footer {
      background-color: black;
      color: white;
      text-align: center;
      padding: 40px 20px;
    }

    footer h5 {
      color: white;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top custom-red">
      <div class="container">
        <a class="navbar-brand text-white" href="#">Pizzaria Delícia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto align-items-lg-center flex-wrap">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catálogo</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('produtos') }}">Produtos</a></li>
                <li><a class="dropdown-item" href="{{ route('servicos') }}">Serviços</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('fale-conosco') }}">Fale conosco</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('sobre-nos') }}">Sobre nós</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('login') }}">Login</a></li>
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

  <section style="padding: 1.7rem 0; background-color: white;">
    <div style="width: 90%; max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; gap: 2rem;">
      <div style="flex: 1 1 400px;">
        <img src="{{ asset('img/sobrenos.jpg') }}" alt="Pizza Delícia" style="display: block; width: 100%; max-width: 500px; height: auto; max-height: 400px; object-fit: cover; border-radius: 0.75rem; margin: 0 auto;">
      </div>

      <div style="flex: 1 1 400px;">
        <span style="font-size: 0.9rem; color: #6c757d;">
          <i class="bi bi-pizza" style="color: #9c1919;"></i> Nossa História
        </span>
        <h2 style="font-family: 'Bebas Neue', sans-serif; color: #9c1919ff; font-size: 1.5rem; margin: 0.5rem 0;">Sobre Nós</h2>
        <p style="text-align: justify; font-size: 1rem; line-height: 1.6; margin-bottom: 1rem;">
          Fundada em 2010, a Pizzaria Delícia nasceu do sonho de transformar momentos simples em experiências memoráveis. Com receitas artesanais e ingredientes frescos, nossa missão sempre foi unir qualidade, sabor e carinho em cada fatia de pizza.
        </p>
        <p style="text-align: justify; font-size: 1rem; line-height: 1.6; margin-bottom: 0;">
          Ao longo dos anos, conquistamos a confiança de nossa comunidade, oferecendo um ambiente acolhedor e familiar, onde clientes se tornam amigos. Cada pizza é preparada com atenção aos detalhes, garantindo que cada mordida conte uma história de dedicação e paixão pela culinária.
        </p>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5>Pizzaria Delícia</h5>
          <p>Delícias que conquistam corações e paladares!</p>
          <p>
            <strong>Horário:</strong> Seg-Sex: 17h - 23h <br>
            Sáb-Dom: 18h - 00h
          </p>
          <p><strong>Contato:</strong> (67) 3233-6821</p>
          <div class="social-icons mt-2">
            <a href="https://www.facebook.com" target="_blank" style="color: #3b5998; margin-right: 10px; font-size: 1.5rem;"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank" style="color: #E1306C; margin-right: 10px; font-size: 1.5rem;"><i class="bi bi-instagram"></i></a>
            <a href="https://wa.me/556732336821" target="_blank" style="color: #25D366; font-size: 1.5rem;"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

        <div class="col-md-8">
          <h5>Localização</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.493010531053!2d-57.65000459999999!3d-18.9979852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9387a099558d7d1d%3A0x2ee0c9eeab71d5f0!2sPizzaria%20Fiorella!5e0!3m2!1spt-BR!2sbr!4v1761743130470!5m2!1spt-BR!2sbr" width="100%" height="250" style="border: 0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <hr style="border-color: #444; margin: 20px 0;">

      <div class="text-center">
        <p>&copy; 2025 Pizzaria Delícia. Todos os direitos reservados.</p>
        <p>Alunos: Alec Santos, João Gabriel Massuda, Juan Cardoso e Sandy Mendes</p>
      </div>
    </div>
  </footer>
</body>
</html>
