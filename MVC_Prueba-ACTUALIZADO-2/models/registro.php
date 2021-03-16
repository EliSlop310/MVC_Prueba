<?php
    session_start();

    $usuario = ($_POST['usuario']);
    $correo = $_POST['correo'];
    $password = $_POST['pass'];

    $errores = '';

    if(empty($usuario) or empty($password) or empty($correo)){
      echo '<script> alert("Por favor, completa todos los datos"); window.history.back();</script>';

    }else{
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=salud_alimenticia', 'root', '');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM sesión WHERE Usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();

        if($resultado != false){
            $errores .= 'El nombre de usuario ya existe';
            echo '<script> alert("El nombre de usuario ya existe"); window.history.back();</script>';
        }
    }

    if($errores == ''){
        $statement = $conexion->prepare('INSERT INTO sesión (Folio, Usuario, Correo, Pass) VALUES (null, :usuario, :correo, :pass)');
        $statement->execute(array(':usuario' => $usuario,':correo'=> $correo, ':pass' => $password));

        header('Location: ../index.php');
    }
?>
