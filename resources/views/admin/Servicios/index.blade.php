{{-- EXTEND --}}
@extends('admin.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<h2>Gestion de Servicios</h2>
@if ( count($services) == 0)
  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i> Crear</button>
@endif
<div class="row" >
  @foreach ($services as $service)
  <div style="margin-bottom: 40px;margin-top: 40px" class="col-12 col-lg-4">
    @foreach ($imagenes as $imagen)
        <button class="btn btn-outline" style="margin-top: 4px" data-toggle="modal" data-target="#myModal3{{ $imagen->id }}" id="open"> <img src="{{ asset('img/services/'. $imagen->imagen) }}" alt="..." style="width:60px;height:50px"></button>        
        <form style="display: inline" method="post" action="{{ route('serviciosimg.update', ['serviciosimg' => $imagen]) }}"  enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal3{{ $imagen->id }}">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="alert alert-danger" style="display:none"></div>
        <div class="modal-header">
          
          <h5 class="modal-title">Actualizar imagen servicios</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group offset-2 col-md-10">
              <img src="{{ asset('img/services/'. $imagen->imagen) }}" width="80%" alt="Robot 1"/>
            </div>
          </div>
            <div class="row">
                <div class="form-group col-md-8">
                  <label for="img">imagen:</label>
                  <input type="file" name="img" id="img">
                </div>
              </div>
            <div class="row">
              <div class="form-group col-md-8">
                <label for="title">Titulo del servicio:</label>
                <input style="border: 1px solid #ced4da;!important" type="hidden" class="form-control" name="services_id" value={{ $service->id }}>
                <input style="border: 1px solid #ced4da;!important" type="hidden" class="form-control" name="imagen" value={{ $imagen->imagen }}>
                <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="title" id="title" value="{{ $imagen->title }}">
              </div>
          </div>
          <div class="row">
              <div class="form-group col-md-8">
                <label for="title">Descripcion del servicio:</label>
                <textarea name="description" id="description" cols="40" rows="5" >{{ $imagen->description }}</textarea>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
          <button  class="btn btn-success">Actualizar</button>
          </div>
        </div>
        </div>
        </div>
        </form>
      @endforeach
      <div style="display: block"></div>
      <strong >Fecha de creacion:</strong> {{$service->created_at}} <br>
      <strong>Usuario editor:</strong> admin <br>
      <strong>Fecha de edicion:</strong> {{$service->updated_at}} <br>
      
        <button class="btn btn-success btn-sm"type="button"  data-toggle="modal" data-target="#myModal2{{ $service->id }}" id="open"> <i class="fa fa-plus"></i></button>
        <button class="btn btn-danger btn-sm" type="button"  data-toggle="modal" data-target="#myModal1{{ $service->id }}" id="open"><i class="fa fa-trash"></i></button>
      <form method="post" action="{{url('serviciosimg')}}" id="form" enctype="multipart/form-data">
        @csrf
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal2{{ $service->id }}">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert alert-danger" style="display:none"></div>
      <div class="modal-header">
        
        <h5 class="modal-title">Crear imagen para servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="form-group col-md-8">
                <label for="title">Titulo del servicio:</label>
                <input style="border: 1px solid #ced4da;!important" type="hidden" class="form-control" name="services_id" value={{ $service->id }}>
                <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="title" id="title">
              </div>
          </div>
          <div class="row">
              <div class="form-group col-md-8">
                <label for="title">Descripcion del servicio:</label>
                <textarea name="description" id="description" cols="40" rows="5"></textarea>
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-8">
              <label for="img">imagen:</label>
              <input type="file" name="img" id="img">
              <label for="prueba" style="color: red;">El tamaño minimo de la imagen debe ser de 240 x 300 px</label>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <button  class="btn btn-success" id="ajaxSubmit">Crear</button>
        </div>
    </div>
    </div>
    </div>
    </form>
      <form method="post" action="{{ route('servicios1.destroy', ['servicios1' => $service] ) }}" id="form1" enctype="multipart/form-data">
          @csrf
          @method('DELETE')
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal1{{ $service->id }}">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="alert alert-danger" style="display:none"></div>
        <div class="modal-header">
          
          <h5 class="modal-title"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3 class="text-center">¿Esta seguro de eliminar esta servicio?</h3>
        </div>
        <div class="modal-footer">
          <button  class="btn btn-primary">Si</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          </div>
        </div>
        </div>
        </div>
        </form>
  </div>
  @endforeach
</div>
    <form method="post" action="{{url('servicios1')}}" id="form" enctype="multipart/form-data">
        @csrf
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert alert-danger" style="display:none"></div>
      <div class="modal-header">
        
        <h5 class="modal-title">Crear service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
            <div class="form-group col-md-8">
              <label for="img">portada:</label>
              <input type="file" name="img" id="img">
              <label for="prueba" style="color: red;">El tamaño minimo de la imagen debe ser de ? x ? px</label>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <button  class="btn btn-success" id="ajaxSubmit">Crear</button>
        </div>
    </div>
    </div>
    </div>
    </form>
@endsection

