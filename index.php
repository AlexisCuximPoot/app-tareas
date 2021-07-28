<?php
    include 'act_busqueda.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App de tareas</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

    <div class="cabecera">
        <h1>Lista de tareas</h1>
        <a href="nuevo.php">Agregar</a>
    </div>
    <section>
        <?php foreach ($busqueda as $registro) { ?>
            <div class="tarea">
                <div class="nombre"><p><?= $registro['nombre'] ?></p></div>
                <div class="descripcion"><p><?= $registro['descripcion'] ?></p></div>
                <div class="acciones">
                    <button>Editar</button>
                    <button>Borrar</button>
                </div>
            </div>
        <?php } ?>
    </section>
</body>
</html>