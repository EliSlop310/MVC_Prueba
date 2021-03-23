<?php
/*session_start();
$varsesion = $_SESSION['usuario'];
error_reporting(0);
if($varsesion == null || $varsesion = ''){
	echo 'Sin autorizacion de acceso.';
	die();
}*/
?>
 <?php require 'views/header2.php'?>
  <?php require 'views/menulateral.php'?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-AU-Compatible" content="ie=edge">

    <title>Recetas y Tips</title>
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="stylesheet" href="public/css/animacion.css">
	<link rel="stylesheet" type="text/css" href="public/css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/animacion.js"></script>
    <link href="jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="public/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="public/js/jquery-ui.js"> </script>
	   <script src="https://kit.fontawesome.com/9fec9d4dbe.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="../jslib/theme-triton/resources/theme-triton-all.css">
           <script type="text/javascript" src="../jslib/ext-all.js"></script>
           <script type="text/javascript" src="../jslib/theme-triton/theme-triton.js"></script>


  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>


  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script>



  </head>

 <body>


         <script>
         /*
   containerlayout.js
   Manejo de contenedores y distribuciones (layout) con Sencha ExtJS
   */
   Ext.require([
       'Ext.plugin.Viewport'
   ]);
   Ext.application({
       name: 'RECETAS SALUDABLES',
       launch : function() {
   		var hijo1 = {   //creo un nodo del dom
   				frame: true,
   				height: '10em',
   				html: '4 porciones      25 MIN ',
   				title: '<h2>Sopa de hongos con epazote</h2>',
   				collapsible: true,
   				collapsed: false
   			};

                     var hijo1a = {
                         frame: true,
                         //height: '10em',
                         width: '60em',
                         html: ' -- 2 cucharaditas de aceite</br>-- 1 cucharada de ajo, finamente picado</br>  -- 1/2 tazas de cebolla, fileteada</br> -- 1 cucharada de epazote, finamente picado</br> -- 2 tazas de seta, cortada en láminas</br> -- 2 tazas de hongo, cortado en láminas</br> -- 5 tazas de caldo de pollo, desgrasado</br> -- 1 pizca de comino, en polvo</br> -- 1 pizca de sal</br> -- al gusto de aguacate, para decorar</br> -- al gusto de queso panela, para decorar</br> -- al gusto de epazote, para decorar</br>',
                         title: '-----INGREDIENTES',
                         collapsible: true,
                         collapsed: true
                       };
                       var hijo1b = {
                   				frame: true,
                   				//height: '10em',
                   				width: '60em',
                   				html: 'Calienta una ollita a fuego medio con el aceite y fríe el ajo con la cebolla, agrega el epazote, cocina las setas con los hongos y cocina hasta que estén brillantes. Rellena con caldo de pollo sazona con comino en polvo y sal. Cocina durante 20 minutos.</br>Sirve y decora con aguacate, queso panela y epazote fresca.',
                   				title: '-----PREPARACION',
                   				collapsible: true,
                   				collapsed: true
                   			};


         var hijo2 = {   //creo un nodo del dom
     				frame: true,
     				height: '10em',
     				html: '4 porciones      15 MIN',
     				title: '<h2>Ensalada verde con pechuga de pollo con mostaza y miel</h2>',
     				collapsible: true,
     				collapsed: false
     			};

                           var hijo2a = {
                               frame: true,
                               //height: '10em',
                               width: '60em',
                               html: '1 pechuga de pollo sin hueso  </br>2 manzanas verdes  </br> 1 taza de espinaca baby  </br> 3 calabazas verdes  </br> 1/2 tazas de germen de alfalfa  </br> 2 lechugas orejonas  </br> 1/2 tazas de piñon blanco  </br> 2 aguacates  </br> 1/4 tazas de miel de abeja  </br> 1/2 tazas de mostaza, americana  </br> 4 cucharaditas de jugo sazonador  </br> 1 cucharadita de pimienta molida  </br> 2 cucharaditas de salv</br>  3 dientes de ajo  </br>3 ramitas de tomillo fresco<br>1/2 tazas de aceite de oliva  </br> 2 cucharadas de vinagre blanco  </br>',
                               title: '-----INGREDIENTES',
                               collapsible: true,
                               collapsed: true
                             };

                             var hijo2b = {
                         				frame: true,
                         				//height: '10em',
                         				width: '60em',
                         				html: 'Para la marinada mezclamos la miel, mostaza, un ajo finamente picado y salsa sazonador. </br>Cortamos la pechuga de pollo en tiras y luego en cubos medianos, la marinamos en la preparación anterior.  Dejamos reposar 15 minutos. Trozar la lechuga con las manos para que no se oxide y ponerlo en una ensaladera, agregamos la espinaca.  Retiramos el corazón de la manzana, cortamos en gajos delgados y la agregamos a la ensaladera. Cortamos la calabaza en cubos medianos y lo incorporamos en la ensaladera.Retiramos la piel del aguacate y cortamos en laminas delgadas e incorporamos en la ensaladera.  Agregamos germen y piñones.   </br> Pre calentar la parrilla o sartén con un poco de aceite y sellar la pechuga de pollo, cocinar hasta que esté cocida.Para la vinagreta, agregamos en un recipiente el vinagre, aceite de oliva, pimienta, sal, puré de ajo y hojas de tomillo. Mezclamos muy bien. Servir una cama de ensalada, sobre esta la pechuga de pollo y acompañar con la vinagreta.',
                         			title: '------PREPARACION',
                         				collapsible: true,
                         				collapsed: true
                         			};

           var hijo3 = {   //creo un nodo del dom
       				frame: true,
       				height: '10em',
       				html: '2 porciones  10 MIN',
       				title: '<h2>Smoothie Verde</h2>',
       				collapsible: true,
       				collapsed: false
       			};

                           		var hijo3a = {
                           				frame: true,
                           				//height: '10em',
                           				width: '60em',
                           				html: '1/2 tazas de leche de almendra, sin azúcar</br>1 taza de col rizada</br>1 taza de espinaca</br>1 manzana, en rebanadas con cáscara</br>1 taza de frambuesa</br> 1 taza de hielo',
                                   	title: '-----INGREDIENTES',
                           				collapsible: true,
                           				collapsed: true
                           			};
                                 var hijo3b = {
                             				frame: true,
                             				//height: '10em',
                             				width: '60em',
                             				html: 'Licuar todos los ingredientes y servir.</br>',
                             				title: '-----PREPARACION',
                             				collapsible: true,
                             				collapsed: true
                             			};



				
				
					var hijo4 = {   //creo un nodo del dom
       				frame: true,
       				height: '10em',
       				title: '<center><h4>© Salud en buen comer 2021 - RIAS 17:00 - 18:00</h4></center>',
       				collapsible: true,
       				collapsed: false
       			};

					var hijo5 = {   //creo un nodo del dom
       				frame: true,
       				height: '10em',
       				title: '<br><br><br>',
       				collapsible: true,
       				collapsed: false
       			};



   		Ext.create('Ext.Panel', {  //creo el panel
   			renderTo: Ext.getBody(),  // acomoda en el body
   			width: '100em',
   			height: 'auto',
   			title: 'LISTA DE RECETAS',
   			autoscroll: true,
   			items: [     //adjunto los hijos
   				hijo1, hijo1a, hijo1b, hijo2, hijo2a, hijo2b, hijo3, hijo3a, hijo3b, hijo4, hijo5
   			]
   		});
   	}
   });





   </script>


<div>
<h2><br><br>Ayudanos en nuetra proxima receta: ¿Cual es tu comida favorita? [El mas alto es el mejor, acomodalo a tu gusto]</h2>
<ul id="sortable">
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Sopa Azteca</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Tesmole</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Mole de panza</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Crema de Chayote</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Tostadas con aguacate</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Pescado empapelado</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Postres bajo en azucares</li>
</ul>
</div>



   <br>
   <br>
   <div id="detalles6"> <h3>Cita Medica IMSS [Clic Aqui].<h3></div>
   <div id="desplazo6">
   <a href="https://citamedicadigital.imss.gob.mx/CMW/cmw;jsessionid=b7brBCno-KO0fDmV5BBeBq9TJiD-_8eW1DwRdngJCrNBveTvZuFd!-2035273858!-160250278?v=login"><h4>Realiza tu cita medica en el IMSS online [Clic aqui ☻]</h4></a></div>
     <br><br>

  
    </body>
   </html>
 <?php require 'views/footer.php';?>