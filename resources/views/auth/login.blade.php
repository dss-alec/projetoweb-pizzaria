<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pizzaria Delícia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset("img/fundologin.jpg") }}'); /* caminho da imagem */
            background-size: cover; /* cobre toda a tela */
            background-position: center; /* centraliza a imagem */
            background-repeat: no-repeat; /* não repete a imagem */
            font-family: 'Poppins', sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.1);
        }
        .login-title {
            color: #9c1919;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-login {
            background-color: #9c1919;
            border: none;
            color: white;
        }
        .btn-login:hover {
            background-color: #700f0f;
            color: white;
        }
        .form-control:focus {
            border-color: #9c1919;
            box-shadow: none;
        }

    </style>
</head>
<body>

<div class="login-container">
    <h2 class="login-title">Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
            <label class="form-check-label" for="remember_me">Lembrar-me</label>
        </div>
        <button type="submit" class="btn btn-login w-100" class="link-branco">Entrar</button>
        @if (Route::has('password.request'))
        @endif
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
