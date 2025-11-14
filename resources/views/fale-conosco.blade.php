<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco - Pizzaria Delícia</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Ícones e Fontes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <!-- Seu CSS customizado -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* --- Variáveis CSS para consistência --- */
        :root {
            --primary-red: #C83232; /* Vermelho mais profissional e sóbrio */
            --primary-hover: #A02828;
            --focus-shadow: rgba(200, 50, 50, 0.25);
        }

        /* --- Estilos Gerais --- */
        body {
            background-color: #f4f4f4; /* Fundo sutil para destacar o card */
        }
        main {
            padding: 2rem 0; /* Padding vertical no main */
        }

        /* --- Card do Formulário --- */
        .contact-card {
            max-width: 600px; /* Levemente menor para mais foco */
            margin: 3rem auto; /* Mais margem vertical */
            padding: 2.5rem;
            border-radius: 12px;
            /* Sombra mais suave e profissional */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            background-color: #fff;
            border: 1px solid #eee; /* Borda sutil */
        }

        /* --- Títulos --- */
        .contact-title {
            font-family: 'Bebas Neue', sans-serif;
            color: var(--primary-red);
            font-size: 2.2rem; /* Levemente menor */
            margin-bottom: 0.5rem;
            letter-spacing: 1px; /* Para um toque profissional */
        }
        
        .section-header {
            margin-bottom: 2rem;
            border-bottom: 1px solid #f0f0f0; /* Linha de separação sutil */
            padding-bottom: 1rem;
        }
        .section-header span {
             font-size: 0.9rem; 
             color: #6c757d;
        }

        /* --- Inputs e Foco --- */
        .form-control:focus {
            border-color: var(--primary-red);
            box-shadow: 0 0 0 0.25rem var(--focus-shadow); 
        }

        /* --- Botão Enviar --- */
        .btn-send {
            background-color: var(--primary-red);
            color: white;
            font-weight: 600; 
            padding: 0.7rem 2.5rem; /* Maior e mais fácil de clicar */
            transition: background-color 0.3s ease, transform 0.1s ease;
            border-radius: 8px; 
            border: none;
        }

        .btn-send:hover {
            background-color: var(--primary-hover);
            color: white;
            transform: translateY(-1px); /* Efeito sutil de elevação */
        }
    </style>
</head>

<body>
    <!-- Header / Navbar -->
    @include('layouts.nav-bar')

    <main class="container">
        <div class="contact-card">
            
            <header class="section-header text-center">
                <!-- Ícone e Subtítulo mais profissionais -->
                <span class="d-inline-block mb-1">
                    <i class="bi bi-person-lines-fill" style="color: var(--primary-red);"></i> ATENDIMENTO AO CLIENTE
                </span>
                <h2 class="contact-title">Entre em Contato</h2>
                <p class="text-muted">Utilize o formulário abaixo para qualquer dúvida, sugestão ou feedback. Responderemos o mais breve possível!</p>
            </header>


            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Opa!</strong> Por favor, corrija os erros no formulário:
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
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" placeholder="Seu nome completo" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="exemplo@dominio.com" required>
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone') }}" placeholder="(99) 99999-9999" required>
                </div>

                <div class="mb-4">
                    <label for="mensagem" class="form-label">Mensagem:</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Digite sua dúvida ou comentário..." required>{{ old('mensagem') }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-send">
                        <i class="bi bi-send-fill me-2"></i> Enviar Mensagem
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>