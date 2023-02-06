<?php

include "../templates/Header.php";

include "../model/Connection.php";

$IdWorker = $_GET["Id_Promocion"];
$query = $db->prepare("SELECT * from inventario where Id_Promocion = ?");

$query->execute([$IdWorker]);

$worker = $query->fetch(PDO::FETCH_OBJ);

?>


<div class="container mb-5 mt-5">
<div class="card">
<div class="card-header"> ingrese los datos de trabajador </div>
  <form action="../controlers/Update3.php" method="POST">
    <div class="m-4">
      <label>Nombre de Empresa</label>
      <input class="form-control" type="text" placeholder="Ingrese nombre" value=<?php echo $worker->N_Empresa ?> name="InputN_Empresa" required>
    </div>
      <div class="m-4">
      <label>Descripcion</label>
      <input class="form-control" type="text" placeholder="Ingrese Apellidos" value=<?php echo $worker->Descripcion ?> name="InputDescripcion" required>
      </div>
    <div class="m-4">
      <label>Duracion de la Promocion</label>
      <input class="form-control" type="text" placeholder="Ingrese Edad" value=<?php echo $worker->Date ?> name="InputDate" required>
    </div>
    <input type="hidden" name="Id_Empleado" value="<?php echo $worker->Id_Promocion ?>">
    <input type="submit" class="btn btn-primary m-2" value="Actualizar">
  </form>

</div>
</div>
</div>

<?php

include "../templates/Footer.php";
?>