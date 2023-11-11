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
            <p class="card-subtitle">Nos alegra que nos hayas elegido</p>
          </div>
        </div>
        <div class="col-lg-6">
          <form method="POST" action="{{ route('register') }}" class="row g-3 form-container">
            @csrf            
            <div class="mb-3">
              <label for="name" for="exampleFormControlInput1" class="form-label">{{ __('Name') }}</label>
              <div class="mb-3">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" require
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>
          <div class="mb-3">
              <label for="email" for="exampleFormControlInput1" class="form-label">{{ __('Email Address') }}</label>
              <div class="mb-3">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" re
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <div class="mb-3">
              <label for="password" for="exampleFormControlInput1" class="form-label">{{ __('Password') }}</label>
              <div class="mb-3">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomp
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <div class="mb-3">
              <label for="password-confirm" for="exampleFormControlInput1" class="form-label">{{ __('Confirm Password') }}</label>
              <div class="mb-3">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
              </div>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto"> 
            <button type="submit" class="btn btn-light" style="font-size: 0.7em"> {{ __('Register') }} </button>
          </div>  
            <div class="login-foot">
              <a href="login.html" style="font-size: 0.5em">¿Ya tenés Cuenta? Inicia Sesión</a>
            </div>
          </form>
      </div>
      </div>
    </div>
    <!-- div class="login-logo"><img src="../img/adventure.svg" alt=""></div -->
  </main>
@endsection