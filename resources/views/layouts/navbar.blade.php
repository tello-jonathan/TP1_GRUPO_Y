<header class="fixed-top">
    <nav class="navbar nav-top navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('inicio') }}">
          <img src="img/adventure.svg" alt="icon adventure" width="124" height="40">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white ps-2 pe-2" href="#">¿Necesitás ayuda? ¡Contactanos!</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                Cuenta</strong>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Iniciar Sesión</a></li>
                <li><a class="dropdown-item" href="#">Registrarse</a></li>
              </ul>
            </div> 
          </li>
        </ul>
      </div>
    </nav>
    <nav class="navbar nav-bottom navbar-expand-lg navbar-dark">
      <div class="container-fluid justify-content-lg-evenly">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="{{ route('paquetes') }}">Paquetes</a></li>
              <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="{{ route('actividades') }}">Actividades</a></li>
              <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="#">Escapadas</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>