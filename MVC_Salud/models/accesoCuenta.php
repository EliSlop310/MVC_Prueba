<?php
//Iniciar
session_start();
include("conexion.php");

	$errores = '';
	$usuario = $_POST['usuario'];
	$password = $_POST['pass'];

	try {
		$conexion = new PDO('mysql:host=localhost; dbname=mvc', 'root', '');
	} catch (PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}

	$statement = $conexion->prepare('SELECT * FROM sesion WHERE usuario =:usuario AND pass=:pass');
	$statement->execute(array(':usuario' => $usuario, ':pass' => $password));

	$resultado = $statement->fetch();
    if($resultado != false){
        $_SESSION['usuario'] = $usuario;
        header("Location:../mimain");
    }else{
		echo '<script> alert("Error su usuario o contraseña son incorrectos"); window.history.back();</script>';
    }

?>
