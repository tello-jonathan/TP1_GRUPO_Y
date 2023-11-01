@extends('layouts.app')
@section('content')
    <section class="section-header-home">
      <div class="card-titles-container" id="card-titles-container--home">
        <h1 class="title-section" id="title-section-home">
            ACTIVIDADES
        </h1>
      </div>
    </section>
    <section class="section-hots">
      <div class="card-travels-container">
        <h3 class="card-travels-container--title">MÁS SOLICITADAS</h3>
        <div class="card-travel-container" id="card-travel-container--home">
          <div class="card-travel" id="globo">
            <h3 class="card-title">PASEO EN GLOBO</h3>
            <a class="card-button" href="#">VER MÁS</a>
          </div>
        </div>
    </section>
    <section class="section-populars">
      <div class="section-populars-container">
        <h2 class="title-section">TODAS LAS CATEGORÍAS</h2>
        <p class="paragraph-section">
          Hello! I'm here to help you get travel information. Is there anything in particular you would like to know?
          For example, would you like information on how to plan a trip, how to choose a vacation destination, or how to
          prepare for international travel? 
        </p>
      </div>
      <div class="section-populars-container--cards">
        <div class="card-travel" id="extremo">
          <h3 class="card-title text-white">RAFTING</h3>
        </div>
        <div class="card-travel" id="senderismo">
          <h3 class="card-title text-white">ESCALAR</h3>
        </div>
        <div class="card-travel" id="paracaidas">
          <h3 class="card-title text-white">PARACAIDÍSMO</h3>
        </div>
        <div class="card-travel" id="noche">
          <h3 class="card-title text-white">EXPLORACIÓN NOCTURNA</h3>
        </div>
      </div>
      <div class="section-populars-container--cards">
        <div class="card-travel" id="surf">
          <h3 class="card-title text-white">SURFING</h3>
        </div>
        <div class="card-travel" id="snowboard">
          <h3 class="card-title">SNOWBOARDING</h3>
        </div>
        <div class="card-travel" id="experience">
          <h3 class="card-title text-white">CAMPAMENTO EXTREMO</h3>
        </div>
        <div class="card-travel" id="gourmet">
          <h3 class="card-title text-white">GASTRONOMÍA</h3>
        </div>
      </div>
    </section>
    <section class="section-videos">
      <div class="section-videos-container--text">
        <h2 class="title-section">DESCUBRÍ UNA NUEVA FORMA DE VER EL MUNDO</h2>
        <a class="card-button" href="#">
          <img src="../img/play.svg" alt="play icon">
          VER EL VIDEO</a>
        <p class="paragraph-section">
          There are many YouTube channels and other online video platforms that offer videos about travel and tourist destinatio
        </p>
      </div>
      <div class="section-videos-container">
        <iframe width="80%" height="150" src="https://www.youtube.com/embed/1La4QzGeaaQ" class="card-video"></iframe>
        <iframe width="80%" height="150" src="https://www.youtube.com/embed/N1-Jmq7BLFE" class="card-video"></iframe>
      </div>
    </section>

@endsection