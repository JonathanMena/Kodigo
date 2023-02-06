<?php
//UPDATE

if (empty($_POST["InputN_Empresa"]) || empty($_POST["InputDescripcion"]) ||empty($_POST["InputContacto"])) {
echo "Error, complete el formulario";
exit();
}

//print_r($_POST);

$N_Empresa = $_POST["InputN_Empresa"];
$Descripcion = $_POST["InputDescripcion"];
$Contacto = $_POST["InputContacto"];



require '../model/Connection.php';
$query = $db->prepare("INSERT INTO Biblioteca(N_Empresa, Descripcion, Contacto ) VALUES(?,?,?);");
$result = $query->execute([$N_Empresa, $Descripcion, $Contacto ]);

if($result){
    header("Location: ../Tareas4/Biblioteca.php");
}else{
    echo "fallo";
}

?>