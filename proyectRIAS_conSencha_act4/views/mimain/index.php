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
            renderTo:Ext.getBody(),
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

    $statement = $conexion->prepare('SELECT Folio, Peso, Masa, Altura, Especificacion  FROM datos WHERE Folio = :folio');
    $statement->execute($arreglo=array(':folio' => $folio));
	

	//print_r($arreglo);
      $arreglo=array();
        $sql = "SELECT Folio, Peso, Masa, Altura, Especificacion FROM datos WHERE Folio=".$folio.";";//se crea la consulta
        foreach($conexion->query($sql) as $datos){ //se ejecuta la consulta conectandose a la base de datos
        $arreglo [] = $datos; //los datos se guardan en un arreglo
                                             }  

				$arr= json_encode($arreglo);//el arreglo se retorna en una variable JSON y se almacena en una variable general
				//||||||||||||||| eje. del contenido de $arreglo 
				//vvvvvvvvvvvvvvv
				//[{"Folio":"6","0":"6","Peso":"90","1":"90","Masa":"32.6608","2":"32.6608","Altura":"1.66","3":"1.66",
				//"Especificacion":"Obesidad","4":"Obesidad"},{"Folio":"6","0":"6","Peso":"50","1":"50","Masa":"18.1449",
				//"2":"18.1449","Altura":"1.66","3":"1.66","Especificacion":"bajo de peso","4":"bajo de peso"},{"Folio":"6",
				//"0":"6","Peso":"70","1":"70","Masa":"25.4028","2":"25.4028","Altura":"1.66","3":"1.66","Especificacion":"Sobrepeso",
				//"4":"Sobrepeso"},{"Folio":"6","0":"6","Peso":"66","1":"66","Masa":"23.9512","2":"23.9512","Altura":"1.66","3":"1.66",
				//"Especificacion":"Peso correcto","4":"Peso correcto"},{"Folio":"6","0":"6","Peso":"90","1":"90","Masa":"32.6608",
				//"2":"32.6608","Altura":"1.66","3":"1.66","Especificacion":"Obesidad","4":"Obesidad"}]//[{Folio:'6',Peso:'90',Masa:'32.6608',
				//Altura:'1.66',Especificacion:'Obesidad'}]

		 ?>
		 
	<script>
	var $arr= <?=$arr?>;//se pasa la variable general a tipo JS
	
	Ext.require(['Ext.plugin.Viewport']);//se requiere librerias
    Ext.onReady(function(){//se abre la funcion
	//Definir datos
	//El espacio de nombres "data" implica que ahí se mantiene información de la aplicación 
	//La clase Store implica un almacén de datos en cliente (puede ser fijo o provenir del servidor)
	Ext.create('Ext.data.Store', {   
    storeId: 'datosStore', //identificador del almacenamiento para usar posteriormente
    fields:[ 'Folio', 'Peso', 'Masa','Altura','Especificacion'], //campos que forman el "registro"

    data: $arr	});
	
	//Definir tabla y relacionarla
	Ext.create('Ext.grid.Panel', {
		title: 'Registro de condición físico',
		//headerPosition: 'top', //probar con y sin atributo
		store: Ext.data.StoreManager.lookup('datosStore'), // Al administrador de almacen busque relación con almacenamiento
		columns: [
		{
			text: 'Folio',
			width: 70,
			dataIndex: 'Folio',
			hidden: false,
			sorteable: true	
			//renderer:renderTopic, <---para hacerce link
			//listeners:  <---para hacer llamada
			
		},
		{
			text: 'Peso',//titulo
			width: 70, //anchura
			dataIndex: 'Peso', //Identificador con el que tendra relacion el calpo de la tabla o registro
			hidden: false,
			sorteable: true	
		},
		{
			text: 'Masa',
			width: 100,
			dataIndex: 'Masa',
			hidden: false,
			sorteable: true	
		},
		{
			text: 'Altura',
			width: 70,
			dataIndex: 'Altura',
			hidden: false,
			sorteable: true	
		},
		{
			text: 'Especificaciones',
			width: 150,
			dataIndex: 'Especificacion',
			hidden: false,
			sorteable: true	
		}
		],
		
		//height: 200,
		width: 425,
		renderTo: Ext.Element.get('tablainfo') // Ext.getBody() //se pega al body
	});           //Ext.Element escoge elemento determinado con la Id
});

	
	
	</script>



  </center>
  <br>
  <br>
<center>
  <div id="tablainfo">

  </div>

  <br><br><br>





  <?php require 'views/footer.php'; ?>
</body>

</html>
