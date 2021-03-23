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

$statement = $conexion->prepare('SELECT Folio FROM sesion WHERE usuario = :usuario');
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
  <link rel="stylesheet" type="text/css" href="../jslib/theme-triton/resources/theme-triton-all.css">
      <script type="text/javascript" src="../jslib/ext-all.js"></script>
  <script type="text/javascript" src="../jslib/locale-es.js"></script>
      <script type="text/javascript" src="../jslib/theme-triton/theme-triton.js"></script>





<script>
        Ext.require([
            'Ext.plugin.Viewport'
        ]);
        Ext.onReady(function(){
			
			  Ext.create('Ext.Button', {  //se crea un boton
            renderTo: Ext.getBody(),
            width: 100,
            height:30,
            itemId: 'btnMostrar',   //el itemId
            text: 'Calendario',
			
            handler: function(picker, date) {
              var cal = Ext.ComponentQuery.query('#cal1')[0];
              if (cal != null)
                if (cal.isVisible())
                 cal.hide(); 
                else
                  cal.show();
            }
          });
			
            Ext.create('Ext.picker.Date', {
              width: 380,
              height: 10,
			
            renderTo: Ext.getBody(),
            itemId: 'cal1',
            maxDate: new Date(2019,12,12), //Año, mes - 1, día  fecha maxima
            minDate: new Date(2016,0,1),  //fecha minima tiene arreglos internos de javascript
            handler: function(picker, date) {  //manejador cuando seleccionan un valor
              alert(date);
            }
          });
        
		
		
        });

        </script>

<style>
#tab1 {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }

#tab1 th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

#tab1 td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

#tab1 tr:hover td { background: #d0dafd; color: #339; 

</style>




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

    ?><center>
    <div id="header1">
      <H2>Calcula Tu Indice De Masa Corporal</H2>
      <form action="" method="POST">
        <table id="tab1">
          <tr>
            <td><center><input type="text" name="Peso" placeholder="teclea tu peso(kg)" value="<?php echo $peso; ?>" onkeypress="return filterFloat(event,this);"></td></center>
		  </tr><tr>	
            <td><center><input type="text" name="Altura" placeholder="teclea tu altura(M)" value="<?php echo $altura; ?>" onkeypress="return filterFloat(event,this);"></center></td>
          </tr>
          <tr>
            <td><center> <input type="submit" value="Calcular"></center> </td>
          </tr>
        </table>
      </form>
    </div></center>
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
<center>
  <div id="header1">
    <?php if ($resultado3 != false) : ?>

      <table id="tab1" border="1px">
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
                          '<td>'.$datos['Especificacion'].'</td>'.
                      '<tr>';
              }
          ?>
      </table>
    <?php endif ?>


  </div></center>
 <br><br><br>


  <?php require 'views/footer.php'; ?>
</body>

</html>
