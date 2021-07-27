<?php

    include 'db.php';

    $sql = "SELECT id, nombre, descripcion FROM tareas;";

    $busqueda=$connect->query("$sql");
    /*$datos=$busqueda->fetchAll(PDO::FETCH_ASSOC);*/

?>