
{{-- EXTEND --}}
@extends('catalogo.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<div class="row">
  <div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #003c94;color: white;">CATEGORIAS</div>
      <div class="panel-body">
          <h4 onclick="myFunction1('Accesorios')"><span class="fa fa-check" style="color:#4CAF50"></span> - Accesorios</h4>
          <h4 onclick="myFunction1('Accesorios')"><span class="fa fa-check" style="color:#4CAF50"></span> - Accesorios para portatil</h4>
          <h4 onclick="myFunction1('Accesorios')"><span class="fa fa-check" style="color:#4CAF50"></span> - Accesorios para rack</h4>
          <h4 onclick="myFunction1('Accesorios')"><span class="fa fa-check" style="color:#4CAF50"></span> - Adaptador de corriente</h4>
            <h4 onclick="myFunction1('Accesorios')"><span class="fa fa-check" style="color:#4CAF50"></span> - Adaptadores de video</h4>
      </div>
    </div>
  </div>
  <div class="col-md-9">
  <div class="panel panel-default">
  <div class="panel-heading" style="background-color: #003c94;color: white;">PRODUCTOS</div>
  
  <div class="panel-body">
  
  <div class="row">
    @foreach ($portadas as $portada)
  <div class="imagenR item col-xs-6 col-lg-4">
  <div class="thumbnail">
    <a onclick="window.location='{{ route('catalogo.show', $portada->id) }}'"><img class="group list-group-image pruebaimg" src="{{ asset('img/'. $portada->imagen) }}" alt="" /></a>
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
      window.location = "http://localhost/public/catalogo?category="+ p1;
    }
  </script>
@endsection

