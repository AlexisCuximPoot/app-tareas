<?php

include 'conexion.php';

try {
    $consulta = "UPDATE tareas SET nombre = :nombre, descripcion = :descripcion WHERE id = :id";
    
    $sql = $conexion->prepare($consulta);
    $sql->bindParam(':id', $_GET['id'], PDO::PARAM_INT, 25);
    $sql->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR, 25);
    $sql->bindParam(':descripcion', $_POST['descripcion'], PDO::PARAM_STR, 100);
    $sql->execute();

    header("Location: index.php");
} catch (\Throwable $th) {
    echo $th->getMessage();
    var_dump($th->getMessage());die();
}
?>
