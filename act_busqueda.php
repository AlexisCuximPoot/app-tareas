<?php
    include 'conexion.php';

    $sql = "SELECT id, nombre, descripcion FROM tareas WHERE activo = 1;";

    $busquedaTareas = $conexion->query($sql);
    $tareas = $busquedaTareas->fetchAll(PDO::FETCH_ASSOC);
?>