@extends('layouts.app')

@section('content')
<<<<<<< Updated upstream
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
=======
<main>
    <div class="container-fluid" id="login-section-header">
      <div class="row">
        <div class="col">
          <img class="login-logo" src="../img/adventure.svg" alt="">
        </div>
      <div class="row login-section-body">
        <div class="col-lg-6">
          <div class="card-titles-container float-lg-end">
            <h1 class="card-title" id="card-title-contact">¡Bienvenido!</h1>
            <p class="card-subtitle">Tu próximo viaje te espera</p>
          </div>
        </div>
        <div class="col-lg-6">
          <form action="{{ route('login') }}" class="row g-3 form-container">
            @csrf
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Usuario</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" style="font-size: 0.6em" placeholder="Usuario">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="clave" style="font-size: 0.6em" placeholder="Contraseña" name="clave" autocomplete="off">
            <div class="mb-3"><br>
            <button type="submit" class="btn btn-light btn-form" style="font-size: 0.6em">Iniciar sesión</button>
            <div class="login-foot">
            <a href="#" style="font-size: 0.5em">¿Perdiste tu contraseña?</a>
            <a href="{{route('register')}}" style="font-size: 0.5em">¿No tenés Cuenta? Registrate</a>
          </div>
          </form>
  
>>>>>>> Stashed changes
        </div>
    </div>
<<<<<<< Updated upstream
</div>
=======
    <!-- div class="login-logo"><img src="../img/adventure.svg" alt=""></div -->
  </main>
>>>>>>> Stashed changes
@endsection
