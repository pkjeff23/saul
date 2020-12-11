<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSS -->
    
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<title>Saul</title>
</head>

<body>
  <div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
          <ul>
            <img class="logo-main scale-with-grid" src="https://ctsaul.com/contenido/wp-content/uploads/2017/06/logo-ctsaul.png" alt="logo ctsaul">
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:servicioalcliente@ventasctsaul.com">servicioalcliente@ventasctsaul.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> 423 3526</li>
						<li>
              <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-search"></i>
                <input id="inputsearch" type="text" class="form-control" placeholder="Buscar producto" />
              </div>
            </li>
          </ul>
				</div>
				<div class="header-grid-right animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<ul class="social-icons">
						<li><a href="https://www.facebook.com/Centro-de-Tecnolog%C3%ADa-Saul-Tu-punto-de-la-Tecnolog%C3%ADa-532296690259418/?ref=aymt_homepage_panel" class="facebook"></a></li>
						<li><a href="https://www.instagram.com/ctecnologiasaul/" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
  </div>
  <div class="topnav" id="myTopnav">
    <a href="#home" onclick="window.location='/public'">Inicio</a>
    <a href="#news" >Ir a ventas</a>
    <a href="#contact"  onclick="window.location='{{ route('catalogo.index') }}'">Ver catalogo</a>
    <a href="#contact" onclick="window.location='{{ route('quienesomos.index') }}'">Quienes somos</a>
    <a href="#contact" onclick="window.location='{{ route('servicios.index') }}'">Servicio</a>
    <a href="#contact" onclick="window.location='{{ route('contacto.index') }}'">Contactenos</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  
    <div class="container--head">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-tooltip">
          <div class="caraousel-tooltip-item active" data-index="0">
            
          </div>
          <div class="caraousel-tooltip-item" data-index="1">
            <a href="#" class="tooltip-carousel" style="top:120px;left: 300px;padding:5px 10px;background:#000;color:#fff;display:inline-block" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
              <span class="fa fa-plus"></span>
            </a>
          </div>
          <div class="caraousel-tooltip-item" data-index="2">
            <a href="#" class="tooltip-carousel" style="top:100px;left: 500px;padding:5px 10px;background:#000;color:#fff;display:inline-block" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
              <span class="fa fa-plus"></span>
            </a>
          </div>
          <div class="caraousel-tooltip-item" data-index="3">
            <a href="#" class="tooltip-carousel" style="top:20px;left: 300px;padding:5px 10px;background:#000;color:#fff;display:inline-block" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
              <span class="fa fa-plus"></span>
            </a>
          </div>
          <div class="caraousel-tooltip-item" data-index="4">
            <a href="#" class="tooltip-carousel" style="top:180px;left: 200px;padding:5px 10px;background:#000;color:#fff;display:inline-block" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
              <span class="fa fa-plus"></span>
            </a>
          </div>
        </div>
    
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($portadas as $portada)
          <div class="thumbnail item {{ ( $portada->id == 1) ? 'active' : '' }}">
            <img class="img-responsive" src="{{ asset('img/'. $portada->imagen) }}" alt="..." style="width:100%;height:380px">
            <div class="carousel-caption">
            </div>
          </div>
          @endforeach
        </div>
    
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    
    <div class="wrap mcb-wrap one col-centrar column-margin-0px valign-top clearfix" style="background-color:#00b600"><div class="mcb-wrap-inner"><div class="column mcb-column one-sixth column_hover_box "><div class="hover_box"><a href="https://ventasctsaul.com/" target="_blank"><div class="hover_box_wrapper"></div></a></div>
</div><div class="column mcb-column two-third column_hover_box "><div class="hover_box"><a href="https://ventasctsaul.com/" target="_blank"><div class="hover_box_wrapper"><img style="width: 100%;height: 100px;"class="visible_photo scale-with-grid" src="{{ asset('img/Compra.png') }}" alt="Compra" width="" height=""></div></a></div>
</div><div class="column mcb-column one-sixth column_hover_box "><div class="hover_box"><a href="https://ventasctsaul.com/" target="_blank"><div class="hover_box_wrapper"></div></a></div>
</div></div></div>
<div class="container">
  
