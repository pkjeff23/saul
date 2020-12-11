<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSS -->
    
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/instantsearch.css@7/themes/algolia-min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4/dist/algoliasearch-lite.umd.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
	<title>Prueba</title>
</head>

<body>
  <div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
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
        <div id="content" class="p-4 p-md-5">
                @yield('content')
        </div>
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
		$("#zoom").ezPlus();
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
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.8.2/dist/algoliasearch.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4.8.7/dist/instantsearch.production.min.js"></script>
</body>
</html>