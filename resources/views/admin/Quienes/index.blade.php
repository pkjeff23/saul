{{-- EXTEND --}}
@extends('admin.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<h2>Gestion de Portadas</h2>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i> Crear</button>
    <div class="row" >

        <div style="margin-bottom: 40px;margin-top: 40px" class="col-12 col-lg-4">
            <img src="" alt="..." style="width:100%;height:120px">
            <strong>Fecha de creacion:</strong>  <br>
            <strong>Usuario editor:</strong> admin <br>
            <strong>Fecha de edicion:</strong>  <br>
            <strong>Estado:</strong>  <br>
            <button class="btn btn-success btn-sm"> <i class="fa fa-eye"></i></button>
            <button class="btn btn-danger btn-sm" type="button"  data-toggle="modal" data-target="#myModal1{{  }}" id="open"><i class="fa fa-trash"></i></button>
            <form method="post" action="" id="form1" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
              <!-- Modal -->
              <div class="modal" tabindex="-1" role="dialog" id="myModal1">
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
    </div>

    <form method="post" action="portadas" id="form" enctype="multipart/form-data">
        @csrf
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert alert-danger" style="display:none"></div>
      <div class="modal-header">
        
        <h5 class="modal-title">Crear Portada</h5>
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
                <label for="state">Estado:</label>
                <select class="form-control" name="state" id="state">
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
