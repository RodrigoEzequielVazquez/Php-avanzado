<?php 

class Conexion {
    static public function conectar()
    {
        $link = new PDO("mysql:host=localhost;dbname=id21615479_php_avanzado", "id21615479_usuario_php_avanzado", "PHP_avanzado3");
        $link->exec("set names utf8");
        return $link;
    }
}