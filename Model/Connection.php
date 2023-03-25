<?php

/**
 *  Este archivo contiene la conexion con la base de datos
 */

class Connection{
    public static function Connection(){
        try {
            //se requiere el archivo ./Config/Config.php
            require("./Config/Config.php");

            $con = new PDO($dsn, $username, $password, $options);

            return $con;

        } catch (Exception $e) {
            echo "Error message: " . $e->getMessage() . "<br>";
            echo "Error code: " . $e->getCode() . "<br>";
            echo "Error line: " . $e->getLine() . "<br>";
            die();
        }
    }
}

?>