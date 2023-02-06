<?php

include "../model/Connection.php";

$query = $db->query("SELECT * from empleado");
$worker = $query->fetchAll(PDO::FETCH_OBJ);



?>