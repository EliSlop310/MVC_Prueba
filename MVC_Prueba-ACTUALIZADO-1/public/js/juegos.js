
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
				
	
