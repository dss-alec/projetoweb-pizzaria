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

<body>
    <!-- Header / Navbar -->
    @include('layouts.nav-bar')

<div class="container my-5">
    <!-- Título com outra cor e negrito -->
    <h2 class="text-center mb-4" style="color: #9c1919; font-weight: bold;">Fale Conosco</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opa!</strong> Verifique os campos abaixo:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('fale-conosco.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Seu Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Seu Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Seu Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone') }}" required>
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Sua Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required>{{ old('mensagem') }}</textarea>
        </div>

        <!-- Botão centralizado e cor personalizada -->
        <div class="text-center">
            <button type="submit" class="btn" style="background-color: #9c1919; color: white; font-weight: bold;">
                Enviar Mensagem
            </button>
        </div>
    </form>
</div>

    <!-- Footer -->
    @include('layouts.footer')