<?php
class ProyectoController{
    public function __construct(){
        require_once 'models/proyecto.php';
    }
    //Listar los proyectos
    public function index(){
        $proyectos = new Proyecto();
        $data['titulo'] = "Proyectos";
        $data['proyectos'] = $proyectos->listar();

        //Cargar la vista
        require_once 'views/proyectos/index.php';

    }

    //Metodo para mostrar la vista que presente el formulario
    public function insert(){
        $data['titulo'] = "Crear Proyecto";
        //Mostrar la vista
        require_once 'views/proyectos/insert.php';
        }

    //Guardar la información en la DB
    public function store(){

        //Recibir los datos del formulario
        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];

        //TODO: Realizar validaciones
        //Guardar el registro en la DB
        $proyecto = new Proyecto();//Instanciar el modelo
        $proyecto->insert($nombre, $duracion);

        //Enviar a la vista index
        $this->index();
    }   
}
?>