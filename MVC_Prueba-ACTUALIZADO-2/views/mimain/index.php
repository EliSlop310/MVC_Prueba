<?php
require 'views/header1.php' ;
require 'views/menulateral.php';

session_start();
$errores = '';
$usuario = $_SESSION['usuario'];

try {
  $conexion = new PDO('mysql:host=localhost; dbname=salud_alimenticia', 'root', '');
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

$statement = $conexion->prepare('SELECT Folio FROM sesión WHERE usuario = :usuario');
$statement->execute(array(':usuario' => $usuario));
$resultado = $statement->fetch();

$folio = $resultado["Folio"];

// $varsesion = $_SESSION['usuario'];
// error_reporting(0);
// if($varsesion == null || $varsesion = ''){
// 	echo 'Sin autorizacion de acceso.';
// 	die();
// }*/
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-AU-Compatible" content="ie=edge">
  <title>Salud del Buen Comer</title>
  <link rel="stylesheet" type="text/css" href="public/css/menu.css">
  <link rel="stylesheet" type="text/css" href="public/css/default.css">
  <script type="text/javascript" src="public/js/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/9fec9d4dbe.js" crossorigin="anonymous"></script>


</head>
<script src="public/js/validaciones.js"></script>

<body>


  <div id="main">

  </div>
  <br>
  <p>
  </p>

  <center>

    <title> Calcula Tu Indice De Masa Muscualar </title>

    <?php

    $peso = "";
    $altura = "";
    if ($_POST) {
      $peso = $_POST['Peso'];
      $altura = $_POST['Altura'];
    }

    ?>
    <div id="header1">
      <H2>Calcula Tu Indice De Masa Corporal</H2>
      <form action="" method="POST">
        <table>
          <tr>
            <td><input type="text" name="Peso" placeholder="teclea tu peso(kg)" value="<?php echo $peso; ?>" onkeypress="return filterFloat(event,this);"></td>
            <td><input type="text" name="Altura" placeholder="teclea tu altura(M)" value="<?php echo $altura; ?>" onkeypress="return filterFloat(event,this);"></td>
          </tr>
          <tr>
            <td> <input type="submit" value="Calcular"> </td>
          </tr>
        </table>
      </form>
    </div>
    <br>
    <?php

    if ($_POST) {
      $Calcular = $peso / ($altura * $altura);
      echo "Tu Indice De Masa Corporal Es:" . $Calcular . "\n";
      $mtocm = $altura * 100;
      $real = $mtocm - 100;
      //echo "esto es:". $real;
      $sobrepeso = $peso - $real;
      //echo "esto es: ".$sobrepeso;
      $esp = '';
      if ($sobrepeso == 0) {

        echo "Estas En Tu Peso Correcto" .'<br>';
        $esp = "Peso correcto";
      } else {

        if ($peso > $real) {

          echo '<br>'."Estas Pasado Por:" . $sobrepeso . "kg".'<br>';

          if ($Calcular > 25 && $Calcular < 29) {
            echo "Tienes Sobrepeso".'<br>';
            echo "IMPORTANTE RECUERDA QUE TENER SOBREPESO PUDE ACARREAR MUCHAS ENFERMEDADES TEN PRENSETE CAMBIAR TUS HABITOS ALIMENTICIOS".'<br>';
            $esp = "Sobrepeso";
          } else {

            if ($Calcular > 30) {
              echo "Tines Obesidad".'<br>';
              echo "IMPORTANTE QUE ACUDAS AL MEDICO YA QUE PUDE QUE NO TE ESTES ALIMENTANDO DE LA MANERA CORRECTA".'<br>';
              $esp = "Obesidad";
            }
          }
        } else {
          echo '<br>';
          echo "Estas Debajo de Tu Peso Por:" . $sobrepeso . "kg".'<br>';

          if ($sobrepeso < 18.5) {
            echo "Estas bajo de peso".'<br>';
            echo "IMPORTANTE QUE ACUDAS AL MEDICO YA QUE PUDES ESTAR SUFRIENDO DE ALGUN TRANSTORNO ALIMENTICIO".'<br>';

            $esp = "bajo de peso";
          }
        }
      }
      
      //echo 'HOLA MUNDO';

      $statement = $conexion->prepare('SELECT * FROM datos WHERE Folio = :folio');
      $statement->execute(array(':folio' => $folio));
      $resultado = $statement->fetchAll();

      if(!$resultado){
        $statement = $conexion->prepare('INSERT INTO datos  VALUES (NULL,:peso, :masa,:altura,:esp,:folio)');
        $statement->execute(array(':peso' => $peso, ':masa' => $Calcular, ':altura' => $altura,':esp' => $esp,':folio' => $folio));
        $resultado = $statement->fetch();
      }  else{
        $statement = $conexion->prepare('INSERT INTO datos  VALUES (NULL,:peso, :masa,:altura,:esp,:folio)');
        $statement->execute(array(':peso' => $peso, ':masa' => $Calcular, ':altura' => $altura,':esp' => $esp,':folio' => $folio));
        $resultado = $statement->fetch();
      }
    }

    $statement = $conexion->prepare('SELECT * FROM datos WHERE Folio = :folio');
    $statement->execute(array(':folio' => $folio));
    $resultado3 = $statement->fetchAll();

    ?>
  </center>
  <br>
  <br>

  <div id="header1">
    <?php if ($resultado3 != false) : ?>
  
      <table border="1px">
        <tr>
          <th colspan="6"> Historial de usuario</th>
        </tr>
        <tr>
          <td>Folio</td>
          <td>Peso</td>
          <td>Masa</td>
          <td>Altura</td>
          <td>Especificación</td>
        </tr>
          <?php 
              foreach ($resultado3 as $datos) {
                echo '<tr>'.
                          '<td>'.$datos['Folio'].'</td>'.
                          '<td>'.$datos['Peso'].'</td>'.
                          '<td>'.$datos['Masa'].'</td>'.
                          '<td>'.$datos['Altura'].'</td>'.
                          '<td>'.$datos['Especificación'].'</td>'.
                      '<tr>';
              }
          ?>
      </table>
    <?php endif ?>
  </div>
  <div>Cuida tu vida, cuidando lo que comes :3</div>


  <?php require 'views/footer.php'; ?>
</body>

</html>