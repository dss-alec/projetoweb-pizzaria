<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fale Conosco - Pizzaria Delícia</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  
  <!--LAYOUT NAV-BAR-->
  @include('layouts.nav-bar')

  <div class="container" style="max-width: 1050px; margin-top: 6px;">
    <div class="card p-4 shadow-sm">
      <h2 class="text-center mb-3">Fale Conosco</h2>
      <form>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo:</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email">
        </div>

        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone:</label>
          <input type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone">
        </div>

        <div class="mb-3">
          <label for="mensagem" class="form-label">Mensagem:</label>
          <textarea class="form-control" id="mensagem" rows="4" placeholder="Escreva sua mensagem"></textarea>
        </div>

        <button type="submit" class="btn w-100" style="background-color: #9c1919; color: white; border: none;">Enviar</button>
      </form>
    </div>
  </div>
  <br>

  <!--LAYOUT FOOTER-->
  @include('layouts.footer')
</body>
</html>
