<!doctype html>
<html lang="en" class="theme-light">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Inicio sesión</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
   <link href="./css/styles.css" rel="stylesheet">
   <style>
      body {
         display: grid;
         place-content: center;
         position: relative;
      }

      #box_options {
         display: inherit;
         place-items: center;
         grid-template-columns: 1fr 1fr;
         height: 80vh;
         width: 1000px;
      }

      #image_access {
         width: 60vh;
         height: auto;
         border-radius: 10px;
      }

      .container {
         background-color: white;
         border-radius: 15px;
         padding: 15px;
         display: flex;
         gap: 20px
      }

      .btns-action {
         height: max-content;
         margin: auto 0;
      }

      .showLogin,
      #showLoginC {
         position: absolute;
         left: 50%;
         top: 50%;
         transform: translate(-50%, -50%);
         border: none;
         padding: 12px;
         border-radius: 8px;
         box-shadow: 0 0 50px rgb(0, 64, 255, .4);
      }
   </style>
</head>

<body>
   <div class="container">
      <div>
         <div>
            <img id="image_access"
               src="https://images.pexels.com/photos/23884575/pexels-photo-23884575/free-photo-of-hombre-mano-comida-sujetando.png?auto=compress&cs=tinysrgb&w=600" />
         </div>
      </div>
      <div class="btns-action">
         <div class="control">
            <h1 id="title" class="label has-text-warning">DELIMINUTO</h1>
            <button popovertarget="showLogin" class="button is-warning" id="restaurante"
               type="button">Restaurante</button>
            <button popovertarget="showLoginC" class="button is-warning">Cliente</button>
         </div>
      </div>
   </div>
   <div popover id="showLogin" class="showLogin">
      <form method="post" action="acceso.php">
         <div class="field">
            <label id="title" class="label has-text-warning">Inicio de sesión restaurante</label>
            <label class="label has-text-warning">Nombre Restaurante</label>
            <div class="control">
               <input class="input is-warning" type="text" placeholder="Nombre Restaurante" name="Rname" />
            </div>
         </div>
         <div class="field">
            <label class="label has-text-warning">ID Restaurante</label>
            <div class="control">
               <input class="input is-warning" type="password" placeholder="ID Restaurante" name="RID" />
            </div>
         </div>
         <button class="button is-warning" type="submit" id="accessA" name="accederR">Acceder</button>
         <p>No tienes una cuenta, <a href="registro - restaurante.php">Registrate gratis</a></p>
      </form>
   </div>
   <div popover id="showLoginC">
      <form method="post" action="acceso.php">
         <div class="field">
            <label id="title" class=" label has-text-warning">Inicio de sesión</label>
            <label class="label has-text-warning">Id de usuario</label>
            <div class="control">
               <input class="input is-warning" type="text" placeholder="Id de usuario" name="accederID" />
            </div>
         </div>
         <div class="field">
            <label class="label has-text-warning">Contraseña</label>
            <div class="control">
               <input class="input is-warning" type="password" placeholder="Contraseña" name="accederP" />
            </div>
         </div>
         <button class="button is-warning" type="submit" name="accederC">Acceder</button>
         <p>No tienes una cuenta, <a href="">Registrate gratis</a></p>
      </form>
   </div>
   <?php
   require "conexion.php";
   $cnn = new conexion();

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['accederR'])) {
         $Rname = $_POST['Rname'];
         $RID = $_POST['RID'];
         $query = "INSERT INTO LoginRestaurante (Fecha, Restaurante, idRestaurante) VALUES (GETDATE(), '$Rname', '$RID')";
         try {
            $pss = $cnn->getConexion();
            $affectedRows = $pss->exec($query);
            if ($affectedRows === false) {
               throw new PDOException("Error en la inserción.");
            } else {
               $lastInsertId = $pss->lastInsertId();
               echo "<script>console.log('Inserción exitosa. ID insertado: " . $lastInsertId . "');</script>";
            }
         } catch (PDOException $e) {
            $errorMessage = "Error al realizar la inserción.";
            echo "<script>console.log('" . $errorMessage . "');</script>";
         }
      } else if (isset($_POST['accederC'])) {
         $CID = $_POST['accederID'];
         $contrasena = $_POST['accederP'];
         $query = "INSERT INTO LoginUsuario(Fecha, Usuario, Contraseña) VALUES (GETDATE(), '$CID', '$contrasena')";
         try {
            $pss = $cnn->getConexion();
            $affectedRows = $pss->exec($query);
            if ($affectedRows === false) {
               throw new PDOException("Error en la inserción.");
            } else {
               $lastInsertId = $pss->lastInsertId();
               echo "<script>console.log('Inserción exitosa. ID insertado: " . $lastInsertId . "');</script>";
            }
         } catch (PDOException $e) {
            $errorMessage = "Error al realizar la inserción.";
            echo "<script>console.log('" . $errorMessage . "');</script>";
         }

      }
   } else {

   }

   ?>
</body>

</html>