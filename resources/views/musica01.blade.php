<!DOCTYPE html>
<html>
<head>
	<title>J'AIME</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js" =""></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href = "https://fonts.googleapis.com/css2? family = Jost: ital, wght @ 0,500; 1,600 & display = swap" rel = "stylesheet"> <!-- lo cambiamos -->
	<link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet"> <!-- lo cambiamos -->
	<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
	<link rel="icon" type="\Imagenes\logonuevosinsombra.png" href="\Imagenes\logonuevosinsombra.png" />
</head>
<body>


	<!-----------------LOGO----------------------------->
	<div class="container">
		<div class="row">
			<div class="logo">
					<div class="col-sm-12">
						<a href="inicio"><img src="/Imagenes/logonuevosinsombra.png"></a>
					</div>
			</div>
		</div>
	</div>
	<!-----------------LOGO----------------------------->

	<!-----------------MENU----------------------------->
		<div class="container menu">
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<!-------------------INICIO SESION---------------------------->
			<a href="/login"><i class="fas fa-users carrito"></i></a>
  			<!-------------------INICIO SESION---------------------------->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../inicio">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cocina">Cocina</a>
          <a class="dropdown-item" href="/infantil">Infantil</a>
          <a class="dropdown-item" href="/frases">Frases</a>
          <a class="dropdown-item" href="/zen">Zen</a>
          <a class="dropdown-item" href="/musica">Música</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contacto">Contacto</a>
      </li>

    </ul>

      <i class="fas fa-shopping-cart carrito"></i>

  </div>
</nav>
<hr>
</div>

	<!-----------------MENU----------------------------->

		<!-----------------BANNER----------------------------->

        <div class="container">
		<div class="row">
			<div class="producto d-flex justify-content-around d-flex align-items-center">
					<div class="col-md-6 col-sm-12">
						<img src="/Imagenes/musica1.jpg" style="width:100%;">
					</div>
					<div class="col-md-6 col-sm-12">
						<h3 class="delproducto">Musica 01</h3>
						<br>
						<h4 class="delproducto1">SKU: 0030</h4>
						<br>
						<h3 class="delproducto">$830</h3>
						<br>
						<h4 class="delproducto1">Cantidad:</h4>
						<input type="number" class="formcantidad" name="cantidad" value="1">
						<br>
						<input type="button" class="boton" name="agregar al carrito" value="Agregar al carrito">
						<br>
						<h3 class="delproducto">Vinilos Decorativos</h3>
						<br>
						<h4 class="delproducto1">Vinilos para pared con diseño original ideal para decorar cualquier estancia de tu casa, ya sea un dormitorio infantil, tu habitación o un espacio común como el salón.</h4>
					</div>
			</div>
		</div>
	</div>



	<!-----------------FOOTER----------------------------->
	<section class="footer">
		<div class="container">
			<div class="row">

					<div class="col-sm-12">
						<h3>DESARROLLADO POR EQUIPO ROCKET</h3>
					</div>
			</div>
		</div>
	</section>

	<!-----------------FOOTER----------------------------->






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
