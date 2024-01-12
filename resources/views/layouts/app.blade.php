<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-black fs-3 text shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('inicio') }}">
                    <img src="img/adventure.svg" alt="icon adventure" width="124" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="{{ route('paquetes') }}">Paquetes</a></li>
                        <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="{{ route('actividades') }}">Actividades</a></li>
                        <li class="nav-item"><a class="nav-link text-white ps-2 pe-2" href="{{ route('escapadas') }}">Escapadas</a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <footer class="footer">
                <section class="section-footer--links">
                  <ul>
                    <li><a href=""><img src="img/adventure.svg" alt=""></a></li>
                    <li><a class="text-white ps-2 pe-2" href="{{ route('inicio') }}">Inicio</a></li>
                    <li><a class="text-white ps-2 pe-2" href="{{ route('paquetes') }}">Paquetes</a></li>
                    <li><a class="text-white ps-2 pe-2" href="{{ route('actividades') }}">Actividades</a></li>
                    <li><a class="text-white ps-2 pe-2" href="{{ route('escapadas') }}">Escapadas</a></li>
                    <li><a class="text-white ps-2 pe-2" href="{{ route('contacto') }}">Contactanos</a></li>
                    <li><a class="text-white ps-2 pe-2" href="{{ route('nosotros') }}">Nosotros</a></li>
                  </ul>
                </section>
                <section class="section-footer--social">
                  <p class="title-section">Seguinos en nuestras redes</p>
                  <div class="section-footer--social-container">
                    <a href="#"><img src="img/instagram.svg" alt=""></a>
                    <a href="#"><img src="img/facebook.svg" alt=""></a>
                    <a href="#"><img src="img/youtube.svg" alt=""></a>
                  </div>
                </section>
            </footer>
        </footer>
    </div>
</body>
</html>
