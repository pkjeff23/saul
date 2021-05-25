
{{-- EXTEND --}}
@extends('admin.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<h2>Productos</h2>
<button style="margin-bottom: 30px;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i> Crear</button>
<table id="myTable" class="table table-striped table-bordered" style="width:100%;">
<caption>Productos</caption>
    <thead>
      <tr>
        <th scope="col">imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha creacion</th>
        <th scope="col">Fecha edicion</th>
        <th scope="col">Usuario</th>
        <th scope="col">Estado</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
      <tr>
        <th scope="row"><img src="{{ asset('img/productos/'.$client->category.'/'.$client->imagen) }}" width="100" alt="Robot 1"/></th>
        <td>{{ $client->title }}</td>
        <td>{{ $client->created_at }}</td>
        <td>{{ $client->updated_at }}</td>
        <td>Admin</td>
        <td>{{ (1 == $client->state) ? 'Activo' : 'Inactivo' }}</td>
        <td><button class="btn btn-success btn-sm" type="button"  data-toggle="modal" data-target="#myModal{{ $client->id }}" id="open"> <i class="fa fa-pencil"></i></button></td>
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal{{ $client->id }}">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="alert alert-danger" style="display:none"></div>
        <div class="modal-header">
          
          <h5 class="modal-title">Actualizar producto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" action="{{ route('productos.update', ['producto' => $client]) }}" id="form_{{ $client->id }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="form-group offset-2 col-md-10">
              <img src="{{ asset('img/productos/'.$client->category.'/'.$client->imagen) }}" width="100" alt="Robot 1"/>
            </div>
          </div>
            <div class="row">
                <div class="form-group col-md-8">
                  <label for="name">Nombre:</label>
                  <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="title" id="title" value="{{ $client->title }}">
                </div>
            </div>
            <div class="row">
              <div class="form-group col-md-8">
                <label for="description">Description:</label>
                <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="description" id="description" value="{{ $client->description }}">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-8">
                <label for="category">Categoria:</label>
                <select style="border: 1px solid #ced4da;!important" class="form-control" name="category">
                  <option value=''>elija categoria</option>         
                  @foreach ($categorias as $categoria)
                    <option {{ ( $client->category == $categoria->title) ? 'selected' : '' }} value='{{$categoria->title}}'>{{$categoria->title}}</option>         
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-8">
                <label for="subcategory">Subcategoria:</label>
                <select style="border: 1px solid #ced4da;!important" class="form-control" name="subcategory">
                  <option value=''>elija subcategoria</option>         
                  @foreach ($subcategorias as $subcategoria)
                    <option {{ ( $client->subcategory == $subcategoria->title) ? 'selected' : '' }} value='{{$subcategoria->title}}'>{{$subcategoria->title}}</option>         
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-8">
                <label for="brand">Marca:</label>
                <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="brand" id="brand" value={{ $client->brand }}>
              </div>
            </div>
              <div class="row">
                  <div class="form-group col-md-8">
                    <label for="img">imagen:</label>
                    <input style="border: 1px solid #ced4da;!important" type="file" name="img" id="img">
                    <label for="prueba" style="color: red;">El tamaño minimo de la imagen debe ser de 300 x 300 px</label>
                  </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                      <label for="price">Precio:</label>
                      <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="price" id="price" value={{ $client->price }}>
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-8">
                      <label for="state">Estado:</label>
                      <select style="border: 1px solid #ced4da;!important" class="form-control" name="state" id="state">
                        <option {{ ( $client->state == 1) ? 'selected' : '' }} value=1>activo</option>
                        <option {{ ( $client->state == 0) ? 'selected' : '' }} value=0>inactivo</option>
                      </select>
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-8">
                    <label for="tienda">Disponible en tienda:</label>
                    <select style="border: 1px solid #ced4da;!important" class="form-control" name="tienda" id="tienda">
                        <option {{ ( $client->tienda == 1) ? 'selected' : '' }} value=1>Si</option>
                        <option {{ ( $client->tienda == 0) ? 'selected' : '' }} value=0>No</option>
                    </select>
                  </div>
              </div>
              <div class="row">
                  <div class="form-group col-md-8">
                    <label for="price">Id en ventas saul:</label>
                    <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="id_ventas" id="id_ventas" value={{ $client->id_ventas }}>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
          <button onclick="submitform('form_{{ $client->id }}')"  class="btn btn-success" id="ajaxSubmit1">Actualizar</button>
          </div>
        </div>
        </div>
        </div>
        </form>
        <td><button class="btn btn-danger btn-sm" type="button"  data-toggle="modal" data-target="#myModal1{{ $client->id }}" id="open"><i class="fa fa-trash"></i></button></td>
        <form method="post" action="{{ route('productos.destroy', ['producto' => $client]) }}" id="form-{{ $client->id }}" enctype="multipart/form-data">
          @csrf
          @method('DELETE')
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal1{{ $client->id }}">
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
          <h3 class="text-center">¿Esta seguro de eliminar este producto?</h3>
        </div>
        <div class="modal-footer">
          <button onclick="submitform('form-{{ $client->id }}')" class="btn btn-primary" id="ajaxSubmit1">Si</button>
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
  {{ $clients->links() }}
  <form method="post" action="productos" id="form" enctype="multipart/form-data">
    @csrf
<!-- Modal -->
<div class="modal" tabindex="-1" role="dialog" id="myModal">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="alert alert-danger" style="display:none"></div>
  <div class="modal-header">
    
    <h5 class="modal-title">Crear Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="form-group col-md-8">
        <label for="title">Nombre:</label>
        <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="title" id="title">
      </div>
  </div>
  <div class="row">
    <div class="form-group col-md-8">
      <label for="description">Description:</label>
      <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="description" id="description">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-8">
      <label for="category">Categoria:</label>
      <select style="border: 1px solid #ced4da;!important" class="form-control" name="category">
        <option value=''>elija categoria</option>         
        @foreach ($categorias as $categoria)
          <option value='{{$categoria->title}}'>{{$categoria->title}}</option>         
        @endforeach
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-8">
      <label for="subcategory">Subcategoria:</label>
      <select style="border: 1px solid #ced4da;!important" class="form-control" name="subcategory">
        <option value=''>elija subcategoria</option>         
        @foreach ($subcategorias as $subcategoria)
          <option value='{{$subcategoria->title}}'>{{$subcategoria->title}}</option>         
        @endforeach
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-8">
      <label for="brand">Marca:</label>
      <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="brand" id="brand">
    </div>
  </div>
    <div class="row">
        <div class="form-group col-md-8">
          <label for="img">imagen:</label>
          <input style="border: 1px solid #ced4da;!important" type="file" name="img" id="img">
          <label for="prueba" style="color: red;">El tamaño minimo de la imagen debe ser de 300 x 300 px</label>
        </div>
      </div>
      <div class="row">
          <div class="form-group col-md-8">
            <label for="price">Precio:</label>
            <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="price" id="price">
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
      <div class="row">
        <div class="form-group col-md-8">
           <label for="tienda">Disponible en tienda:</label>
           <select style="border: 1px solid #ced4da;!important" class="form-control" name="tienda" id="tienda">
             <option value=1>Si</option>
             <option value=0>No</option>
           </select>
         </div>
     </div>
     <div class="row">
          <div class="form-group col-md-8">
            <label for="id_ventas">Id en ventas saul:</label>
            <input style="border: 1px solid #ced4da;!important" type="text" class="form-control" name="id_ventas" id="id_ventas">
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

