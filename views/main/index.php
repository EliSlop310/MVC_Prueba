<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-AU-Compatible" content="ie=edge">
    <title>Salud del Buen Comer</title>




  </head>
  <script src = "public\js\validaciones.js"></script>
 <body>


   <?php require 'views/header.php';?>

    <div id="main">
        <h1 class="center"> Bienvenido a Salud del buen Comer</h1>
    </div>
    <br>
    <br>
    <br>
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
   <?php require 'views/footer.php';?>
 </body>
</html>
