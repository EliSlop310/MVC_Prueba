<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-AU-Compatible" content="ie=edge">
	<title>Salud del Buen Comer</title>
	<link rel="stylesheet" type="text/css" href="public/css/acordeon.css">
	<link rel="stylesheet" type="text/css" href="public/css/default.css">
	<link rel="stylesheet" type="text/css" href="public/css/menu.css">
	<script type="text/javascript" src="public/js/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/acordeon.js"></script>

</head>
<script src="public/js/validaciones.js"></script>

<body>
	<div id="header1">
		<div id="logo1"><img src="public/img/logo.png" alt="[Imagen] Logo"></div>
		<form action="models/accesoCuenta.php" method="POST">
			<input type="text" placeholder="&#128373; Usuario" name="usuario" style="float: right"> &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="password" placeholder="&#x1f513; Password" name="pass" style="float: right"> &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="Iniciar Sesion" name="btnIngresar" style="float: right"> &nbsp;&nbsp;&nbsp;&nbsp;

		</form>
	</div>
	<section id="banner">
		<img src="public/img/platoreal.jpg" alt="[Imagen] Plato de Comida">

		<div class="conban">
			<h1> Bienvenido a Salud del buen Comer</h1>
		</div>
	</section>

	<!--div id="banner">
	<img src="public/img/fondo.jpg" alt="[Imagen] Plato de Comida"-->

	<section>
		<div id="pos1">
			<div class="demo-acordeon">
				<h2>8 Datos oficiales de la OMS</h2>
				<h3>Dato 1</h3>
				<div>
					La malnuticion aumenta la morvidad y las muertes prematuras de madres y niños.
				</div>
				<h3>Dato 2</h3>
				<div>
					Un indicador clave de la malnutricion cronica es el retraso del crecimiento.
				</div>
				<h3>Dato 3</h3>
				<div>
					Cada año fallecen alrededor de 1.5 millones de niños por emanciacion.
				</div>
				<h3>Dato 4</h3>
				<div>
					La carencia de vitaminas y minerales sigue siendo prevalente en todo el mundo.
				</div>
				<h3>Dato 5</h3>
				<div>
					La desnutricion durante el embarazo puede tener consecuencias graves.
				</div>
				<h3>Dato 6</h3>
				<div>
					El aumento de las tasas de lactancia materna podria prevenir 823000 muertes de niños menores de cinco años.
				</div>
				<h3>Dato 7</h3>
				<div>
					La nutricion es escencial para evitar la anemia en la adolecencia.
				</div>
				<h3>Dato 8</h3>
				<div>
					Unos 41 millones de niños menores de 5 años tienen sobrepeso.
				</div>
			</div>
		</div>
		<br>
		<br>
		<div id="pos2">
			<div id="menu">
				<form action="models/registro.php" method="POST">
					<h1>Registrate aqui</h1>
					<div><input type="text" placeholder="&#128372; Usuario" name="usuario"></div> <br><br>
					<div><input type="text" placeholder="&#x1f4ec; Correo" name="correo"></div> <br><br>
					<div><input type="password" placeholder="&#128275; Password" name="pass"></div> <br><br>
					<div><input type="submit" value="Registrarse" name="btnRegistrar"></div>
				</form>
			</div>
		</div>

	</section>

	<div id="logo2"> <img src="public/img/logo.png" alt="[Imagen] Logo">
		<br>
	</div>
	<br>
	<br>
	<?php require 'views/footer.php'; ?>
</body>

</html>
