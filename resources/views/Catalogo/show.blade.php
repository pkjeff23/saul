
{{-- EXTEND --}}
@extends('layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<div class="row" style="margin-top: 40px;margin-right: 0px;margin-left: 0px;">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading text-upper" style="font-size:18px;background-color: #003c94;color: white;"><a class="bt-enlace" onclick="window.location='{{ route('catalogo.index') }}'">inicio </a>/<a class="bt-enlace" onclick="myFunction1('{{$Products->category}}')">{{$Products->category}} </a>/{{$Products->title}}</div>
            <div class="panel-body">
                <div class="row" style="margin-right: 0px;margin-left: 0px;">
                    <div class="col-md-6">
                        <div class="thumb-image detail_imagenes"> 
                            <img style="max-height: 300px;" id="zoom" src="{{ asset('img/productos/'.$Products->category .'/'.$Products->imagen) }}" data-zoom-image="{{ asset('img/'.$Products->imagen) }}" class="img-responsive" alt="" draggable="false"> 
                        </div>
                    </div>
                    <div class="col-md-6" style="border-left:1px solid #eee">
                        <h2 class="text-upper" style="font-size:21px;font-weight:700">{{$Products->title}}</h2>
                        <hr>
                        <h3 style="color: #DE0A0A;font-weight:600">$ {{$Products->price}}</h3>
                        <p style="font-size:15px;">{{$Products->description}}</p>
                        @if ($Products->tienda != true)
                        <i class="fa fa-home" style="font-size: 25px; color:#4CAF50"></i> <span style="font-weight:600">Disponible solo en tienda fisica</span> 
                        @else
                        <i class="fa fa-truck" style="font-size: 25px; color:#4CAF50"></i>
                        <span style="font-weight:600">Disponible para compra online</span>
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
<div class="row" style="margin-right: 0px;margin-left: 0px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="max-width: 980px; margin: 0px auto;">
    
    <div class="carrusel-robots bx-viewport"  style="width: 100%; overflow: hidden; position: relative;">
      @foreach ($productsCat as $productCat)
      <div class="thumbnail productoStyle">
        <a href="https://ventasctsaul.com/Productos/Ver/233" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lector de huella digital "><img class="img-responsive" src="{{ asset('img/productos/'.$productCat->category .'/'.$productCat->imagen) }}" alt="{{$productCat->title}}"></a>
             <div class="caption borderS">
                <h6 class="text-center productoText">
                    <a href="https://ventasctsaul.com/Productos/Ver/233">{{ $productCat->title}} </a>
                </h6>
              </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
<script type = "text/javascript" language = "javascript">
    function myFunction1(p1) {
      window.location = "/catalogo?category="+ p1;
    }
  </script>
@endsection

