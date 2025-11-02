 <header>
  <nav class="navbar navbar-expand-lg fixed-top custom-red">
    <div class="container">
      <a class="navbar-brand text-white" href="{{ route('welcome') }}">Pizzaria Delícia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto align-items-lg-center flex-wrap">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('produtos') }}">Catálogo de produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('fale-conosco') }}">Fale conosco</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('sobre-nos') }}">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
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
</header>