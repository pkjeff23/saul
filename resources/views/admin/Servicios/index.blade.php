
{{-- EXTEND --}}
@extends('admin.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<h2>Servicios</h2>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="open"><i class="fa fa-plus"></i> Crear</button>
    <div class="row" style="margin-bottom: 40px;margin-top: 40px">
        <div class="col-4">
            <img src="{{ asset('img/2.jpg') }}" alt="..." style="width:100%;height:100px">
            <strong>Titulo seccion:</strong> Compras por categoria <br>
            <strong>Tipo:</strong> Recuadro <br>
            <strong>Fecha de creacion:</strong> 07/11/2020 <br>
            <strong>Estado:</strong> inactivo <br>
            <button class="btn btn-success btn-sm"> <i class="fa fa-eye"></i></button>
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
        </div>
        <div class="col-4">
            <img src="{{ asset('img/1.jpg') }}" alt="..." style="width:100%;height:100px">
            <strong>Titulo seccion:</strong> Compras por categoria <br>
            <strong>Tipo:</strong> carousell <br>
            <strong>Fecha de creacion:</strong> 07/11/2020 <br>
            <strong>Estado:</strong> inactivo <br>
            <button class="btn btn-success btn-sm"> <i class="fa fa-eye"></i></button>
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
        </div>
    </div>
    <form method="post" action="{{url('chempionleague')}}" id="form">
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
                  <option>activo</option>
                  <option>inactivo</option>
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

