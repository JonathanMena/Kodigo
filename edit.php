<?php

include "./templates/Header.php";

include "./model/Connection.php";

$IdWorker = $_GET["Id_Empleado"];
$query = $db->prepare("SELECT * from empleado where Id_Empleado = ?");

$query->execute([$IdWorker]);

$worker = $query->fetch(PDO::FETCH_OBJ);


?>


<div class="container mb-5 mt-5">
<div class="card">
<div class="card-header"> ingrese los datos de trabajador </div>
  <form action="./controlers/Update.php" method="POST">
    <div class="m-4">
      <label>Nombre</label>
      <input class="form-control" type="text" placeholder="Ingrese nombre" value=<?php echo $worker->Nombre ?> name="InputName" required>
    </div>
      <div class="m-4">
      <label>Apellidos</label>
      <input class="form-control" type="text" placeholder="Ingrese Apellidos" value=<?php echo $worker->Apellido ?> name="InputApellidos" required>
      </div>
    <div class="m-4">
      <label>Edad</label>
      <input class="form-control" type="text" placeholder="Ingrese Edad" value=<?php echo $worker->Edad ?> name="InputEdad" required>
    </div>
    <div class="m-4">
      <label>Dui</label>
      <input class="form-control" type="text" placeholder="Ingrese Dui" value=<?php echo $worker->Dui ?> name="InputDui" required>
    </div>
    <div class="m-4">
      <label>Direccion</label>
      <input class="form-control" type="text" placeholder="Ingrese Direccion" value=<?php echo $worker->Direccion ?> name="InputDireccion" required>
    </div>
    <div class="m-4">
      <label>Telefono</label>
      <input class="form-control" type="text" placeholder="Ingrese Dui" value=<?php echo $worker->Telefono ?> name="InputTelefono" required>
    </div>
    <input type="hidden" name="Id_Empleado" value="<?php echo $worker->Id_Empleado ?>">
    
    <input type="submit" class="btn btn-primary m-2" value="Actualizar">
  </form>

</div>
</div>
</div>

<?php

include "./templates/Footer.php";
?>