@extends('layouts.app')
@section('content')
    <section class="section-header-home">
        <div class="card-titles-container" id="card-titles-container--home">
          <h1 class="title-section" id="title-section-home">
            TRAVEL
            <br>
            ADVENTURE
            <br>
            INSPIRATION
          </h1>
        </div>
    </section>
    <section class="section-hots">
        <div class="card-travels-container">
          <h3 class="card-travels-container--title">HOT TOURS</h3>
          <div class="card-travel-container" id="card-travel-container--home">
            <div class="card-travel" id="new-zealand">
              <h3 class="card-title">NEW ZEALAND</h3>
              <a class="card-button" href="#">MORE INFO</a>
            </div>
            <div class="card-travel" id="indonesia">
              <h3 class="card-title">INDONESIA</h3>
              <a class="card-button" href="#">MORE INFO</a>
            </div>
            <div class="card-travel" id="canada">
              <h3 class="card-title">CANADA</h3>
              <a class="card-button" href="#">MORE INFO</a>
            </div>
          </div>
          <div class="card-footer">
            <a href="#">See all</a>
          </div>
        </div>
    </section>
    <section class="section-populars">
        <div class="section-populars-container">
          <h2 class="title-section">POPULAR TOURS</h2>
          <p class="paragraph-section">
            Hello! I'm here to help you get travel information. Is there anything in particular you would like to know?
            For example, would you like information on how to plan a trip, how to choose a vacation destination, or how 
            prepare for international travel?
          </p>
        </div>
        <div class="section-populars-container--cards">
          <div class="card-travel" id="norway">
            <h3 class="card-title text-light" >NORWAY</h3>
          </div>
          <div class="card-travel" id="guatemala">
            <h3 class="card-title text-light">GUATEMALA</h3>
          </div>
          <div class="card-travel" id="peru">
            <h3 class="card-title text-light">PERU</h3>
          </div>
          <div class="card-travel" id="morocco">
            <h3 class="card-title text-light">MOROCCO</h3>
          </div>
        </div>
      </section>
      <section class="section-videos">
        <div class="section-videos-container--text">
          <h2 class="title-section">DISCOVER THE WORLD IN A NEW WAY</h2>
          <a class="card-button" href="#">
            <img src="/img/play.svg" alt="play icon">
            WATCH THE VIDEO</a>
          <p class="paragraph-section">
            There are many YouTube channels and other online video platforms that offer videos about travel and tourist 
          </p>
        </div>
        <div class="section-videos-container">
          <iframe width="80%" height="150" src="https://www.youtube.com/embed/1La4QzGeaaQ" class="card-video"></iframe>
          <iframe width="80%" height="150" src="https://www.youtube.com/embed/N1-Jmq7BLFE" class="card-video"></iframe>
        </div>
      </section>
@endsection
