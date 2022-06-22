<?php
function cargarControlador($controlador){
    $nombreControlador = ucwords($controlador)."Controller";
    $archivoControlador = "controllers/$nombreControlador.php";
    //Si no existe el archivo
    if(!is_file($archivoControlador)){
        //Cargar el controlador por defecto
        $archivoControlador = "controllers/ProyectoController.php";
    }
    require_once $archivoControlador;
    $control = new $nombreControlador();
    return $control;
}

function cargarAccion($controlador, $accion){
    //Revisar que la accion no sea nula y el metodo exista en el controlador
    if(isset($accion) && method_exists($controlador, $accion)){
        $controlador->$accion();
    }else{
        //Ejecutar la accion principal
        $controlador->index();
    }
}
?>