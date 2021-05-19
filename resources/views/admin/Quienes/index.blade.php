{{-- EXTEND --}}
@extends('admin.layout')

{{-- BUTTONS --}}
@section('content')
<h2>Gestion de Quienes somos</h2>

@if ( count($portadas) == 0)
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i> Crear</button>
@endif
    <div class="row">
        @foreach ($portadas as $portada)
        <div style="margin-bottom: 40px;margin-top: 40px" class="col-12 col-lg-6">
            <img src="{{ asset('img/aboutus/'. $portada->imagen) }}" alt="..." style="width:100%;height:120px">
            <strong>Fecha de creacion:</strong> {{$portada->created_at}} <br>
            <strong>Usuario editor:</strong> admin <br>
            <strong>Fecha de edicion:</strong> {{$portada->updated_at}} <br>
            <strong>Misión:</strong> {{$portada->mision}} <br>
            <strong>Visión:</strong> {{$portada->vision}} <br>
            <button class="btn btn-success btn-sm"> <i class="fa fa-eye"></i></button>
            <button class="btn btn-danger btn-sm" type="button"  data-toggle="modal" data-target="#myModal1{{ $portada->id }}" id="open"><i class="fa fa-trash"></i></button>
            <form method="post" action="{{ route('portadas.destroy', ['portada' => $portada]) }}" id="form1" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
              <!-- Modal -->
              <div class="modal" tabindex="-1" role="dialog" id="myModal1{{ $portada->id }}">
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
                <h3 class="text-center">¿Esta seguro de eliminar este portada?</h3>
              </div>
              <div class="modal-footer">
                <button  class="btn btn-primary" id="ajaxSubmit1">Si</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
              </div>
              </div>
              </div>
              </form>
        </div>
        @endforeach
    </div>

    <form method="post" action="aboutus" id="form" enctype="multipart/form-data">
        @csrf
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert alert-danger" style="display:none"></div>
      <div class="modal-header">
        
        <h5 class="modal-title">Crear Quienes somos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-8">
              <label for="img">imagen:</label>
              <input type="file" name="img" id="img">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-8">
            <label for="state">Misión:</label>
            <textarea name="mision" id="" cols="40" rows="5"></textarea>
          </div>
        </div>
          <div class="row">
            <div class="form-group col-md-8">
            <label for="state">Visión:</label>
            <textarea name="vision" id="" cols="40" rows="5"></textarea>
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