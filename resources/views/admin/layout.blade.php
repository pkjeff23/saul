<!doctype html>
<html lang="en">
  <head>
  	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/admin.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active" style="background: #3E6494">
				<h1><a href="admin" class="logo"><img src="{{ asset('img/logo-ctsaul.png') }}" height="30"></a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="">
            <a href="portadas"><span class="fa fa-home"></span>portadas</a>
          </li>
          <li>
              <a href="clients"><span class="fa fa-user"></span>Clientes y marcas</a>
          </li>
          <li>
            <a href="secciones"><span class="fa fa-sticky-note"></span>Secciones</a>
          </li>
          <li>
            <a href="productos"><span class="fa fa-sticky-note"></span>Productos</a>
          </li>
          <li>
            <a href="quienesomos1"><span class="fa fa-sticky-note"></span>Quienes somos</a>
          </li>
          <li>
            <a href="servicios1"><span class="fa fa-sticky-note"></span>Servicios</a>
          </li>
        </ul>

        <div class="footer">
            <a href="#"><span class="fa fa-paper-plane"></span>Cerrar sesion</a>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">


            @yield('content')
      </div>
		</div>
        
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="js/main.js"></script>
</body>
</html>