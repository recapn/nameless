{{-- tem que mudar todos os hrefs e substituir por rotas!!!! --}}


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Nameless</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">História</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="historia.html">Principais Eventos</a></li>
              <li><a class="dropdown-item" href="historia.html#fund">Fundação</a></li>
              <li><a class="dropdown-item" href="historia.html#guerra1">Primeira Grande Guerra</a></li>
              <li><a class="dropdown-item" href="historia.html#guerra2">Segunda Grande Guerra</a></li>
              <li><a class="dropdown-item" href="historia.html#queda">Queda do Conselho</a></li>
              <!-- <li>
                  <hr class="dropdown-divider">
                </li> -->
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('mapas') }}">Mapas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Grupos e Organizações</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="grupos.html">Principais Famílias</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="grupos.html#shadow">Caçadores das Sombras</a></li>
              <li><a class="dropdown-item" href="grupos.html#dragoes">Dragões Dourados</a></li>
              <li><a class="dropdown-item" href="grupos.html#warmages">Warmages</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="grupos.html#sussurros">Ordem Secreta Sussurros da Floresta</a></li>
              <li><a class="dropdown-item" href="grupos.html#flechas">Guilda Flechas Letais</a></li>
              <li><a class="dropdown-item" href="grupos.html#storm">Guilda Storm Blades</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
