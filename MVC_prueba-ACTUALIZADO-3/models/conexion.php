<?php
$conexion = mysqli_connect("localhost","root","");
 ?>

<?php

	class Conectar {
		public static function conexion(){
					//Servidor, nombre de usuario, contrañesa y nombre de BD
			$conexion = new mysql("localhost","root","","salud_alimenticia");
			return $conexion;
		}
	}
?>
