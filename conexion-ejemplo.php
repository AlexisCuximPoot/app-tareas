<?php

// DB CREDENCIALES DE USUARIO.
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');

// Ahora, establecemos la conexión.
try {
    // Ejecutamos las variables y aplicamos UTF8
    $conexion = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
