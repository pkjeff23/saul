{{-- EXTEND --}}
@extends('admin.layout')

@section('content')
<h2>Gestion de Subcategorias</h2>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i> Crear</button>
<table style="margin-top: 50px;" id="myTable" class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha creacion</th>
      <th scope="col">Fecha edicion</th>
      <th scope="col">Usuario</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($portadas as $portada)
        <tr>
          <td>{{ $portada->title }}</td>
          <td>{{ $portada->created_at }}</td>
          <td>{{ $portada->updated_at }}</td>
          <td>Admin</td>
          <td>{{ (1 == $portada->state) ? 'Activo' : 'Inactivo' }}</td>
          <td><button class="btn btn-success btn-sm" type="button"  data-toggle="modal" data-target="#myModal{{ $portada->id }}" id="open"> <i class="fa fa-pencil"></i></button></td>
          <form method="post" action="{{ route('subcategory.update', ['subcategory' => $portada]) }}" id="form1" enctype="multipart/form-data">
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
              <div class="form-group offset-2 col-md-10">
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
                    <label for="title">Nombre:</label>
                    <input type="text" class="form-control" name="title" id="title" value={{ $portada->title }}>
                    <input type="hidden" class="form-control" name="category_id" id="category_id" value={{ $portada->category_id }}>
                  </div>
              </div>
              <div class="row">
                 <div class="form-group col-md-8">
                    <label for="state">Estado:</label>
                    <select class="form-control" name="state" id="state">
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
          <td><button class="btn btn-danger btn-sm" type="button"  data-toggle="modal" data-target="#myModal1{{ $portada->id }}" id="open"><i class="fa fa-trash"></i></button></td>
          <form method="post" action="{{ route('subcategory.destroy', ['subcategory' => $portada]) }}" id="form1" enctype="multipart/form-data">
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
            <h3 class="text-center">¿Esta seguro de eliminar este portadae coporativo?</h3>
          </div>
          <div class="modal-footer">
            <button  class="btn btn-primary" id="ajaxSubmit1">Si</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
          </div>
          </div>
          </div>
          </form>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $portadas->links() }}

    <form method="post" action="subcategory" id="form" enctype="multipart/form-data">
        @csrf
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert alert-danger" style="display:none"></div>
      <div class="modal-header">
        
        <h5 class="modal-title">Crear subCategoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-8">
              <label for="category">Categoria:</label>
              <select style="border: 1px solid #ced4da;!important" class="form-control" name="category_id">
                <option value=''>elija una categoria</option>         
                @foreach ($categorias as $categoria)
                  <option value='{{$categoria->id}}'>{{$categoria->title}}</option>         
                @endforeach
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-8">
              <label for="img">Nombre Subcategoria:</label>
              <input style="border: 1px solid #ced4da;!important" type="text" name="title" id="title">
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