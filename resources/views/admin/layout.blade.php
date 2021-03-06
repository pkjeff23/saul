<!doctype html>
<html lang="en">
  <head>
  	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/ico" href="{{asset('favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
	  				<h3>Admin</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="">
            <a href="category"><span class="fa fa-align-justify"></span> Categorias</a>
          </li>
          <li class="">
            <a href="subcategory"><span class="fa fa-align-justify"></span> Subcategorias</a>
          </li>
          <li>
            <a href="portadas"><span class="fa fa-address-book"></span> Portadas</a>
          </li>
          <li>
            <a href="clients"><span class="fa fa-user"></span> Clientes</a>
          </li>
          <li>
            <a href="brands"><span class="fa fa-copyright"></span> Marcas</a>
          </li>
          <li>
            <a href="secciones"><span class="fa fa-bars"></span> Secciones</a>
          </li>
          <li>
            <a href="productos"><span class="fa fa-product-hunt"></span> Productos</a>
          </li>
          <li>
            <a href="aboutus"><span class="fa fa-users"></span> Quienes somos</a>
          </li>
          <li>
            <a href="servicios1"><span class="fa fa-cogs"></span> Servicios</a>
          </li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><span class="fa fa-power-off"></span> Cerrar sesion</a>
             

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
          @yield('content')
        </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    

    <script type="text/javascript">
      $(document).ready(function() {
        $('#myTable').DataTable(
          {
            language: {
                  "decimal": "",
                  "emptyTable": "No hay información",
                  "info": "",
                  "infoEmpty": "",
                  "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                  "infoPostFix": "",
                  "thousands": ",",
                  "lengthMenu": "Mostrar _MENU_ Entradas",
                  "loadingRecords": "Cargando...",
                  "processing": "Procesando...",
                  "search": "Buscar:",
                  "zeroRecords": "Sin resultados encontrados",
                  "paginate": {
                      "first": "Primero",
                      "last": "Ultimo",
                      "next": "Siguiente",
                      "previous": "Anterior"
                  }
              },
          }

        );

      } );
        function submitform(id)
        {
          document.getElementById(id).submit();
        }
    </script>
  </body>
</html>