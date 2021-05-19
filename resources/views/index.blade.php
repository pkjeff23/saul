{{-- EXTEND --}}
@extends('layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<div class="container--head img-portada-height">
    <div id="carousel-generic" class="carousel slide" data-bs-ride="carousel">

      <ol class="carousel-indicators">
        @foreach ($portadas as $key=> $portada)
        <li data-target="#carousel-generic" data-slide-to="{{$key}}" class="{{ ( $key == 0) ? 'active' : '' }}"></li>
        @endforeach
      </ol>

      <div class="carousel-inner img-portada-height">
        @foreach ($portadas as $key => $portada)
        <div class="carousel-item img-portada-height {{ ( $key == 0) ? 'active' : '' }}">
          <img class="img-responsive d-block w-100 img-portada" src="{{ asset('img/portadas/'. $portada->imagen) }}" alt="portada">
        </div>
        @endforeach
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
    
  <div class="wrap mcb-wrap one col-centrar column-margin-0px valign-top clearfix" style="background-color:#00b600">
    <div class="mcb-wrap-inner">
      <div class="column-ventas">
        <div class="hover_box">
          <a href="https://ventasctsaul.com/" target="_blank">
            <div class="hover_box_wrapper">
              <img style="width: 100%;height: 100px;" class="visible_photo scale-with-grid" src="{{ asset('img/Compra.png') }}" alt="Compra">
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <section class="new-collections opposite-background col-12">
    <h3 class="animated wow zoomIn animated title-section" data-wow-delay=".5s">CATEGORÍAS</h3>
    
    <div class="row mx-auto justify-content-center align-items-center">
      @foreach ($categorias as $categoria)
      <div class="col-6 col-md-4 col-lg-3">
        <div class="img-category p-3 border">
          <a href="https://ventasctsaul.com/Productos/Ver/233">
            <img class="img-responsive" src="{{ asset('img/categorias/'. $categoria->imagen) }}" alt="categoria">
            <div class="text-block-image">
              <h4 class="text-upper">{{$categoria->title}}</h4>
            </div>
          </a>
        </div>
    </div>
      @endforeach
    </div>
  </section>

  <section class="new-collections col-12">
    <h3 class="animated wow zoomIn animated title-section" data-wow-delay=".5s">Destacados</h3>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="carrusel-robots bx-viewport subcategoria">    
        @foreach ($productsDes as $productDes)
        <div class="thumbnail productoStyle">
        <a href="https://ventasctsaul.com/Productos/Ver/233" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lector de huella digital "><img class="imagenR img-responsive" src="{{ asset('img/productos/'.$productDes->category .'/'.$productDes->imagen) }}" alt="{{$productDes->title}}"></a>
            <div class="caption text-center">
                <i class="fas fa-people-carry"></i>
                <i class="fas fa-truck"></i>
              </div>
              <div class="caption borderS">
                <h6 class="text-center productoText">
                    <a href="https://ventasctsaul.com/Productos/Ver/233">{{ $productDes->title}} </a>
                </h6>
              </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
   

<section class="new-collections col-12 opposite-background">
  <h3 class="animated wow zoomIn animated title-section" data-wow-delay=".5s">Productos nuevos</h3>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    
    <div class="carrusel-robots bx-viewport subcategoria">
      @foreach ($productsNew as $productNew)
      <div class="thumbnail productoStyle">
        <a href="https://ventasctsaul.com/Productos/Ver/233" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lector de huella digital "><img class="imagenR img-responsive" src="{{ asset('img/productos/'.$productNew->category .'/'.$productNew->imagen) }}"></a>
        <div class="caption text-center">
            <i class="fas fa-people-carry"></i>
            <i class="fas fa-truck"></i>
          </div> 
            <div class="caption borderS">
                <h6 class="text-center productoText">
                    <a href="https://ventasctsaul.com/Productos/Ver/233">{{ $productNew->title}} </a>
                </h6>
              </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
@foreach ($secciones as $seccion)
  <section class="new-collections col-12 opposite-background">
    <h3 class="animated wow zoomIn animated title-section" data-wow-delay=".5s">{{ $seccion->title}}</h3>
        
    @if ($seccion->type == 0)
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      
      <div class="carrusel-robots bx-viewport subcategoria">
        @foreach ($imagenes as $imagen)
        @if ($seccion->id == $imagen->seccion_id)
          <div class="thumbnail productoStyle">
            <a href="https://ventasctsaul.com/Productos/Ver/233" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lector de huella digital "><img class="imagenR img-responsive" src="{{ asset('img/seccion/'.$imagen->category .'/'.$imagen->imagen) }}"></a>
            <div class="caption text-center">
              <i class="fas fa-people-carry"></i>
              <i class="fas fa-truck"></i>
            </div> 
            <div class="caption borderS">
              <h6 class="text-center productoText">
                <a href="https://ventasctsaul.com/Productos/Ver/233">{{ $imagen->title}} </a>
              </h6>
            </div>
          </div>
          @endif
        @endforeach
      </div>
    </div>    
    @else
    <div class="row mx-auto justify-content-center align-items-center">
      @foreach ($imagenes as $imagen)
      @if ($seccion->id == $imagen->seccion_id)

      <div class="col-6 col-md-4 col-lg-3">
        <div class="img-category p-3 border">
          <a href="https://ventasctsaul.com/Productos/Ver/233">
            <img class="img-responsive" src="{{ asset('img/seccion/'. $imagen->imagen) }}" alt="categoria">
            <div class="text-block-image">
              <h4 class="text-upper">{{$imagen->title}}</h4>
            </div>
          </a>
        </div>
    </div>
     @endif
      @endforeach
    </div>
    @endif
  </section>
      @endforeach

 <section style="margin-top: 30px">
    <div class="row" style="margin-right: 0px;margin-left: 0px;">
        
<div class="offset-5 col-2"></div>
        <div class="col-12 col-lg-4 text-center">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCT-Saul-532296690259418%2F&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
    </div>
 </section>

 <section class="new-collections brands col-12 opposite-background">
  <h3 class="animated wow zoomIn animated title-section" data-wow-delay=".5s">Nuestros Clientes</h3>
  <div class="carrusel-robots1 mt-3" style="width: 100%; overflow: hidden; position: relative; height: 155px;">
    @foreach ($clients as $client)
      <div style="float: left; list-style: none; position: relative; width: 200px; margin-right: 50px;"><img class="img-responsive" src="{{ asset('img/clients/'.$client->imagen) }}"  alt="Robot 1"/></div>
    @endforeach
  </div>  
 </section>
 @endsection
