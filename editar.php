<?php

include 'conexion.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
}

$id = $_GET['id'];

$sql = "SELECT id, nombre, descripcion FROM tareas WHERE id = $id AND activo = 1;";

$consultaTarea = $conexion->query($sql);
$tarea = $consultaTarea->fetch(PDO::FETCH_ASSOC);

if ($tarea == null) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equi
    v="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Editar tarea</title>
</head>
<body>
    <div class="cabecera">
        <h1>Editar tarea: #<?= $tarea['id'] ?></h1>
    </div>

    <div class="formulario">
        <form method="post" action="act_editar.php?id=<?= $id ?>">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" value="<?= $tarea['nombre'] ?>"><br>
            <label for="descripcion">Descripción</label><br>
            <textarea name="descripcion"><?= $tarea['descripcion'] ?></textarea> <br>
    
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>