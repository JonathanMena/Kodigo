<?php

print_r($_POST);

$Id_Empleado = $_POST["Id_Empleado"];
$Nombre = $_POST["InputName"];
$Apellido = $_POST["InputApellidos"];
$Edad = $_POST["InputEdad"];
$Dui = $_POST["InputDui"];
$Direccion = $_POST["InputDireccion"];
$Telefono = $_POST["InputTelefono"];

require '../model/Connection.php';

$query = $db->prepare("UPDATE empleado SET Nombre = ?, Apellido = ?, Edad = ?, Dui = ?, Direccion = ?, Telefono = ? WHERE Id_Empleado = ?");
$result = $query->execute([$Nombre,$Apellido,$Edad,$Dui,$Direccion,$Telefono,$Id_Empleado]);

if($result){
    header("location: ../Tareas/Control.php");
}else{
    echo "fallo en actualizacion de datos";
}


?>