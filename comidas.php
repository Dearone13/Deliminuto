<!DOCTYPE html>
<html lang="en" class="theme-light">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Comidas</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
   <script src="https://kit.fontawesome.com/457bda309b.js" crossorigin="anonymous"></script>

   <style>
      body {
         background-color: #f0f0f0;
         /* Fondo gris claro */
      }

      h1 {
         background-color: #007bff;
         /* Bloque gigante azul */
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
         margin-left: 20px;
      }

      table,
      #combos,
      #PlatilloT {
         margin-left: 85px;
         /* Separación de 10px hacia la izquierda */
      }

      #user_data {
         height: 85vh;
      }

      #PlatilloT {
         height: 70px;
         width: 855px;
         font-size: 30px
      }
   </style>

</head>

<body>
   <h1 class="text-center p-3 text-warning">DELIMINUTO</h1>
   <div class="container-fluid row">
      <form class="col-3 p-4" id="user_data" method="POST">
         <h3 class="text-center text-secondary text-warning">FACTURA</h3>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            <p class="form-control" name="documento" required></p>
            <p class="form-control" name="documento" required></p>
         </div>
         <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Generar total</button>
         <a href="Consultas.php" class="btn btn-primary">Generar factura</a>
      </form>
      <div class="col-8 p-1">
         <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="combos">
            <option>Combo 1</option>
            <option>Combo 2</option>
            <option>Combo 3</option>
         </select>
         <h1 class="text-bg-primary p-3" id="PlatilloT">Platillos</h1>
         <table class="table">
            <thead class="bg.info">
               <tr>
                  <th scope="col">PLATILLO</th>
                  <th scope="col">PRECIO</th>
                  <th scope="col"></th>
               </tr>
            </thead>
            <tbody>
               <!--
          Aquí deberías agregar las filas de la tabla manualmente o mediante JavaScript si tienes los datos en el frontend.
          Ejemplo:
          <tr>
            <td>Platillo 1</td>
            <td>Precio 1</td>
            <td>
              <a href="#" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
              <a href="#" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
          -->
            </tbody>
         </table>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>