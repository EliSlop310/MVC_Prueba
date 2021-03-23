<?php
/*session_start();
$varsesion = $_SESSION['usuario'];
error_reporting(0);
if($varsesion == null || $varsesion = ''){
	echo 'Sin autorizacion de acceso.';
	die();
}*/
?>
   <?php require 'views/header3.php'?>
  <?php require 'views/menulateral.php'?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-AU-Compatible" content="ie=edge">
    <title>Plato del Buen Comer</title>
  <link rel="stylesheet" href="public/css/default.css"> 
  <link rel="stylesheet" type="text/css" href="public/css/menu.css">
  <link rel="stylesheet" href="public/css/juego.css">
  <script type="text/javascript" src="public/js/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="public/js/jquery-ui.js"></script>
	   <script src="https://kit.fontawesome.com/9fec9d4dbe.js" crossorigin="anonymous"></script>
  <!--script type="text/javascript" src="public/js/juegos.js"></script-->  
  
  <script type="module">
  import {
    Draggable,
    Point2DSpring,
    Tossable,
    combineStyleStreams,
    getPointerEventStreamsFromElement,
  } from "https://ajax.googleapis.com/ajax/libs/material-motion/0.1.0/material-motion.bundle.js";
</script>
		<!--Estilo para áreas de arrastrar y soltar -->
		
		<!-- Inicialización de áreas-->
		<script type="text/javascript">
			$(document).ready(function(){
				$( ".imagenes" ).draggable({
					stop: function (event, ui){
						//Obtiene x, y de esquina superior izquierda de origen
						var pos_actual = $(this).offset();
						var x = pos_actual.left;
						var y = pos_actual.top;
						//obtiene x,y de esquina superior izquierda de destino
						var pos_destino = $( "#droppable" ).offset();
						var x_d = pos_destino.left;
						var y_d = pos_destino.top;
						var ancho_destino = $( "#droppable" ).width();
						var alto_destino = $( "#droppable" ).height();
						if ((x < x_d || x > (x_d+ancho_destino)) ||
							(y < y_d && y > (y_d+alto_destino)))
							$( "#droppable" ).removeClass("ui-state-highlight");
					}
				});
				
				$( "#droppable" ).droppable({
			
           			activeClass:'claseactiva',
	            	hoverClass:'clasesobre',
			
					drop: function( event, ui ) {
						$( this ).addClass( "ui-state-highlight" );
					
	        var src=ui.draggable.find('img').attr('src');
			var h2=ui.draggable.find('h2').text();
			var todo='<li><img src="'+src+'" width="30px" height="30px">';
			todo=todo+'<h2>'+h2+'</h2></li>';
			$(this).find('ul').appeand(todo);
			ui.draggable.hide();
					}
				});
			
			
			
			$( ".imagenes" ).draggable({
					stop: function (event, ui){
						//Obtiene x, y de esquina superior izquierda de origen
						var pos_actual = $(this).offset();
						var x = pos_actual.left;
						var y = pos_actual.top;
						//obtiene x,y de esquina superior izquierda de destino
						var pos_destino = $( "#droppable2" ).offset();
						var x_d = pos_destino.left;
						var y_d = pos_destino.top;
						var ancho_destino = $( "#droppable2" ).width();
						var alto_destino = $( "#droppable2" ).height();
						if ((x < x_d || x > (x_d+ancho_destino)) ||
							(y < y_d && y > (y_d+alto_destino)))
							$( "#droppable" ).removeClass("ui-state-highlight");
					}
				});
			$( "#droppable2" ).droppable({
			
           			activeClass:'claseactiva',
	            	hoverClass:'clasesobre2',
			
					drop: function( event, ui ) {
						$( this ).addClass( "ui-state-highlight" );
					
	        var src=ui.draggable.find('img').attr('src');
			var h2=ui.draggable.find('h2').text();
			var todo='<li><img src="'+src+'" width="30px" height="30px">';
			todo=todo+'<h2>'+h2+'</h2></li>';
			$(this).find('ul').appeand(todo);
			ui.draggable.hide();
					}
				});
		



		});
				
	
		</script>
  
 
  </head>
 
 <body>
 



<div id="container">
<img id="plato" src="public/img/platobc.jpg" alt="[Imagen] Plato del buen comer">
</div>

<p></p>
<p></p>
<p></p> 
<section id="animaciones">  
<div class="conlis">
<div id="lista">
	<div class="imagenes" id="draggable">
		<img src="public/img/verduras.jpg">
		<center><h2>Verduras</h2></center>
	</div>
	<div class="imagenes" id="draggable">
		<img src="public/img/frutas.jpeg">
		<center><h2>Frutas</h2></center>
	</div>
	<div class="imagenes" id="draggable">
		<img src="public/img/dulces.jpg">
		<center><h2>Dulces</h2></center>
	</div>
	<div class="imagenes" id="draggable">
		<img src="public/img/leguminosas.jpg">
		<center><h2>Leguminosas</h2></center>
	</div>
	<div class="imagenes" id="draggable">
		<img src="public/img/carnes.jpg">
		<center><h2>Carnes</h2></center>
	</div>	
	<div class="imagenes"id="draggable">
		<img src="public/img/cereales.jpg">
		<center><h2>Cereales</h2></center>
	</div>	
	<div class="imagenes" id="draggable">
		<img src="public/img/refrescos.jpg">
		<center><h2>Refrescos</h2></center>
	</div>	
</div>


<div id="droppable">
		<center><h2>Carrito de Compras</h2></center>
		<ul id="milista">
		
		</ul>
</div>
<div id="droppable2">
		<center><h2>Bote de Basura</h2></center>
		<ul id="milista">
		
		</ul>
</div>

</div>
</section>
    
<?php require 'views/footer.php';?>

 </body>
</html>

