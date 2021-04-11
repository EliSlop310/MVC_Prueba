<?php include 'conexion.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tablas con Sencha ExtJS - tabla alimenticia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../jslib/theme-classic/resources/theme-classic-all.css">
        <script type="text/javascript" src="../jslib/ext-all.js"></script>
        <script type="text/javascript" src="../jslib/theme-triton/theme-classic.js"></script>
        <script type="text/javascript" src="js/grid1.js"></script>
    </head>
    <body>
	<center>
  <div id="header1">
    <?php if ($resultado3 != false) : ?>

<table border="1px" id="tab1">
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
    </body>
</html>
