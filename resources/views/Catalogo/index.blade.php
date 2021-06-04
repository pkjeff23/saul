
{{-- EXTEND --}}
@extends('layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<div class="row" style="margin-top: 40px;margin-right: 0px;margin-left: 0px;">
  <div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #003c94;color: white;">CATEGORIAS</div>
      <div class="panel-body">
        @foreach ($categorias as $categoria)
        <h4 class="text-upper bt-enlace1" onclick="myFunction1('{{$categoria->title}}')"><span class="fa fa-check" style="color:#4CAF50"></span> {{$categoria->title}}</h4>
        @endforeach
      </div>
    </div>
  </div>
  <div class="col-md-9">
  <div class="panel panel-default">
  <div class="panel-heading" style="background-color: #003c94;color: white;">PRODUCTOS</div>
  
  <div class="panel-body">
  
  <div class="row">
    @foreach ($portadas as $portada)
  <div class="item col-xs-6 col-lg-4">
  <div class="thumbnail">
    <a onclick="window.location='{{ route('catalogo.show', $portada->id) }}'"><img class="imagenR group list-group-image pruebaimg" src="{{ asset('img/productos/'.$portada->category .'/'.$portada->imagen) }}" alt="" /></a>
  <div class="caption">
  <h4 class="group inner list-group-item-heading" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;">
  {{$portada->title}}</h4>
  <p class="group inner list-group-item-text">
  {{$portada->desciption}}</p>
  <div class="row">
  <div class="col-xs-12 col-md-6">
  </div>
  </div>
  </div>
  </div>
  </div>
  @endforeach
  </div>
  <p>
  {{ $portadas->total() }} registros |
  páginas {{ $portadas->currentPage() }}
  de {{ $portadas->lastPage() }}
  </p>
  
  {{ $portadas->links() }}
  </div>
  </div>
  </div>
  </div>
  </div>
  <script type = "text/javascript" language = "javascript">
    function myFunction1(p1) {
      window.location = "catalogo?category="+ p1;
    }
  </script>
@endsection

