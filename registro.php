<!DOCTYPE html>
<html lang="en" class="light-theme">

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
   }

   form {
      display: grid;
      grid-template-rows: repeat(3, max-content);
      padding: 15px;
      background-color: #FFF;
      border-radius: 8px;
   }

   .form-data {
      max-width: 1100px;
      display: flex;
      gap: 1rem;
      height: max-content;
      padding: 10px;
      border-radius: 12px;
   }

   .form-data>div {
      width: 50%;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      gap: 15px;
   }

   select {
      background-color: #e0e0e0;
      color: #333;
      border: 1px solid #ccc;
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
      <h1>Registro</h1>
      <div class="form-data">
         <div>
            <div>
               <label class="label has-text-warning">Nombre:</label>
               <div class="control">
                  <input class="input is-warning" type="text" placeholder="Nombre" />
               </div>
            </div>
            <div>
               <label class="label has-text-warning">Apellido:</label>
               <div class="control">
                  <input class="input is-warning" type="text" placeholder="Apellido" />
               </div>
            </div>
            <div class="sel">
               <label class="label has-text-warning" for="tipoDocumento">Tipo Doc:</label>
               <select id="tipoDocumento" name="tipoDocumento">
                  <option value="">Seleccione...</option>
                  <option value="cedulaCiudadania">Cédula de Ciudadanía</option>
                  <option value="documentoIdentidad">Documento de Identidad</option>
                  <option value="cedulaCiudadaniaDigital">Cédula de Ciudadanía Digital</option>
                  <option value="registroCivil">Registro Civil</option>
                  <option value="cedulaExtranjeria">Cédula de Extranjería</option>
               </select>
            </div>
            <div>
               <label class="label has-text-warning">Documento:</label>
               <div class="control">
                  <input class="input is-warning" type="text" placeholder="Documento" />
               </div>
            </div>
         </div>
         <div>
            <div>
               <label class="label has-text-warning">Teléfono:</label>
               <div class="control">
                  <input class="input is-warning" type="text" placeholder="Teléfono" />
               </div>
            </div>
            <div>
               <label class="label has-text-warning">Correo:</label>
               <div class="control">
                  <input class="input is-warning" type="text" placeholder="Correo institucional" />
               </div>
            </div>
            <div class="sel">
               <label class="label has-text-warning" for="rol">Rol:</label>
               <select id="rol" name="rol">
                  <option value="">Seleccione...</option>
                  <option value="docente">Docente</option>
                  <option value="estudiante">Estudiante</option>
                  <option value="asesor">Asesor</option>
                  <option value="directivo">Directivo</option>
                  <option value="secretario">Secretario</option>
                  <option value="celador">Celador</option>
                  <option value="personalDeLimpieza">Personal de limpieza</option>
                  <option value="psicologia">Psicología</option>
               </select>
            </div>
            <div>
               <label class="label has-text-warning">Password:</label>
               <div class="control">
                  <input class="input is-warning" type="password" placeholder="Password" />
               </div>
            </div>
         </div>
      </div>
      <button type="submit" class="button is-focused">Registrarse</button>
   </form>
</body>

</html>