</div>
<section class="new-collections col-12">
  <h3 style="color: #003c94;margin-bottom: 40px" class="animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">CATEGORIAS</h3>
  
  <div class="row" style="margin-bottom: 20px;margin-top: 40px;margin-right: 0px;margin-left: 0px;">
    <div class="col-3 img">
        <img class="img-circle" src="{{ asset('img/tintas.jpg') }}" alt="..." style="width:100%;height:200px">
        <h2 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
          <a href="https://ventasctsaul.com/Productos/Ver/233">Tintas </a>
        </h2>
    </div>
    <div class="col-3 img">
        <img class="img-circle" src="{{ asset('img/accesorios.png') }}" alt="..." style="width:100%;height:200px">
        <h2 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
          <a href="https://ventasctsaul.com/Productos/Ver/233">Accesorios </a>
        </h2>
    </div>
    <div class="col-3 img">
        <img class="img-circle" src="{{ asset('img/accesoriospara.jpg') }}" alt="..." style="width:100%;height:200px">
        <h2 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
          <a href="https://ventasctsaul.com/Productos/Ver/233">Accesorios para portatil</a>
        </h2>
    </div>
    <div class="col-3 img">
      <img class="img-circle" src="{{ asset('img/accesoriosrack.jpg') }}" alt="..." style="width:100%;height:200px">
      <h2 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
        <a href="https://ventasctsaul.com/Productos/Ver/233">Accesorios para rack</a>
      </h2>
    </div>
    <div class="col-3 img">
        <img class="img-circle" src="{{ asset('img/adaptador.jpg') }}" alt="..." style="width:100%;height:200px">
        <h2 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
          <a href="https://ventasctsaul.com/Productos/Ver/233">Adaptadores de corriente </a>
        </h2>
    </div>
    <div class="col-3 img">
        <img class="img-circle" src="{{ asset('img/adaptadorvi.jpg') }}" alt="..." style="width:100%;height:200px">
        <h2 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
          <a href="https://ventasctsaul.com/Productos/Ver/233">Adaptadores de video </a>
        </h2>
    </div>
    <div class="col-3 img">
      <img class="img-circle" src="{{ asset('img/tintas.jpg') }}" alt="..." style="width:100%;height:200px">
      <h2 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
        <a href="https://ventasctsaul.com/Productos/Ver/233">Tintas </a>
      </h2>
  </div>
  <div class="col-3 img">
      <img class="img-circle" src="{{ asset('img/accesorios.png') }}" alt="..." style="width:100%;height:200px">
      <h2 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
        <a href="https://ventasctsaul.com/Productos/Ver/233">Accesorios </a>
      </h2>
  </div>
</div>
</section>

<section class="new-collections col-12">
  <h3 style="color: #003c94;margin-bottom: 20px" class="animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Productos destacados</h3>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="carrusel-robots bx-viewport"  style="max-width: 1255px; margin: 0px auto;">    
      @foreach ($productsDes as $productDes)
      <div class="thumbnail" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 20px;">
      <a href="https://ventasctsaul.com/Productos/Ver/233" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lector de huella digital "><img class="img-responsive" src="{{ asset('img/'.$productDes->imagen) }}" alt="{{$productDes->title}}"></a>
           <div class="caption">
              <h6 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
                  <a href="https://ventasctsaul.com/Productos/Ver/233">{{ $productDes->title}} </a>
              </h6>
            </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
   </section>
   

<section class="new-collections col-12">
  <h3 style="color: #003c94;margin-bottom: 20px" class="animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Productos nuevos</h3>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    
    <div class="carrusel-robots bx-viewport"  style="max-width: 1255px; margin: 0px auto;">
      @foreach ($productsNew as $productNew)
      <div class="thumbnail" style="float: left; list-style: none; position: relative; width: 155px; margin-right: 20px;">
        <a href="https://ventasctsaul.com/Productos/Ver/233" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lector de huella digital "><img class="img-responsive" src="{{ asset('img/'.$productNew->imagen) }}" alt="{{$productNew->title}}"></a>
             <div class="caption">
                <h6 class="text-center" style="text-overflow:ellipsis; overflow:hidden; white-space: nowrap;font-size: 26px;">
                    <a href="https://ventasctsaul.com/Productos/Ver/233">{{ $productNew->title}} </a>
                </h6>
              </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
 </section>
 <section style="margin-top: 30px">
  <div class="row" style="margin-right: 0px;margin-left: 0px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="col-lg-7 col-12">
      <p class="text-center" style="font-size:50px !important; color:#003c94; font-family:'Billabong' !important; text-transform: capitalize  !important; padding: 20px 10px; ">
        instagram
      </p>
    </div>
    <div class="col-lg-4 col-12">
      <p style="font-size:50px !important; color:#003c94; font-family:'Facebook' !important; text-transform: lowercase !important; padding: 20px 10px;">
        Facebook
      </p>
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCT-Saul-532296690259418%2F&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>
  </div>
