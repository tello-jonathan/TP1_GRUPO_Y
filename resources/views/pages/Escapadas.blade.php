@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar')
@endsection    
@section('content')
    <section class="section-info" id="contact-section-info">
        <div class="section-info-text">
          <h2 class="info-title">ESCAPADAS</h2>
          <p class="info-paragraph">
            Desconectate de la rutina y visitá durante un fin de semana estos destinos paradisíacos, al mejor preci
          </p>
        </div>
        <div class="section-info-cards">
          <a href="travels.html" class="card-travel-container card-travel-container--contact" id="chascomus">
            <span class="card-travel-title">CHASCOMUS</span>
          </a>
          <a href="travels.html" class="card-travel-container card-travel-container--contact" id="sventana">
            <span class="card-travel-title">SIERRA DE LA VENTANA</span>
          </a>
          <a href="travels.html" class="card-travel-container card-travel-container--contact" id="tandil">
            <span class="card-travel-title">TANDIL</span>
          </a>
          <a href="travels.html" class="card-travel-container card-travel-container--contact" id="montevideo">
            <span class="card-travel-title">MONTEVIDEO</span>
          </a>
        </div>
  </section>
@endsection