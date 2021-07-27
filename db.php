<?php

// DB CREDENCIALES DE USUARIO.
define('DB_HOST','127.0.0.1');
define('DB_USER','root');
define('DB_PASS','1234');
define('DB_NAME','tareas');

// Ahora, establecemos la conexión.
try
{
    // Ejecutamos las variables y aplicamos UTF8
    $connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
