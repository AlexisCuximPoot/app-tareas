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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <div class="cabecera">
            <h1>Lista de tareas</h1>
            <a href="nuevo.php"><i class="fa fa-plus"></i> Agregar</a>
        </div>
        <section>
            <?php foreach ($tareas as $tarea) { ?>
                <div class="tarea">
                    <div class="nombre">
                        <p><?= $tarea['nombre'] ?></p>
                    </div>
                    <div class="descripcion">
                        <p><?= $tarea['descripcion'] ?></p>
                    </div>
                    <div class="acciones">
                        <button>
                            <i class="fa fa-edit"></i> Editar
                        </button>
                        <button>
                            <i class="fa fa-times"></i> Borrar
                        </button>
                    </div>
                </div>
            <?php } ?>
        </section>
    </body>
</html>