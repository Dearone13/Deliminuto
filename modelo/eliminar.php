<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql = $conexion->query(" delete from empleados where documento = $id ");
    if ($sql==1) {
        echo '<div class="alert alert-danger">Usuario eliminado</div>';
    } else {
        echo '<div>Usuario no eliminado</div>';
    }
    
}
?>