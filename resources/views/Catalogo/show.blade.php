
{{-- EXTEND --}}
@extends('catalogo.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #003c94;color: white;">{{$Products->category}}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="thumb-image detail_imagenes"> 
                            <img style="border:solid 1px" id="zoom" src="{{ asset('img/'.$Products->imagen) }}" data-zoom-image="{{ asset('img/'.$Products->imagen) }}" class="img-responsive" alt="" draggable="false"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>{{$Products->title}}</h2>
                        <hr>
                        <h3>$ {{$Products->price}}</h3>
                        <p>{{$Products->description}}</p>
                        @if ($Products->tienda != true)
                        <i class="fa fa-home" style="font-size: 40px; color:#4CAF50"></i> Disponible solo en tienda fisica
                        @else
                        <i class="fa fa-truck" style="font-size: 40px; color:#4CAF50"></i>
                          Disponible para compra online
                        @endif
                        @if ($Products->tienda != true)
                        @else
                        <div style="margin-top: 30px">
                          <a class="btn btn-success"href="https://ventasctsaul.com/Productos/Ver/233">Comprar </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h3 class="text-center" style="color: #003c94;">PRODUCTOS RELACIONADOS</h3>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="max-width: 980px; margin: 0px auto;">
    
    <div class="carrusel-robots bx-viewport"  style="width: 100%; overflow: hidden; position: relative; height: 219px;">
      @foreach ($productsCat as $productCat)
      <div class="thumbnail" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 20px;">
        <a href="https://ventasctsaul.com/Productos/Ver/233" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lector de huella digital "><img class="img-responsive" src="{{ asset('img/'.$productCat->imagen) }}" alt="{{$productCat->title}}"></a>
             <div class="caption">
                <h6 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;">
                    <a href="https://ventasctsaul.com/Productos/Ver/233">{{ $productCat->title}} </a>
                </h6>
              </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection

