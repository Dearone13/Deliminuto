<!DOCTYPE html>
<html lang="en" class="theme-light">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
   <link rel="stylesheet" href="./css/styles.css">
</head>
<style>
   h1 {
      font-size: 30px;
      font-weight: bold;
      text-align: center;
   }

   body {
      min-height: 100vh;
      display: grid;
      place-items: center;
      background-color: var(--accent-color);
   }


   form {
      display: grid;
      grid-template-rows: max-content 1fr max-content;
      padding: 15px;
      background-color: var(--blue);
      border-radius: 8px;
   }

   .form-data {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: max-content;
      gap: 1rem;
      width: max-content;
      padding: 10px;
      border-radius: 12px;
   }

   .select {
      display: flex;
      gap: 15px;
      justify-content: space-between;
      align-items: center;
   }

   select {
      width: max-content;
      background-color: #e0e0e0;
      color: #333;
      border: 1px solid #ccc;
      padding: 0.5em 1em;
      font-family: Arial, sans-serif;
   }

   select:focus {
      outline: none;
      border-color: #999;
   }

   button {
      margin: 0 auto;
   }
</style>

<body class="theme-light">
   <form action="registro" method="POST">
      <h1>Registro Restaurante</h1>
      <div class="form-data">
         <div class="field">
            <label class="label has-text-warning">Nombre Restaurante:</label>
            <div class="control">
               <input class="input is-warning" type="text" placeholder="Nombre Restaurante" />
            </div>
         </div>
         <div class="field">
            <label class="label has-text-warning">Dirección:</label>
            <div class="control">
               <input class="input is-warning" type="text" placeholder="Dirección" />
            </div>
         </div>
      </div>
      <button type="submit" class="button is-focused">Registrarse</button>
   </form>
</body>

</html>