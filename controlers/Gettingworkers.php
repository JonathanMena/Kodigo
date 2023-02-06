<?php

include "../model/Connection.php";

$query_HORARIO = $db->query("SELECT * from turnos");
$worker_HORARIOS = $query_HORARIO->fetchAll(PDO::FETCH_OBJ);



//$query_horario = $db->prepare("SELECT * from turnos where Id_Empleado = ?");
//$query_horario->execute([$Id_Empleado_horario]);
//$worker_HORARIOS = $query_horario->fetch(PDO::FETCH_OBJ);



?>