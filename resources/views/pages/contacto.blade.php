@extends('layouts.app')
@section('content')
    <section class="section-header" id="contact-section-header">
        <div class="card-titles-container">
          <h1 class="card-title" id="card-title-contact">EXPLOREMOS EL MUNDO</h1>
          <p class="card-subtitle">Dejanos tu inquietud y preparate para explorar el mundo</p>
        </div>

        <form action="post" class="row g-3 form-container">
            @csrf
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="email" class="form-control"  style="font-size: 0.5em;" id="exampleFormControlInput1" placeholder="Juan Perez">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <input type="email" class="form-control"  style="font-size: 0.5em;" id="exampleFormControlInput1"
              placeholder="juanperez@davinci.edu.ar">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea class="form-control"  style="font-size: 0.5em;" id="exampleFormControlTextarea1" rows="3"
              placeholder="Escribí tu mensaje acá"></textarea>
          </div>
          <button type="submit" class="btn btn-light btn-form">ENVIAR</button>
        </form>
    </section>
@endsection    
   