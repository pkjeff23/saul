
{{-- EXTEND --}}
@extends('catalogo.layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
    <div class="row">
        <div class="col-6">
            <img class="scale-with-grid" src="{{ asset('img/mascota-contacto.png' ) }}" alt="mascota contacto">
        </div>
        <div class="col-6">
            <iframe width="630" height="200" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Cl.%2013%20%235-37%2C%20Santa%20Marta%2C%20Magdalena&key=AIzaSyCEgE7EdOVuLYgoxAqpCRMWMY78DxetrtI" allowfullscreen></iframe>
          <div class="row" style="margin-top:20px">
              <div class="col-6">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Nombre">
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Asunto">
                    </div>
                    <div class="input-group">
                        <textarea placeholder="Mensaje" class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                  <button type="submit" class="btn btn-success">Enviar</button>
              </div>
              <div class="col-md-6 footer-grid animated wow slideInLeft animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInLeft;">
              
                <ul>
                    <li style="color: #003c94;"><i style="background-color: #003c94;color: white;"class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Calle 13 No 5-37 
                      santa marta, magdalena</li>
                    <li><i style="background-color: #003c94;color: white;" class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a style="color: #003c94;" href="mailto:servicioalcliente@ventasctsaul.com">servicioalcliente@ventasctsaul.com</a></li>
                    <li style="color: #003c94;"><i style="background-color: #003c94;color: white;" class="glyphicon glyphicon-earphone" aria-hidden="true"></i> 423 3526</li>
                  </ul>
                </div>
          </div>
        </div>
    </div>
@endsection

