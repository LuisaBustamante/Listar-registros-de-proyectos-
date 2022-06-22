<?php
require_once 'config/database.php';
require_once 'core/routes.php';
require_once 'controllers/ProyectoController.php';

if (isset($_GET['controlador'])) {
    $controlador = cargarControlador($_GET['controlador']);
    if(isset($_GET['accion'])){
        cargarAccion($controlador, $_GET['accion']);
    }
    else{
    cargarAccion($controlador, "index");
    }
}
else {
    $controlador = cargarControlador('Proyecto');
    cargarAccion($controlador, "index");
}

?>