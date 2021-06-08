
{{-- EXTEND --}}
@extends('layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')

@foreach ($portadas as $portada)
<aside class="responsive-banner">
  <div class="container-envelope">
      <img class="img-responsive" src="{{ asset('img/services'. $portada->imagen) }}" alt="portada" width="100%">
  </div>
</aside>
<hr>
@endforeach

<div class="container">
<h1 class="new-title">Nuestros servicios</h1>
    <div class="carrusel-robots2 bx-viewport subcategoria">    

        @foreach ($imagenes as $imagen)

        <div class="card" style="padding: 40px">
          <h3 class="card-title new-title-card">{{$imagen->title}}</h3>
          <div class="card-body">
            <img class="card-img-top img-responsive" src="{{ asset('img/services/'. $imagen->imagen) }}" alt="portada" width="100%">
            <p class="card-text new-title-text">{{$imagen->description}}</p>
          </div>
        </div>
        @endforeach    
    </div>
</div>
@endsection
