@extends('layouts.app')
@section('content')
<section class="section-header" id="section-header-travels">
    <div class="container-fluid travels-button-container">
      <div class="row">
        <div class="col">
          <button type="button" class="btn travels-button btn-lg float-end fs bg-white">Comprar (Desde ~AR$ 1245678)</button>
        </div>  
      </div>
    </div>
    <div class="card-titles-container">
      <h1 class="title-section" id="title-section-travels">NUEVA ZELANDA</h1>
      <p class="about-card-subtitle">Tierra de la gran nube blanca</p>
    </div>
  </section>
  <section class="section-info">
    <div class="section-info-container">
      <div>
        <h2 class="title-section">TOURS AND EXCURSIONS</h2>
        <p class="paragraph-section">
          Hello! I'm here to help you get travel information. Is there anything in particular you would like to know?
          For example, would you like information on how to plan a trip, how to choose a vacation destination, or how
          to
          prepare for international travel?
        </p>
      </div>
    </div>
    <div class="section-info-container">
      <div id="one" class="img"></div>
      <div>
        <h2 class="title-section">MILFORD TRACK</h2>
        <p class="paragraph-section">
          The Milford Track is a famous four-day hike in Fiordland National Park in New Zealand. The route begins at
          Lake Te Anau and follows the Clinton River to Milford Fjord, passing through stunning landscapes of forests,
          mountains and lakes. The trail is known for its natural beauty and is considered one of the most impressive
          hikes in the world.
        </p>
      </div>
    </div>
    <div class="section-info-container">
      <div id="two" class="img"></div>
      <div>
        <h2 class="title-section">MILFORD TRACK</h2>
        <p class="paragraph-section">
          If you are planning a New Zealand holiday and are interested in walking the Milford Track, there are a few
          things to keep in mind. The route is of moderate difficulty and requires a good physical condition. It is
          also important to bring appropriate clothing and equipment for the weather, as the weather can change
          rapidly in the region.
        </p>
      </div>
    </div>
  </section>
@endsection