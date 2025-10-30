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
</head>

<body>
    <!-- LAYOUT NAV-BAR -->
     @include('layouts.nav-bar')

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

<!--LAYOUT FOOTER-->
  @include('layouts.footer')
</body>
</html>
