<?php
class Conexion{
    private static $con = null;

    public static function getConection():PDO{
        if (self::$con == null){

            //Conseguir cadena de conexión
            self::$con = new PDO("mysql:host=localhost;dbname=Prueba",'root','root');
        }
        return self::$con;
    }

}