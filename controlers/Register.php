<?php
//UPDATE

if (empty($_POST["InputName"]) || empty($_POST["InputApellidos"]) ||empty($_POST["InputEdad"]) || empty($_POST["InputDui"])|| empty($_POST["InputDireccion"])|| empty($_POST["InputTelefono"])) {
echo "Error, complete el formulario";
exit();
}

//print_r($_POST);

$Name = $_POST["InputName"];
$Sur = $_POST["InputApellidos"];
$Age = $_POST["InputEdad"];
$Dui = $_POST["InputDui"];
$Direccion = $_POST["InputDireccion"];
$Telefono = $_POST["InputTelefono"];





require '../model/Connection.php';
$query = $db->prepare("INSERT INTO empleado(nombre,apellido,edad,dui,direccion,telefono) VALUES(?,?,?,?,?,?);");
$result = $query->execute([$Name,$Sur,$Age,$Dui,$Direccion,$Telefono]);

if($result){
    header("Location: ../Tareas/Control.php");
}else{
    echo "fallo";
}

?>