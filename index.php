<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "gocarg";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);


?>  
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registro"])) {
        /*echo "<pre>";
         print_r($_POST);
         "</pre>";
         */
        $nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $contraseña = isset($_POST["contraseña"]) ? $_POST["contraseña"] : "";
    
        if (!empty($nombre) && !empty($contraseña && !empty($email))) {
            $insertarDatos = "INSERT INTO clientes (nombre,email,contraseña) VALUES ('$nombre','$email','$contraseña')";
            $ejecutarInsertarDatos = mysqli_query($enlace, $insertarDatos);

            echo"Te has registrado Exitosamente vuele atras e inicia sesion";
    
        }
    }
    
?>

