{{-- tem que mudar todos os hrefs e substituir por rotas!!!! --}}


<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Nameless</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->is('historia') ? 'active' : '' }}" href="{{ route('historia') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">História</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('historia') }}">Principais Eventos</a></li>
            <li><a class="dropdown-item" href="{{ route('historia') }}#fund">Fundação</a></li>
            <li><a class="dropdown-item" href="{{ route('historia') }}#guerra1">Primeira Grande Guerra</a></li>
            <li><a class="dropdown-item" href="{{ route('historia') }}#guerra2">Segunda Grande Guerra</a></li>
            <li><a class="dropdown-item" href="{{ route('historia') }}#queda">Queda do Conselho</a></li>
            <!-- <li>
                  <hr class="dropdown-divider">
                </li> -->
          </ul>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('mapas') }}">Mapas</a>
        </li> --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->is('mapas') ? 'active' : '' }} {{ request()->is('protetorados') ? 'active' : '' }}" href="{{ route('mapas') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mapas</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('mapas') }}">Mapa e Distâncias</a></li>
            <li><a class="dropdown-item" href="{{ route('protetorados') }}">Divisão Protetorados</a></li>
          </ul>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->is('grupos') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Grupos e Organizações</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('grupos') }}">Principais Famílias</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('grupos') }}#shadow">Caçadores das Sombras</a></li>
            <li><a class="dropdown-item" href="{{ route('grupos') }}#dragoes">Dragões Dourados</a></li>
            <li><a class="dropdown-item" href="{{ route('grupos') }}#warmages">Warmages</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('grupos') }}#sussurros">Ordem Secreta Sussurros da Floresta</a></li>
            <li><a class="dropdown-item" href="{{ route('grupos') }}#flechas">Guilda Flechas Letais</a></li>
            <li><a class="dropdown-item" href="{{ route('grupos') }}#storm">Guilda Storm Blades</a></li>
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
