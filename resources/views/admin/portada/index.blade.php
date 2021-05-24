
{{-- EXTEND --}}
@extends('admin.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<h2>Gestion de Portadas</h2>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i> Crear</button>
    <div class="row" >
        @foreach ($portadas as $portada)
        <div style="margin-bottom: 40px;margin-top: 40px" class="col-12 col-lg-4">
            <img src="{{ asset('img/portadas/'. $portada->imagen) }}" alt="..." style="width:100%;height:120px">
            <strong>Fecha de creacion:</strong> {{$portada->created_at}} <br>
            <strong>Usuario editor:</strong> admin <br>
            <strong>Fecha de edicion:</strong> {{$portada->updated_at}} <br>
            <strong>Estado:</strong> {{ (1 == $portada->state) ? 'Activo' : 'Inactivo' }} <br>
            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{ $portada->id }}" id="open"> <i class="fa fa-pencil"></i></button></td>
          
              <form style="display: inline" method="POST" action="{{ route('portadas.update', ['portada' => $portada]) }}"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <!-- Modal -->
                  <div class="modal" tabindex="-1" role="dialog" id="myModal{{ $portada->id }}">
                  <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="alert alert-danger" style="display:none"></div>
                  <div class="modal-header">
                
                      <h5 class="modal-title">Actualizar categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                        <div class="form-group col-md-8">
                            <label for="state">Estado:</label>
                            <select style="border: 1px solid #ced4da;!important" class="form-control" name="state">
                              <option {{ ( $portada->state == 1) ? 'selected' : '' }} value=1>activo</option>
                              <option {{ ( $portada->state == 0) ? 'selected' : '' }} value=0>inactivo</option>
                            </select>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                    <button  class="btn btn-success" id="ajaxSubmit1">Actualizar</button>
                    </div>
              </div>
              </div>
              </div>
          </form>

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
              <label for="prueba" style="color: red;">El tamaño minimo de la imagen debe ser de 2000 x 2000 px</label>
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

