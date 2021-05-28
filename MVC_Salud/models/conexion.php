<?php
$conex = mysqli_connect("localhost","root","","mvc");
 ?>

<?php

	class Conectar {
		public static function conexion(){
					//Servidor, nombre de usuario, contrañesa y nombre de BD
			$conexion = new mysql("localhost","root","","mvc");
			return $conexion;
		}
	}
?>
