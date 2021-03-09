<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-AU-Compatible" content="ie=edge">
    <title>Salud del Buen Comer</title>
	<link rel="stylesheet" type="text/css" href="public/css/acordeon.css">
	<link rel="stylesheet" type="text/css" href="public/css/default.css">
	<script type="text/javascript" src="public/js/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/acordeon.js"></script>


  </head>
  <script src = "public/js/validaciones.js"></script>
 <body>


   <?php require 'views/header.php';?>

    <div id="main">
        <h1 class="center"> Bienvenido a Salud del buen Comer</h1>
    </div>
    <br>
<p>
<img id="pic" src="public/img/fondo.jpg" width="1px" height="-100px" alt="[Imagen] Comida">
</p>

    <center>

    <title> Calcula Tu Indice De Masa Muscualar </title>

    <?php

    $peso = "";
    $altura = "";
    if($_POST){
      $peso = $_POST
      ['Peso'];
      $altura = $_POST
      ['Altura'];
    }

    ?>

    <H2>Calcula Tu Indice De Masa Corporal</H2>
    <form action="index.php" method="POST">
    <table>
      <tr>
        <td><input   type="text" name="Peso" placeholder = "teclea tu peso(kg)" value = "<?php echo $peso; ?>" onkeypress="return solonumeros(event)" ></td>
        <td><input  type="text" name="Altura" placeholder = "teclea tu altura(M)" value = "<?php echo $altura; ?>" onkeypress="return solonumeros(event)"></td>
        </tr>
        <tr>
          <td> <input type="submit" value="Calcular" > </td>
          </tr>
        </table>
      </form>

      <?php

    if($_POST){
      $Calcular = $peso/ ($altura^2);
    echo nl2br ("Tu Indice De Masa Corporal Es:".$Calcular."\n");
    $mtocm = $altura* 100;
    $pesoactual = $mtocm - $peso;
    $ideal = $peso - $pesoactual ;
    $debajo = $pesoactual- 100;
    if ($pesoactual == 100){
      echo nl2br ("Estas En Tu Peso Correcto\n");
    }else {
      if($peso > $pesoactual){
            echo nl2br ("Estas Pasado Por:".$ideal."kg\n");
      }else {
          echo nl2br ("Estas Debajo de Tu Peso Por:".$debajo."kg\n");
      }

    }

}

        ?>

  </center>
  <br><br>
  <center>
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
	<br>
	<br>
	<div>Cuida tu vida, cuidando lo que comes :3</div>
	
	


	</center>
   <?php require 'views/footer.php';?>
 </body>
</html>
