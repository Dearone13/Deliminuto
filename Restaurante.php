<!DOCTYPE html>
<html lang="en" theme="light-theme">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurante</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/457bda309b.js" crossorigin="anonymous"></script>

  <style>
    body {
      background-color: #f0f0f0;
      /* Fondo gris claro */
    }

    h1 {
      background-color: #007bff;
      /* Bloque gigante azul */
      color: yellow;
      padding: 20px;
      border-radius: 5px;
    }

    form {
      border: 2px solid #00bfff;
      /* Borde celeste claro */
      background-color: #e0f7ff;
      /* Fondo celeste claro */
      padding: 20px;
      border-radius: 10px;
    }

    table {
      margin-left: 85px;
      /* Separación de 10px hacia la izquierda */
    }
  </style>

</head>

<body>
  <h1 class="text-center p-3">Deliminuto</h1>
  <div class="container-fluid row">
    <form class="col-3 p-4" method="POST">
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

        <?php
        // require para la conexión a la base de datos
        require "conexion.php";
        $cnn = new conexion();
        $pps = $cnn->getConexion()->prepare("SELECT * FROM categoriaDeComida");
        $pps->execute();
        ?>

        <select class="form-control" name="categoria" id="categoria" required>
          <option value="" disabled selected style="color: #999;">Seleccione la categoria</option>
          <?php
          // Bucle para recorrer las categorías obtenidas de la base de datos
          while ($datos = $pps->fetchObject()) {
            echo '<option value="' . $datos->idCategoriaDeComida . '">' . $datos->Categoria . '</option>';
          }
          ?>
        </select>

      </div>
      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Agregar</button>
    </form>
    <div class="col-8 p-1">
      <table class="table">
        <thead class="bg.info">
          <tr>
            <th scope="col">idPlatillo</th>
            <th scope="col">Platillo</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoria</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $cnn1 = new conexion();
          $pps1 = $cnn1->getConexion()->prepare("SELECT * FROM platillos");
          $pps1->execute();
          while ($datos = $pps1->fetchObject()) {
            ?>
            <tr>
              <td><?= $datos->idPlatillos ?></td>
              <td><?= $datos->nombredelplatillo ?></td>
              <td><?= $datos->precio ?></td>
              <td><?= $datos->idCategoriaDeComida ?></td>
              <td>
                <a href="modificar.php?id=<?= $datos->idPlatillos ?>" class="btn btn-small btn-warning"><i
                    class="fa-solid fa-pen-to-square"></i></a>
                <a href="Restaurante.php?id=<?= $datos->idPlatillos ?>" class="btn btn-small btn-danger"><i
                    class="fa-solid fa-trash"></i></a>
              </td>
            </tr>
          <?php }
          ?>
        </tbody>
      </table>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>