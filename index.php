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
			background-image: url('../comercio/img/purple.jpg');
		}
		#banner2{
			background-image: url('../comercio/img/main.jpg');
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
		    border-radius: 5px; /* Añade bordes redondeados */
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
	</style>
</head>
<header>
	<nav class="navbar bg-body-tertiary fixed-top">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"><img src="../comercio/img/logoblanco.png"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
	      <div class="offcanvas-header">
	        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Codeman</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	      </div>
	      <div class="offcanvas-body">
	        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Quienes somos?</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Contacto</a>
	          </li>   
	        </ul>
	      </div>
	    </div>
	  </div>
	</nav>
</header>
<body>
<div class="container">
	<h4>Expertos en arquitectar, desarrollar e implementar soluciones de software</h4>
<section class="mi_section" id="banner2">
	<p></p>
	<button class="boton">Mi Botón</button>

</section>
<br>
<section>
	<article id="card1">
		<h4>Confía en nosotros para llevar tus ideas al siguiente nivel tecnológico y potenciar
		el crecimiento de tu negocio.
	</h4>
	</article>
</section>
<br>
<section>
	<div class="row">
		<div class="col-sm-6" id="card1">
			<h4>
				Enfoque de negocios
			</h4>
			<p>
				Nos enfocamos en incrementar las ventas, nuestra automatización está diseñada para agilizar la operación y poder reducir costos.
			</p>
			<img class="img-thumbnail" src="../comercio/img/crecim.jpg">
		</div>
		<div class="col-sm-6" id="card1">
			<h4>
				Un aliado estrategico
			</h4>
			<p>
				Te acompañamos en cada paso del proceso, desde diseñar una solución tecnológica hasta su implementación.
			</p>
			<img class="img-thumbnail" src="../comercio/img/contact.webp">
		</div>
	</div>
</section>
<br>
<section class="mi_section" id="banner1">
    <button class="boton">Mi Botón</button>
</section>
</div>
</body>
</html>