<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i" rel="stylesheet">
	<title>JMC Soluciones</title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="header">
			<!-- Todo el contenido debe de ir dentro de columnas -->
			<!-- Y las columnas deben de ir directamente dentro de las filas  -->

			<!-- Nuevo: 

			.col      Extra Pequeño (Extra small)   - Samartphones vertical   Menos de 544px
			.col-sm   Pequeño(Small)                - Smartphones Vertical    Mas de 544px y menos de 768px
			.col-md   Mediano (medium)              - Tablets                 Mas de 768px y menos de 992px
			.col-lg   Largo (Large)                 - Computadoras            Mas de 992px y menos de 1200px
			.col-xl   Extra Largo (Extra large)     - Computadoras            Mas de 1200px -->
			<div class="row">
				<div class="container-fluid header-bar">
				<nav class="navbar navbar-expand-lg navbar-light bg-warning menu-principal">
				  <a class="navbar-brand" href="#">
				  	<img src="http://localhost:8888/wp-content/uploads/2018/02/Logo6.png" width="285" height="auto" alt="">
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="buttonNavbar">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				     <li class="nav-item active">
						        <a class="nav-link itemnav" href="#">Inicio <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item ">
						        <a class="nav-link itemnav" href="#">Soluciones</a>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle itemnav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Hardware
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#">Componentes</a>
						          <a class="dropdown-item" href="#">Computadoras</a>
						          <a class="dropdown-item" href="#">Conectividad</a>
						          <a class="dropdown-item" href="#">Electrónica</a>
						          <a class="dropdown-item" href="#">Energía</a>
						          <a class="dropdown-item" href="#">Gaming</a>
						          <a class="dropdown-item" href="#">Impresion</a>
						          <a class="dropdown-item" href="#">Punto de Venta</a>
					          <div class="dropdown-divider"></div>
						          <a class="dropdown-item" href="#">Todas</a>
						        </div>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle itemnav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Software
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#">Sistemas Operativos</a>
						          <a class="dropdown-item" href="#">POS</a>
						          <a class="dropdown-item" href="#">Seguridad</a>
						          <a class="dropdown-item" href="#">Sistemas Contables</a>
						          <a class="dropdown-item" href="#">Productividad</a>
						          <a class="dropdown-item" href="#">Diseño</a>
						          <a class="dropdown-item" href="#">Juegos</a>
						          <div class="dropdown-divider"></div>
						          <a class="dropdown-item" href="#">Something else here</a>
						          <a class="nav-link dropdown-toggle itemnav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Refacciones
						        </a>
						        </div>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle itemnav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Refacciones
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#">Moviles</a>
						          <a class="dropdown-item" href="#">Servidores</a>
						          <a class="dropdown-item" href="#">Accesorios</a>
						          <a class="dropdown-item" href="#">Copiadoras</a>
						          <a class="dropdown-item" href="#">PC de Escritorio</a>
						          <a class="dropdown-item" href="#">Portatiles</a>
						          <a class="dropdown-item" href="#">Impresoras</a>
						          <a class="dropdown-item" href="#">Proyectores</a>

					          <div class="dropdown-divider"></div>
						          <a class="dropdown-item" href="#">Todas</a>
						        </div>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link itemnav" href="#">Empresa</a>
						      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
				      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
				    </form>
				  </div>
				</nav>
					
			</div>
			</div>
			
	</header>
	
