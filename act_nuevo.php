<?php

include 'db.php';

try {
    $consulta = "INSERT INTO tareas (nombre, descripcion) VALUES (:nombre, :descripcion)";
    
    $sql = $connect->prepare($consulta);

    $sql->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR, 25);
    $sql->bindParam(':descripcion', $_POST['descripcion'], PDO::PARAM_STR, 100);
    
    $sql->execute();

    $ultimoId = $connect->lastInsertId();
    if ($ultimoId > 0) {
        header("Location: index.php");
    } else {
        print_r($sql->errorInfo()); 
    }
} catch (\Throwable $th) {
    echo $th->getMessage();
    var_dump($th->getMessage());die();
}

?>

