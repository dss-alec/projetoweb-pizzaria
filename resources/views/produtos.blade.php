<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Produtos - Pizzaria Delícia</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <style>
    body { font-family: 'Poppins', sans-serif; }

    .card {
      display: flex;
      flex-direction: column;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .card:hover { transform: translateY(-5px); }

    .card-img-fixed {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      flex: 1;
      padding: 15px;
      text-align: center;
    }

    .card-title { font-weight: 600; font-size: 1.1rem; margin-bottom: 8px; }
    .card-text { font-size: 0.95rem; color: #555; margin-bottom: 10px; }
    .preco-produto { color: #000; font-weight: bold; font-size: 1rem; margin-bottom: 10px; }

    .btn-peça {
      background-color: #9c1919;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-weight: 600;
      text-transform: uppercase;
      font-family: 'Poppins', sans-serif !important;
      text-decoration: none;
      padding: 10px 0;
      width: 100%;
      text-align: center;
      margin-top: auto;
      transition: background-color 0.3s ease;
    }

    .btn-peça:hover { background-color: #7a1414; color: #fff; text-decoration: none; }
  </style>
</head>

<body>
  @include('layouts.nav-bar')

  <section class="cardapio py-5">
    <div class="container">
      <h2 class="text-center mb-5 cardapio-titulo">Cardápio</h2>

      <div class="row justify-content-center g-4">
        @forelse ($produtos as $produto)
          <div class="col-md-3 d-flex">
            <div class="card w-100 h-100">

<img src="{{ $produto->imagem ? asset('storage/' . $produto->imagem) : asset('img/default-pizza.jpg') }}" 
     class="card-img-fixed" 
     alt="{{ $produto->nome }}">




              <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                <h5 class="card-title">{{ $produto->nome }}</h5>
                <p class="card-text">{{ $produto->descricao ?? 'Sem descrição disponível.' }}</p>
                <p class="preco-produto">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                <a href="#" class="btn-peça mt-auto">Peça Agora</a>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center">
            <p class="text-muted">Nenhum produto disponível no momento.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  @include('layouts.footer')
</body>
</html>
