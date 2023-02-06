<?php
//UPDATE

if (empty($_POST["InputN_Empresa"]) || empty($_POST["InputDescripcion"]) ||empty($_POST["InputDate"])) {
echo "Error, complete el formulario";
exit();
}

//print_r($_POST);

$N_Empresa = $_POST["InputN_Empresa"];
$Descripcion = $_POST["InputDescripcion"];
$Date = $_POST["InputDate"];



require '../model/Connection.php';
$query = $db->prepare("INSERT INTO inventario(N_Empresa, Descripcion, Date ) VALUES(?,?,?);");
$result = $query->execute([$N_Empresa, $Descripcion, $Date ]);

if($result){
    header("Location: ../Tareas3/Inventary.php");
}else{
    echo "fallo";
}

?>