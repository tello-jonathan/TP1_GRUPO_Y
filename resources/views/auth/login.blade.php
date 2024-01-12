@extends('layouts.app')

@section('content')
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
  
        </div>
    </div>
<<<<<<< Updated upstream
</div>
=======
    <!-- div class="login-logo"><img src="../img/adventure.svg" alt=""></div -->
  </main>
>>>>>>> Stashed changes
@endsection
