<?php

require("../include/config/coneccion.php");

//datos desde el form
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$tema = $_POST["tema"];

//insertar datos en la bd

$insertarData = "INSERT INTO datos_oradores(nombre, apellido,email,tema) VALUES 
                ('$nombre','$apellido','$email','$tema')";

$insertBd = mysqli_query($conexion, $insertarData);

if ($insertarData) {
    echo "funciona";
}
else{
    echo "error al insertar datos";
}

?>