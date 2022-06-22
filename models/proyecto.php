<?php
class Proyecto{
    //Atributos
    private $db;
    private $proyectos;

    //Constructor
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->proyectos = array();
    }

    //Listar todos los registros de proyectos
    public function listar(){
       $sql = "SELECT * FROM proyecto";
       //Ejecutar la consulta
       $resultado = $this->db->query($sql);
       //Si falla la consulta
       if(!$resultado){
           echo "Lo sentimos, este sitio presenta mantenimiento.";
           //ojo no hacer esto cuando la apliacion este en produccion!!!
           echo "Error: La ejecucion fallo debido a: \n";
           echo "Query: $sql \n";
           echo "Errno: $mysqli->errno \n";
           echo "Error: $mysqli->error \n";
           exit;
       }
         while($row=$resultado->fetch_assoc()){
             $this->proyectos[] = $row;
         }
         return $this->proyectos;
    }

    //Insertar un nuevo registro
    public function insert($nombre, $duracion){
        $sql = "INSERT INTO proyecto (nombre, duracion) VALUES ('$nombre', '$duracion')";
        //Ejecutar la consulta
        $this->db->query($sql);
        //Si falla la consulta
       
    }
}
