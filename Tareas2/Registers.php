<?php
//UPDATE

if (empty($_POST["InputHorario"]) || empty($_POST["InputDiasxsemana"]) ||empty($_POST["InputArea"])) {
echo "Error, complete el formulario";
exit();
}

//print_r($_POST);

$horario = $_POST["InputHorario"];
$diasxSemana = $_POST["InputDiasxsemana"];
$area = $_POST["InputArea"];
$Id_Empleado = $_POST["InputId_Empleado"];



require '../model/Connection.php';
$query = $db->prepare("INSERT INTO Turnos(horario, diasxsemana, area, Id_Empleado) VALUES(?,?,?,?);");
$result = $query->execute([$horario, $diasxSemana, $area, $Id_Empleado ]);

if($result){
    header("Location: ../Tareas/control.php");
}else{
    echo "fallo";
}

?>