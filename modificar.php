<?php
include "modelo/conexion.php";
$documento = $_GET["id"];
$sql = $conexion->query("select * from empleados where documento = $documento");
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Platillo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
    body {
      background-color: #f0f0f0; /* Fondo gris claro */
    }

    h1 {
      background-color: #007bff; /* Bloque gigante azul */
      color: white;
      padding: 20px;
      border-radius: 5px;
    }

    form {
      border: 2px solid #00bfff; /* Borde celeste claro */
      background-color: #e0f7ff; /* Fondo celeste claro */
      padding: 20px;
      border-radius: 10px;
    }

    </style>

</head>

<body>
    <form class="col-4 p-2 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary">Modificar Platillo</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "controlador/modificar.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Platillo</label>
        <input type="text" class="form-control" name="platillo" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Categoria</label>
        <select class="form-control" name="sexo" id="sexo" required>
          <option value="" disabled selected style="color: #999;">Seleccione la categoria</option>
          <option value="m">Mexicana</option>
          <option value="f">Asiatica</option>
        </select>
      </div>
            
        <?php }

        ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Platillo</button>
        <a href="Restaurante.php" class="btn btn-primary">Inicio</a>
    </form>
</body>

</html>