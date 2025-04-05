<?php 

    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="gocarg";

    $enlace= mysqli_connect($servidor,$usuario,$clave, $baseDeDatos);

?>
<?php

    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["registro"])){

        $nombre=isset($_POST["Nombre"]) ? $_POST["Nombre"]:"";
        $email=isset($_POST["email"]) ? $_POST["email"]:"";
        $contraseña=isset($_POST["Contraseña"])? $_POST["Contraseña"]:"";
        $tabla=isset($_POST["Tipo_persona"]) ? $_POST["Tipo_persona"]:"conductor";

        $placa=isset($_POST["placa"])? $_POST["placa"]:"";
        $vehiculo=isset($_POST["vehiculo"])? $_POST["vehiculo"]:"";

        if(!empty($nombre)&& !empty($email) && !empty($contraseña)){
            if(!in_array($tabla,["conductor","cliente"])){
                die("Tabla no encontrada");
            }

            if($tabla == "conductor"){
                $insertarDatos="INSERT INTO conductores (Nombre,Email,Contraseña,TipoVehiculo,PlacaVehiculo) VALUES ('$nombre','$email','$contraseña','$vehiculo','$placa')";
                $ejecutarInsertarDatos= mysqli_query($enlace,$insertarDatos);
            }

            if($tabla == "cliente"){
                $insertarDatos= "INSERT INTO clientes (nombre,email,contraseña) VALUES ('$nombre','$email','$contraseña')";
                $ejecutarInsertarDatos=mysqli_query($enlace,$insertarDatos);
            }

            echo "Registrado con exito ahora vuelve al inicio e inicia sesion";
        } 
    }

?>