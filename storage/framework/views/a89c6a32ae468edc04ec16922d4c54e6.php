 <header>
  <nav class="navbar navbar-expand-lg fixed-top custom-red">
    <div class="container">
      <a class="navbar-brand text-white" href="<?php echo e(route('welcome')); ?>">Pizzaria Delícia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto align-items-lg-center flex-wrap">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Catálogo
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo e(route('produtos')); ?>">Produtos</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('servicos')); ?>">Serviços</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo e(route('fale-conosco')); ?>">Fale conosco</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo e(route('sobre-nos')); ?>">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo e(route('login')); ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center p-0" href="https://wa.me/556732336821" target="_blank">
              <i class="bi bi-whatsapp icon-wpp"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header><?php /**PATH /opt/lampp/htdocs/projetoweb-pizzaria/resources/views/layouts/nav-bar.blade.php ENDPATH**/ ?>