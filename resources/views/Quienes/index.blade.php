
{{-- EXTEND --}}
@extends('layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
@foreach ($portadas as $portada)
<aside class="responsive-banner">
  <div class="container-envelope">
      <img class="img-responsive d-block w-100 img-portada" src="{{ asset('img/aboutus/'. $portada->imagen) }}" alt="portada">
  </div>
</aside>
<hr>
<div class="pitch text-center" style="margin-top: 100px;margin-bottom: 60px">
  <div class="container">
    <div class="col-md-12">
      <div class="col-md-4 wow fadeInDown sombras" data-wow-delay="0.2s">
        <div class="iconspace">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="pitch-content">
          <h1 style="color: #003c94;">Misión</h1>
          <p>
            {{$portada->mision}}
          </p>
        </div>
      </div>
      <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
        <div class="">
          <i class="ion-cube"></i>
        </div>
        <div class="pitch-content">
          <img class="scale-with-grid" src="{{ asset('img/mascota-contactosin.png' ) }}" alt="mascota contacto">
        </div>
      </div>
      <div class="col-md-4 wow fadeInDown sombras" data-wow-delay="0.2s">
        <div class="iconspace">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="pitch-content">
          <h1 style="color: #003c94;">VISIÓN</h1>
          <p>
            {{$portada->vision}}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>   
@endforeach
<hr>    
@endsection

