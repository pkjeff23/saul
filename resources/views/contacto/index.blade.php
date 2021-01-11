
{{-- EXTEND --}}
@extends('layout')

{{-- VARS --}}


{{-- BUTTONS --}}
@section('content')
<hr>
    <div class="row" style="margin-top: 40px;margin-right: 0px;margin-left: 0px;">
      <div class="col-12 col-lg-8">
        <div class="row" style="margin-top:20px">
          <div name="whatsapp-info" class="col-12 col-lg-4"><div class="whatsapp-info"><div class="row"><div class="col"><div class="title-frm"><h2 class="title pages-h2">
            ¿Necesita ayuda? ¡Contactenos! <i class="icon fas fa-smile"></i>
          </h2>
        </div>
      </div>
    </div> 
    <div class="row">
      <div class="col">
        <div class="content-frm">
          <div class="content-row">
            <div class="icon-frm"><i class="icon far fa-clock"></i></div> 
            <div class="text-frm"><p class="description">Atención en días laborales de lunes a viernes de:</p> 
              <p class="text add-schedule">08:00 a 18:00</p></div></div> 
              <div class="content-row"><div class="icon-frm"><i class="icon fab fa-whatsapp"></i></div> 
              <div class="text-frm"><p class="description">Para servicio al cliente llame al:</p> 
                <p class="text">(5) 423 3526</p></div> </div> </div></div></div></div></div>
            <div class="col-12 col-lg-8" style="border-left:1px solid #eee">
              <div class="input-group">
                <input type="text" class="input-change" placeholder="Nombre" >
              </div>
              <div class="input-group">
                <input type="text" class="input-change" placeholder="Email" >
              </div>
              <div class="input-group">
                <input type="text" class="input-change" placeholder="Asunto" >
              </div>
              <div class="input-group">
                <textarea placeholder="Mensaje" class="input-change textarea-change" name="" id="" cols="30" rows="10" ></textarea>
              </div>
              <button type="submit" class="btn btn-success">Enviar</button>
            </div>
          </div>
      </div>
        <div class="col-12 col-lg-4" style="border-left:1px solid #eee">
            <img class="img-responsive" src="{{ asset('img/mascota-contacto.png' ) }}" alt="mascota contacto">
        </div>
        <div class="col-12" style="margin-top: 40px">
          <iframe width="100%" height="200" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Cl.%2013%20%235-37%2C%20Santa%20Marta%2C%20Magdalena&key=AIzaSyCEgE7EdOVuLYgoxAqpCRMWMY78DxetrtI" allowfullscreen></iframe>        
        </div>
    </div>
    <hr>
@endsection

