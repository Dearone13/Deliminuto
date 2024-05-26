<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["documento"]) and !empty($_POST["nombre"]) and !empty($_POST["sexo"]) and !empty($_POST["domicilio"]) and !empty($_POST["fechaingreso"]) and !empty($_POST["fechanacimiento"]) and !empty($_POST["sueldobasico"])) {
        include "modelo/conexion.php";
        
        $documento = $_POST["documento"];
        $nombre = $_POST["nombre"];
        $sexo = $_POST["sexo"];
        $domicilio = $_POST["domicilio"];
        $fechaingreso = $_POST["fechaingreso"];
        $fechanacimiento = $_POST["fechanacimiento"];
        $sueldobasico = $_POST["sueldobasico"];
        
        $checkSql = $conexion->query("select documento from empleados where documento = $documento");
        
        if ($checkSql->num_rows > 0) {
            echo '<div class="alert alert-danger">El documento ya existe. Por favor, use otro documento.</div>';
        } else {
            $sql = $conexion->query("insert into empleados (documento, nombre, sexo, domicilio, fechaingreso, fechanacimiento, sueldobasico) values ($documento, '$nombre', '$sexo', '$domicilio', '$fechaingreso', '$fechanacimiento', $sueldobasico)");
            if ($sql == 1) {
                echo '<div class="alert alert-success">Usuario registrado exitosamente.</div>';
            } else {
                echo '<div class="alert alert-danger">Error al registrar el usuario. Por favor, intente nuevamente.</div>';
            }
        }
    } else {
        echo '<div class="alert alert-warning">Por favor, complete todos los campos.</div>';
    }
}
?>