</div>
 </section>
 <section class="new-collections col-12" >
  <h3 style="color: #003c94;margin-bottom: 40px" class="animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Clientes corporativos</h3>
  <div class="carrusel-robots1" style="width: 100%; overflow: hidden; position: relative; height: 155px;">
    @foreach ($clients as $client)
      <div style="float: left; list-style: none; position: relative; width: 200px; margin-right: 50px;"><img class="img-responsive" src="{{ asset('img/'.$client->imagen) }}"  alt="Robot 1"/></div>
    @endforeach
  </div>  
 </section>
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="footer-grids">
          <div class="col-md-4 footer-grid animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <h3>Información</h3>
            <ul>
              <li><a style="color: white;" href="#contact" onclick="window.location='{{ route('quienesomos.index') }}'">Quienes somos</a></li>
              <li><a style="color: white;" href="#contact" onclick="window.location='{{ route('servicios.index') }}'">Servicio</a></li>
              <li><a style="color: white;" href="#contact" onclick="window.location='{{ route('contacto.index') }}'">Contactenos</a></li>
            </ul>
          

            <p></span></p>
          </div>
          <div class="col-md-4 footer-grid animated wow slideInLeft animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInLeft;">
            <h3>Contáctanos</h3>
            <ul>
              <li style="color: white;"><i style="color: white;" class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Calle 13 No 5-37 al lado del <span> antiguo telecom - centro historico</span>
                <span>santa marta, magdalena</span></li>
              <li style="color: white;"><i style="color: white;" class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a style="color: white;" href="mailto:servicioalcliente@ventasctsaul.com">servicioalcliente@ventasctsaul.com</a></li>
              <li style="color: white;"><i style="color: white;" class="glyphicon glyphicon-earphone" aria-hidden="true"></i> 423 3526</li>
            </ul>
          </div>
          <div class="col-md-4 footer-grid animated wow slideInLeft animated" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: slideInLeft;">
          </div>
          <div class="col-md-4 footer-grid animated wow slideInLeft animated" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: slideInLeft;">
            <h3>Síguenos en</h3>
            <div class="footer-grid-sub-grids">
              <a href="https://www.facebook.com/Centro-de-Tecnolog%C3%ADa-Saul-Tu-punto-de-la-Tecnolog%C3%ADa-532296690259418/?ref=aymt_homepage_panel">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-square-o fa-stack-2x" style="color: white;"></i>
                  <i class="fa fa-facebook fa-stack-1x" style="color: white;"></i>
                </span>
              </a>
              <a href="https://www.instagram.com/ctecnologiasaul/">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-square-o fa-stack-2x" style="color: white;"></i>
                  <i class="fa fa-instagram fa-stack-1x" style="color: white;"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="footer-logo animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
          <h2><a style="color: white;" href="index.html">Saul <span style="color: white;">centro d' tecnologia</span></a></h2>
        </div>
        <div style="color: white;" class="copy-right animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
          <p></p>
        </div>
      </div>
    </div>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.carrusel-robots').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      dots: true,
      infinite: true,
      speed: 500,
      autoplay: true,
    });
    $('.carrusel-robots1').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      dots: true,
      infinite: true,
      speed: 500,
      autoplay: true,
    });
  });
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
    $( "#inputsearch" ).change(function() {
      let a = $("#inputsearch" ).val();
      window.location = "http://localhost/public/catalogo?q="+ a;
    });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Fontawesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="{{ asset('js/global.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/classie.js') }}"></script>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick-theme.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick.css" rel="stylesheet"/>
</body>
</html>