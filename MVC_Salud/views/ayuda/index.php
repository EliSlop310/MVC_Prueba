<?php
session_start();
?>
 <?php require 'views/header4.php'?>
  <?php require 'views/menulateral.php'?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Acorde&oacute;n Sencha ExtJS</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link  rel="stylesheet" type="text/css"  href="public/css/animacion.css">
            <link  rel="stylesheet" type="text/css" href="public/css/default.css">
            <link rel="stylesheet" type="text/css" href="public/css/menu.css">
            <link rel="stylesheet" type="text/css" href="public/css/menulateral.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript" src="public/js/animacion.js"></script>
            <script src="https://kit.fontawesome.com/9fec9d4dbe.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="../jslib/theme-triton/resources/theme-triton-all.css">
            <script type="text/javascript" src="../jslib/ext-all.js"></script>
            <script type="text/javascript" src="../jslib/theme-triton/theme-triton.js"></script>
        </head>
        <body>

            <script>


          /*
          acordeon.js
          Uso de la distribución tipo acordeón de ExtJS
          */
          Ext.require([
              'Ext.plugin.Viewport'
          ]);
          Ext.onReady(function(){
              Ext.create('Ext.panel.Panel', {
          		title: '¿Mala alimentacion?',
          		width: 1250,
          		height: 700, //si no dice la unidad, entonces son pixeles

          		defaults: {
          			// para todos los paneles del acordeón
          			bodyStyle: 'padding:10px'
          		},
          		layout: {
          			// definición para el acordeón
          			type: 'accordion',
          			titleCollapse: true,
          			animate: true,
          			activeOnTop: true,

          		},
          		items: [{
          				title: 'Bulimia nerviosa',
          				html: '<p>La bulimia nerviosa, llamada frecuentemente «bulimia», es un trastorno de la alimentación grave y potencialmente mortal. Cuando padeces bulimia, tienes episodios de atracones y purgas que incluyen la sensación de pérdida de control sobre tu alimentación. Muchas personas con bulimia también restringen lo que comen durante el día, lo que suele causar más episodios de atracones y purgas. Durante estos episodios, es normal que consumas una gran cantidad de alimentos en un tiempo corto, para luego intentar deshacerte de las calorías extra de una manera poco saludable. Debido a la culpa, la vergüenza y el temor intenso a aumentar de peso por comer en exceso, puedes provocarte vómitos, puedes ejercitarte desmesuradamente o puedes usar otros métodos, como los laxantes, para deshacerte de las calorías. Si tienes bulimia, probablemente te preocupe tu peso y tu figura corporal, y tal vez te juzgues con severidad y dureza por los defectos que son producto de tu autopercepción. Puedes tener un peso normal o, incluso, un poco de sobrepeso.</p></div><br><br><div id="imagenes"><img  src="public/img/bulin.jpg" alt="[Imagen] Bulimia"></div>',
          				closable: true
          			},{
          				title: 'Anorexia nerviosa',
          				html: '<p> La anorexia nerviosa, a menudo simplemente denominada «anorexia», es un trastorno de la alimentación potencialmente mortal que se caracteriza por un peso corporal anormalmente bajo, un gran temor a aumentar de peso y una percepción distorsionada del peso o de la figura corporal. Las personas con anorexia hacen todo lo posible por controlar el peso y la figura corporal, lo que frecuentemente afecta de manera importante la salud y las actividades cotidianas. Cuando tienes anorexia, limitas en exceso la ingesta de calorías o usas otros métodos para bajar de peso; por ejemplo, te ejercitas de forma desmesurada, tomas laxantes o suplementos dietéticos, o vomitas después de comer. Los esfuerzos para bajar de peso, incluso cuando el peso corporal es bajo, pueden causar problemas de salud graves al punto de morirse de hambre.</p></div><br><br><div id="imagenes"><img  src="public/img/anorexn.jpg" alt="[Imagen] Anorexia"></div>',
                  closable: true
                },{
          				title: 'Trastorno alimentario compulsivo',
          				html: '<p>Cuando tienes el trastorno alimentario compulsivo, habitualmente comes en exceso (atracón) y tienes la sensación de pérdida de control sobre lo que comes. Puedes comer con rapidez o consumir más alimentos de los que tienes pensado, incluso cuando no tienes apetito, y seguir comiendo mucho tiempo después de sentirte demasiado lleno. Después de un atracón, puedes sentir culpa, enojo o vergüenza por la conducta y por la cantidad de alimentos consumidos. Sin embargo, no intentas compensar esta conducta con el ejercicio desmesurado o la purga, tal como lo haría una persona bulímica o anoréxica. La vergüenza puede provocar que comas solo para ocultar tus atracones. Por lo general, se produce una nueva ronda de atracones por lo menos una vez a la semana. Puedes tener un peso normal, sobrepeso u obesidad.</p></div><br><br><div id="imagenes"><img  src="public/img/compuln.jpg" alt="[Imagen] Alimentacion compulsiva"></div>',
          				closable: true
          			},{
          				title: 'Sobrepeso',
          				html: '<p>El sobrepeso es el aumento de peso corporal por encima de un patrón dado y para evaluar si una persona presenta sobrepeso, los expertos emplean una fórmula llamada índice de masa corporal (IMC), que calcula el nivel de grasa corporal en relación con el peso y estatura.​ Se considera normal un IMC entre 18,5 a 24,9. Los adultos con un IMC de 25 a 29,9 se consideran con sobrepeso. No obstante, algunas personas en este grupo pueden tener mucho peso muscular y por lo tanto no tanta grasa, como es el caso de los atletas. En estas personas su peso no representa un aumento asociado del riesgo de problemas de salud. Los adultos con un IMC de 30 a 39,9 se consideran obesos y con un IMC igual o superior a 40, extremadamente obesos. Cualquier persona con más de 45 kg de sobrepeso se considera que sufre de obesidad mórbida.</p><br><br><div id="imagenes"><img src="public/img/sobpn.jpg" alt="[Imagen] Sobrepeso"></div>',
          				closable: true
          			},{
          				title: 'Obesidad',
          				html: '<p>Obesidad significa tener un exceso de grasa en el cuerpo. Se diferencia del sobrepeso, que significa pesar demasiado. El peso puede ser resultado de la masa muscular, los huesos, la grasa y/o el agua en el cuerpo. Ambos términos significan que el peso de una persona es mayor de lo que se considera saludable según su estatura. La obesidad se presenta con el transcurso del tiempo, cuando se ingieren más calorías que aquellas que quema. El equilibrio entre la ingestión de calorías y las calorías que se pierden es diferente en cada persona. Entre los factores que pueden afectar su peso se incluyen la constitución genética, el exceso de comida, el consumo de alimentos ricos en grasas y la falta de actividad física. La obesidad aumenta el riesgo de padecer diabetes, enfermedades cardiacas, derrames cerebrales, artritis y ciertos cánceres. Si usted está obeso, perder por lo menos de cinco a 10 por ciento de su peso puede retrasar o prevenir algunas de estas enfermedades. Por ejemplo, si usted pesa 200 libras, el cinco al 10 por ciento serían unas 10 a 20 libras.</p><br><br><div id="imagenes"><img  src="public/img/oben.jpg" alt="[Imagen] Obesidad"></div>',
          				closable: true
          			}],
          		renderTo: Ext.getBody()
          	});
          });



          </script>
        </body>
    </html>
