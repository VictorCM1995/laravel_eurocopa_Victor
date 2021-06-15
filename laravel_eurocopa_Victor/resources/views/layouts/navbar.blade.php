<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-warning">
  <a class="navbar-brand" href="{{url('/')}}">Eurocopa 2020</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a href="{{url('/grupos')}}"
          class="nav-link {{ Request::is('grupos*') && !Request::is('paises*')? ' active' : ''}}">Grupos</a>
      </li>
    </ul>

    <form class="d-flex">
      <input id="jugadores" size="40" class="form-control mr-sm-3" type="text"
        placeholder="Buscar número de camiseta" aria-label="Buscar">
    </form>

  </div>
</nav>
