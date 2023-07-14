<?php

require("./include/config/coneccion.php");

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$consultas = mysqli_query($conexion,"SELECT * FROM datos_oradores");


echo "<pre>";
var_dump($consultas);
echo "</pre>";

$listadoArray = mysqli_fetch_array($consultas);
echo "<br>";
echo "<h2>probando</h2>";

// echo $listadoArray['nombre'];
/*
while( $listadoArray = mysqli_fetch_array($consultas)){

    
    echo $listadoArray['nombre'] . " " . $listadoArray['apellido'] . " " .$listadoArray['email'];
    echo "<br>";


}


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
*/
?>
