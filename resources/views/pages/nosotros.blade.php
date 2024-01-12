@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar')
@endsection    
@section('content')
  <main>
    <section class="section-header" id="about-section-header">
      <div class="about-card-titles-container">
        <h1 class="title-section">ABOUT US</h1>
        <p class="about-card-subtitle">Your guides in your adventures</p>
      </div>
    </section>
    <section class="about-info-section">
      <div class="about-info-section--container">
        <h2 class="about-info-section-title"><span>WE ARE </span><span>ADVENTURERS</span></h2>
        <p class="paragraph-section" id="info-quote">
          That sounds fun! If you like adventure, there are many ways to incorporate it into your travels. Some ideas
          for adventurers include:
          Climb mountains or go hiking in destinations with impressive landscapes, such as Patagonia, the Alps or the
          Himalayas.
          Go rafting or kayaking in exciting rivers, such as the Rio Grande in the United States or the Futaleufú River
          in Chile.
        </p>
      </div>
      <div class="about-trekking">
        <img src="../img/about/trekking.jpg" alt="a group of people" width="1840" height="1440">
      </div>
    </section>
    <section class="about-quote-section">
      <div>
        <p class="about-quote-paragraph">let your adventurous spirit push you forward and unveil the world around you
          with its oddities and wonders. To discover it will be to love it.</p>
        <h3 id="quote-name">KAHLIL GIBRAN</h3>
      </div>
    </section>
  </main>

@endsection
