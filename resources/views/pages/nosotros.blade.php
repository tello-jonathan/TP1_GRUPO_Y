@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar')
@endsection    
@section('content')
    <section class="section-header" id="about-section-header">
        <div class="about-card-titles-container">
          <h1 class="title-section">SOBRE NOSOTROS</h1>
          <p class="about-card-subtitle">Tus guías en tus aventuras.</p>
        </div>
      </section>
      <section class="about-info-section">
        <div class="about-info-section--container">
          <h2 class="about-info-section-title"><span>PREPARATE PARA</span><span> LAS AVENTURAS</span></h2>
          <p class="paragraph-section" id="info-quote">¡Eso suena divertido! Si te gusta la aventura, hay muchas formas de incorporarla a tus viajes. Algunas ideas
            para aventureros incluyen:
            Escala montañas o practica senderismo en destinos con paisajes impresionantes, como la Patagonia, los Alpes o la
            Himalaya.
            Practica rafting o kayak en ríos apasionantes, como el Río Grande en Estados Unidos o el Río Futaleufú
            en Chile.
          </p>
        </div>
        <div class="about-trekking">
          <img src="../img/about/trekking.jpg" alt="a group of people" width="1840" height="1440">
        </div>
      </section>
      <section class="about-quote-section">
        <div>
          <p class="about-quote-paragraph">deja que tu espíritu aventurero te impulse hacia adelante y 
            descubre el mundo que te rodea con sus rarezas y maravillas. Descubrirlo será amarlo.</p>
          <h3 id="quote-name">KAHLIL GIBRAN</h3>
        </div>
    </section>
@endsection    