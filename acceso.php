<!doctype html>
<html lang="en" class="theme-light">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Inicio sesión</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
   <link href="css/styles.css" rel="stylesheet">
</head>
<style>
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
</style>

<body>
   <form class="box" id="box_options">
      <div class="field">
         <div class="control">
            <img id="image_access"
               src="https://images.pexels.com/photos/23884575/pexels-photo-23884575/free-photo-of-hombre-mano-comida-sujetando.png?auto=compress&cs=tinysrgb&w=600" />
         </div>
      </div>
      <div class="field">
         <div class="control">
            <label id="title" class=" label has-text-warning">DELIMINUTO</label>
            <button class="button is-warning" id="restaurante">Restaurante</button>
            <dialog id="log_res">
               <form class="box" id="box_login" method="dialog">
                  <div class="field">
                     <label id="title" class=" label has-text-warning">Inicio de sesión restaurante</label>
                     <label class="label has-text-warning">Nombre Restaurante</label>
                     <div class="control">
                        <input class="input is-warning" type="text" placeholder="Nombre Restaurante" />
                     </div>
                  </div>
                  <div class="field">
                     <label class="label has-text-warning">ID Restaurante</label>
                     <div class="control">
                        <input class="input is-warning" type="password" placeholder="ID Restaurante" />
                     </div>
                  </div>
                  <button class="button is-warning">Acceder</button>
               </form>
            </dialog>
            <script>
               const $dialog = document.getElementById("log_res");
               const $chooseR = document.getElementById("restaurante");
               $chooseR.addEventListener("click", () => {
                  $dialog.showModal();
               });
            </script>
            <button class="button is-warning">Cliente</button>
            <p>No tienes una cuenta, <a href="">Registrate gratis</a></p>
         </div>
      </div>
   </form>
</body>

</html>