<?php
if (!empty($_POST["btnregistrar"])) {
  if (!empty($_POST["nombre"])and !empty($_POST["sexo"])and !empty($_POST["domicilio"])and !empty($_POST["fechaingreso"])and !empty($_POST["fechanacimiento"])and !empty($_POST["sueldobasico"])) {
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $sexo=$_POST["sexo"];
    $domicilio=$_POST["domicilio"];
    $fechaingreso=$_POST["fechaingreso"];
    $fechanacimiento=$_POST["fechanacimiento"];
    $sueldobasico=$_POST["sueldobasico"];

    $sql = $conexion->query("update empleados set nombre ='$nombre', sexo='$sexo', domicilio ='$domicilio', fechaingreso ='$fechaingreso',fechanacimiento='$fechanacimiento', sueldobasico=$sueldobasico where documento =$id");
    if ($sql ==1) {
        header("location:index.php");
    } else {
      echo '<div class="alert alert-warning">usuario no modificado</div>';
    }
    
  }else{
    echo '<div class="alert alert-warning">No puede haber campos vacios</div>';
  }
}
?>