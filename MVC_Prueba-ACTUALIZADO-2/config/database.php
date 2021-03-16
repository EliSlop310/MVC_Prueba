<?php

	class Conectar {
		public static gunction conexion(){
					//Servidor, nombre de usuario, contrañesa y nombre de BD
			$conexion = new mysql("localhost","root","","mvc");
			return $conexion;
		}
	}
?>