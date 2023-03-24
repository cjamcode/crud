<?php

/*
*   En este archivo se contienen los valores necesarios para poder
*   generar la conexión con la base de datos
*/

$driver = "mysql";
$host = "localhost";
$dbname = "crud";
$username = "root";
$password = "";
$charset = "utf8";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

$dsn = $driver . ":host=" . $host . ";dbname=" . $dbname . ";charset=" . $charset;

?>