
{{-- EXTEND --}}
    @extends('admin.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<h2>Clientes corporativos y marcas</h2>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i> Crear</button>
<table style="margin-top: 50px;" id="myTable" class="table">
    <thead>
      <tr>
        <th scope="col">Socio</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha creacion</th>
        <th scope="col">Fecha edicion</th>
        <th scope="col">Usuario</th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
      <tr>
        <th scope="row"><img src="{{ asset('img/'.$client->imagen) }}" width="100" alt="Robot 1"/></th>
        <td>{{ $client->name }}</td>
        <td>07/11/2020</td>
        <td>07/11/2020</td>
        <td>Admin</td>
        <td>{{ $client->state }}</td>
        <td><button class="btn btn-success btn-sm" type="button"  data-toggle="modal" data-target="#myModal{{ $client->id }}" id="open"> <i class="fa fa-pencil"></i></button></td>
        <form method="post" action="{{ route('clients.update', ['client' => $client]) }}" id="form1" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal{{ $client->id }}">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="alert alert-danger" style="display:none"></div>
        <div class="modal-header">
          
          <h5 class="modal-title">Actualizar clientes corporativos y marcas</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group offset-2 col-md-10">
              <img src="{{ asset('img/'.$client->imagen) }}" width="80%" alt="Robot 1"/>
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
                  <label for="name">Nombre:</label>
                  <input type="text" class="form-control" name="name" id="name" value={{ $client->name }}>
                </div>
            </div>
            <div class="row">
               <div class="form-group col-md-8">
                  <label for="state">Estado:</label>
                  <select class="form-control" name="state" id="state">
                    <option {{ ( $client->state == 1) ? 'selected' : '' }} value=1>activo</option>
                    <option {{ ( $client->state == 0) ? 'selected' : '' }} value=0>inactivo</option>
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
        <td><button class="btn btn-danger btn-sm" type="button"  data-toggle="modal" data-target="#myModal1{{ $client->id }}" id="open"><i class="fa fa-trash"></i></button></td>
        <form method="post" action="{{ route('clients.destroy', ['client' => $client]) }}" id="form1" enctype="multipart/form-data">
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
          <h3 class="text-center">¿Esta seguro de eliminar este cliente coporativo?</h3>
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
  {{ $clients->links() }}
  <form method="post" action="clients" id="form" enctype="multipart/form-data">
    @csrf
<!-- Modal -->
<div class="modal" tabindex="-1" role="dialog" id="myModal">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="alert alert-danger" style="display:none"></div>
  <div class="modal-header">
    
    <h5 class="modal-title">Crear clientes corporativos y marcas</h5>
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
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name" id="name">
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

