<?php

include "../model/Connection.php";

$query = $db->query("SELECT * from inventario");
$worker = $query->fetchAll(PDO::FETCH_OBJ);



?>