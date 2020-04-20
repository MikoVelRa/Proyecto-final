<?php
namespace Utel\Util;

use PDO;
use PDOException;

class DataSource{
    public static function getConnection(){
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=tiendita', 'miko', 'sicual');
            return $conexion;
        } catch (PDOException $p) {
            //TODO: Implementar archivo de errores.
        }
    }
}

?>