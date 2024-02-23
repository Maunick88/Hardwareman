<!DOCTYPE html>
<html>
<head>	
	<title>Codeman</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	<style>
		.mi_section {
		    position: relative; /* Para que el posicionamiento absoluto del botón sea relativo a esta sección */
		    height: 450px; /* Ajusta la altura según tus necesidades */
		    background-size: cover;
		    background-position: center;
		    background-repeat: no-repeat;
		}
		#banner1{
			background-image: url('../img/purple.jpg');
			border-radius: 45px
		}
		#banner2{
			padding: 2%;
			background-image: url('../img/main.jpg');
			border-radius: 45px
		}

		.boton {
		    position: absolute; /* Posicionamiento absoluto */
		    top: 50%; /* Centra verticalmente */
		    left: 50%; /* Centra horizontalmente */
		    transform: translate(-50%, -50%); /* Centra completamente */
		    padding: 10px 20px; /* Ajusta el tamaño del botón según tus necesidades */
		    background-color: #2EE1F0; /* Color de fondo del botón */
		    color: #000000; /* Color del texto del botón */
		    border: none; /* Elimina el borde */
		    border-radius: 15px; /* Añade bordes redondeados */
		    cursor: pointer; /* Cambia el cursor al pasar por encima */
		}

		h4{
			font-family: Monospace	, Courier New;	
			text-align: center;
			color:#2EE1F0;
		}
		p{
			font-family: Monospace	, Courier New;	
			text-align: center;
		}
		#card1{
			background-color: #168FBD;
		}
		#card1{
			background-color: #162FBD;
		}
		#text1{
			margin-top: 150px;
		}
		#boton1{
			margin-top: 70px; /* Centra verticalmente */
			margin-left: 90px; /* Centra horizontalmente */
			transform: translate(-50%, -50%); /* Centra completamente */
			padding: 10px 20px; /* Ajusta el tamaño del botón según tus necesidades */
			background-color: #2EE1F0; /* Color de fondo del botón */
			color: #000000; /* Color del texto del botón */
			border: none; /* Elimina el borde */
			border-radius: 15px; /* Añade bordes redondeados */
			cursor: pointer; 
		}
		#img1{
			margin-top: 100px;
			border-radius: 45px

		}
		body{
			background-color: #000;
			margin: 0;
		}
		header {
		  background-color: #333; /* Color de fondo de la barra de navegación */
		  display: flex;
		  align-items: center;
		  justify-content: space-between;
		  padding: 20px;
		  border-bottom: 15px solid white; /* Línea blanca debajo de la barra de navegación */
		}
		.logo img {
		  max-height: 50px; /* Ajusta la altura de tu logo según sea necesario */
		}

		nav ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		}

		nav ul li {
		  display: inline;
		}

		nav ul li a {
		  color: white; /* Color del texto del enlace */
		  text-decoration: none;
		  padding: 10px 20px; /* Espacio alrededor del texto del enlace */
		  transition: background-color 0.3s ease; /* Transición suave al cambiar el color de fondo */
		}

		nav ul li a:hover {
		  background-color: #555; /* Color de fondo cuando el enlace está en hover */
		}

	</style>
</head>
<header>
    <div class="logo">
      <img src="../img/logo.png" alt="Logo">
    </div>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>
</header>
<body>
	<div class="container">
		<section class="mi_section" id="banner2">
			<button class="boton">Mi Botón</button>
		</section>
		<section>
			<div class="row">
				<div class="col-sm-6">
					<h4 id="text1">Expertos en arquitectar, desarrollar e implementar soluciones de software</h>					
					<button id="boton1">Mi Botón</button>
				</div>
				<div class="col-sm-3">
					<img id="img1" class="img-thumbnail" src="../img/hardware.jpg">
				</div>
				<div class="col-sm-3">
					<img id="img1" class="img-thumbnail" src="../img/setup.jpg">
				</div>
			</div>
		</section>
		<section class="mi_section" id="banner1">
		    <button class="boton">Mi Botón</button>
		</section>
	</div>
</body>
</html>