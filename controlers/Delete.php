<?php

include "../model/Connection.php";

$idWorker = $_GET["Id_Empleado"];
$query = $db->prepare("DELETE FROM empleado WHERE Id_Empleado = ?");
$result = $query->execute([$idWorker]);

if($result){
    header("location: ../Tareas/Control.php");
}else{
    echo "fallo en actualizacion de dato";
}

?>