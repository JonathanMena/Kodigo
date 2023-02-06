<?php

include "../model/Connection.php";

$idWorker = $_GET["Id_Promocion"];
$query = $db->prepare("DELETE FROM inventario WHERE Id_Promocion = ?");
$result = $query->execute([$idWorker]);

if($result){
    header("location: ../Tareas3/Inventary.php");
}else{
    echo "fallo en actualizacion de dato";
}

?>