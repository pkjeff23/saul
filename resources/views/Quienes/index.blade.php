
{{-- EXTEND --}}
@extends('layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
@foreach ($portadas as $portada)
<aside class="responsive-banner">
  <div class="container-envelope">
      <img class="img-responsive" src="{{ asset('img/aboutus/'. $portada->imagen) }}" alt="portada" width="100%">
  </div>
</aside>
<hr>
<div class="container">
  <div class="row">
  <div class="col">
    <div class="document">
      <div class="header">
        <h1 class="title">Misión</h1>
      </div> 
      <div class="content">
        {{$portada->mision}}
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="document">
          <div class="header">
            <h1 class="title">Visión</h1>
          </div> 
          <div class="content">
            {{$portada->vision}}
            </div>
        </div>
      </div>
    </div>
</div>
  @endforeach    
@endsection

