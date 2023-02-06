<?php

$password = "";
$user = "root";
$name_db = "workerssql";


try{


$db = new PDO(
    
    'mysql:host=localhost;


    
    dbname='.$name_db,
    //nombre de la base de datos en la dbname
    $user, $password,
    //set names para recibir todos los carácteres
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

} catch(Exception $e){
//si hay error lo agarrá
echo "No funcionó la conexión: ".$e->getMessage();
}

?>