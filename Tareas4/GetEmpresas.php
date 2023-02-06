<?php

include "../model/Connection.php";

$query = $db->query("SELECT * from Biblioteca");
$worker = $query->fetchAll(PDO::FETCH_OBJ);


?>