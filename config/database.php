<?php
class Conexion{
    public static function conectar(){
        $server = "127.0.0.1";
        $db = "empresa";
        $user = "root";
        $pass = "";
        //Cadena de conexión 
        $conexion= new mysqli($server, $user, $pass, $db);
        if(!$conexion){
            die("Conexion Fallida: ".mysqli_connect_error());
        }
        return $conexion;
    }
}
