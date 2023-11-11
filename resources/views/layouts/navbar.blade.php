<header class="fixed-top">
    </nav>
    <nav class="navbar nav-bottom navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="{{ route('inicio') }}">
        <img src="img/adventure.svg" alt="icon adventure" width="124" height="40">
      </a>
      <div class="container-fluid justify-content-lg-evenly">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="{{route('inicio')}}">Inicio</a></li>
              <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="{{ route('paquetes') }}">Paquetes</a></li>
              <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="{{ route('actividades') }}">Actividades</a></li>
              <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="{{ route('escapadas') }}">Escapadas</a></li>
          </ul>
        </div>
      </div>
      <div class="container-fluid justify-content-end">
        <div class="d-flex justify-content-between">
           <li class="nav-item">
            <a class="nav-link text-white ps-2 pe-2" href="#">Ingreso</a>
              <a class="nav-link text-white ps-2 pe-2" href="contact.html">¿Necesitás ayuda? ¡Contactanos!</a>
           </li>
        </div>
      </div>  
    </nav>
  </header>