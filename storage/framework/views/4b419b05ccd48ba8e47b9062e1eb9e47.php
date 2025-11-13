<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Admin - Pizzaria Delícia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;  
        }
        .sidebar {
            min-height: 100vh;
            background-color: #212529;
            padding-top: 1rem;
        }
        .sidebar .nav-link {
            color: #fff;
            margin-bottom: .5rem;
        }
        .sidebar .nav-link:hover {
            background-color: #343a40;
            border-radius: 5px;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="container-fluid">
        <div class="row">
            
            <nav class="col-md-3 col-lg-2 sidebar p-3">
                <h4 class="text-white mb-4"> Painel</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.cadastro.produtos')); ?>" class="nav-link">
                            <i class="bi bi-bag-plus me-2"></i> Cadastro de Produtos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.mensagens')); ?>" class="nav-link">
                            <i class="bi bi-envelope me-2"></i> Visualizar Mensagens
                        </a>
                    </li>
                    <li class="nav-item mt-3">
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-outline-light w-100">
                                <i class="bi bi-box-arrow-right me-2"></i> Sair
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>

            
            <main class="col-md-9 col-lg-10 p-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>

    <footer class="mt-auto" style="background-color:#000; color:#fff; padding:40px 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Pizzaria Delícia</h5>
                    <p>Delícias que conquistam corações e paladares!</p>
                    <p><strong>Horário:</strong> Seg-Sex: 17h - 23h <br> Sáb-Dom: 18h - 00h</p>
                    <p><strong>Contato:</strong> (67) 3233-6821</p>
                    <div class="social-icons mt-2">
                        <a href="https://www.facebook.com" target="_blank" style="color:#3b5998; margin-right:10px; font-size:1.5rem;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" style="color:#E1306C; margin-right:10px; font-size:1.5rem;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://wa.me/556732336821" target="_blank" style="color:#25D366; font-size:1.5rem;">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Mapa -->
                <div class="col-md-8">
                    <h5>Localização</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.493010531053!2d-57.65000459999999!3d-18.9979852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9387a099558d7d1d%3A0x2ee0c9eeab71d5f0!2sPizzaria%20Fiorella!5e0!3m2!1spt-BR!2sbr!4v1761743130470!5m2!1spt-BR!2sbr"
                        width="100%" height="250" style="border:0; border-radius:8px;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>

            <hr style="border-color:#444; margin:20px 0;">

            <!-- Copyright -->
            <div class="text-center">
                <p>&copy; 2025 Pizzaria Delícia. Todos os direitos reservados.</p>
                <p>Alunos: Alec Santos, João Gabriel Massuda, Juan Cardoso e Sandy Mendes</p>
            </div>
        </div>
    </footer>

</body>
</html><?php /**PATH /opt/lampp/htdocs/projetoweb-pizzaria/resources/views/layouts/admin.blade.php ENDPATH**/ ?>