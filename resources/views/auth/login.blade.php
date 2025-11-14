<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pizzaria Delícia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            background-image: url('{{ asset("img/fundologin.jpg") }}');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            font-family: 'Poppins', sans-serif;
            
            min-height: 100vh;
            display: flex;
            justify-content: center; 
            align-items: center; 
            margin: 0; 
        }
        
        .login-container {
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 5px 25px rgba(0,0,0,0.3); 
        }
        .login-title {
            color: #9c1919;
            font-weight: bold;
            text-align: center;
            margin-bottom: 25px;
        }
        .btn-login {
            background-color: #9c1919;
            border: none;
            color: white;
            font-weight: 600;
        }
        .btn-login:hover {
            background-color: #700f0f;
            color: white;
        }
        .form-control:focus {
            border-color: #9c1919;
            box-shadow: 0 0 0 0.25rem rgba(156, 25, 25, 0.25); 
        }
        .forgot-password-link {
            color: #9c1919;
            font-size: 0.9rem;
        }
        .forgot-password-link:hover {
            color: #700f0f;
        }

    </style>
</head>
<body>

<div class="login-container">
    <h2 class="login-title">Login Administrativo</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Lembrar-me</label>
            </div>

        </div>
        
        <button type="submit" class="btn btn-login w-100">Entrar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>