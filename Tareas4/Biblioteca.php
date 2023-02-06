<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica bootstrap</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
<div>
<div class="container">
        <div class="row"></div>
        <nav class="navbar bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand text-white h4" href="#">

              o bazar das maravilhas
            </a>
     
      <a href="../Tareas/Control.php">Empleados</a>
      <a href="../Tareas3/Inventary.php">Inventario</a>
      <a href="../Tareas4/Biblioteca.php">Biblioteca</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
     </div>
  </nav>
  </div>
  

<?php

include "../Tareas4/GetEmpresas.php"

?>
<div class="container mt-4">
<div class="row">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre de la Empresa</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Contacto</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($worker as $dato) {
    ?>

    <tr>
      <th scope="row"><?php echo $dato-> Id_Empresa?></th>
      <td><?php echo $dato->N_Empresa ?></td>
      <td><?php echo $dato->Descripcion ?></td>
      <td><?php echo $dato->Contacto ?></td>
    </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
</div>
</div>

<div class="card mb-5 mt-5 mx-5">
<div class="card-header"> Ingrese los datos de Socio. </div>
  <form action="../Tareas4/RegisterB.php" method="POST">
    <div class="m-4">
      <label>Nombre de la Empresa</label>
      <input class="form-control" type="text" placeholder="Ingrese nombre" name="InputN_Empresa" required>
    </div>
    <div class="m-4">
      <label>Descripcion</label>
      <input class="form-control" type="text" placeholder="Ingrese nombre" name="InputDescripcion" required>
    </div>
    <div class="m-4">
      <label>Contacto</label>
      <input class="form-control" type="text" placeholder="Ingrese nombre" name="InputContacto" required>
    </div>
    <input type="submit" class="btn btn-primary m-2" value="Registrar">
  </form>
</div>
</div>
