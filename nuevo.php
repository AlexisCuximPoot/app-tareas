<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi
    v="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Nueva tarea</title>
</head>
<body>
    <div class="cabecera">
        <h1>Nueva tarea</h1>
    </div>

    <div class="formulario">
        <form method="post" action="act_nuevo.php">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre"><br>
            <label for="descripcion">descripcion</label><br>
            <textarea name="descripcion"></textarea> <br>
    
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>