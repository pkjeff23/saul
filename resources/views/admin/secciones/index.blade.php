
{{-- EXTEND --}}
@extends('admin.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<h2>Gestion de Secciones</h2>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i> Crear</button>
<div class="row" >
  @foreach ($secciones as $seccion)
  <div style="margin-bottom: 40px;margin-top: 40px" class="col-12 col-lg-4">
    @foreach ($imagenes as $imagen)
        @if ($seccion->id == $imagen->seccion_id)
        <button class="btn btn-outline" style="margin-top: 4px" data-toggle="modal" data-target="#myModal3{{ $imagen->id }}" id="open"> <img src="{{ asset('img/seccion/'. $imagen->imagen) }}" alt="..." style="width:60px;height:50px"></button>        
        @endif
        <form style="display: inline" method="post" action="{{ route('seccionesimg.update', ['seccionesimg' => $imagen]) }}"  enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal3{{ $imagen->id }}">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="alert alert-danger" style="display:none"></div>
        <div class="modal-header">
          
          <h5 class="modal-title">Actualizar imagen seccion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group offset-2 col-md-10">
              <img src="{{ asset('img/seccion/'.$imagen->imagen) }}" width="80%" alt="Robot 1"/>
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
                  <label for="title">titulo:</label>
                <input style="border: 1px solid #ced4da;!important" type="hidden" class="form-control" name="seccion_id" value={{ $seccion->id }}>
                <input style="border: 1px solid #ced4da;!important" type="hidden" class="form-control" name="imagen" value={{ $imagen->imagen }}>
                  <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="title" id="title" value={{ $imagen->title }}>
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
      <strong >Fecha de creacion:</strong> {{$seccion->created_at}} <br>
      <strong>Usuario editor:</strong> admin <br>
      <strong>Fecha de edicion:</strong> {{$seccion->updated_at}} <br>
      <strong>Tipo:</strong> {{ (1 == $seccion->type) ? 'Recuadro' : 'carousell' }} <br>
      <strong>Estado:</strong> {{ (1 == $seccion->state) ? 'Activo' : 'Inactivo' }} <br>
      
        <button class="btn btn-success btn-sm"type="button"  data-toggle="modal" data-target="#myModal2{{ $seccion->id }}" id="open"> <i class="fa fa-plus"></i></button>
        <button class="btn btn-danger btn-sm" type="button"  data-toggle="modal" data-target="#myModal1{{ $seccion->id }}" id="open"><i class="fa fa-trash"></i></button>
      <form method="post" action="{{url('seccionesimg')}}" id="form" enctype="multipart/form-data">
        @csrf
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal2{{ $seccion->id }}">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert alert-danger" style="display:none"></div>
      <div class="modal-header">
        
        <h5 class="modal-title">Crear imagen para seccion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="form-group col-md-8">
                <label for="title">Titulo imagen:</label>
                <input style="border: 1px solid #ced4da;!important" type="hidden" class="form-control" name="seccion_id" value={{ $seccion->id }}>
                <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="title" id="title">
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
      <form method="post" action="{{ route('secciones.destroy', ['seccione' => $seccion] ) }}" id="form1" enctype="multipart/form-data">
          @csrf
          @method('DELETE')
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal1{{ $seccion->id }}">
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
          <h3 class="text-center">¿Esta seguro de eliminar esta seccion?</h3>
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
    <form method="post" action="{{url('secciones')}}" id="form">
        @csrf
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert alert-danger" style="display:none"></div>
      <div class="modal-header">
        
        <h5 class="modal-title">Crear seccion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="form-group col-md-8">
                <label for="title">Titulo seccion:</label>
                <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="title" id="title">
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-8">
               <label for="type">tipo:</label>
               <select style="border: 1px solid #ced4da;!important" class="form-control" name="type" id="type">
                <option value=1>Recuadros</option>
                <option value=0>Carousell</option>
               </select>
             </div>
         </div>
          <div class="row">
             <div class="form-group col-md-8">
                <label for="state">Estado:</label>
                <select style="border: 1px solid #ced4da;!important" class="form-control" name="state" id="state">
                  <option value=1>activo</option>
                  <option value=0>inactivo</option>
                </select>
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

