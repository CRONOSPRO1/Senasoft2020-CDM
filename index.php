<?php 
require_once 'modelo/conexion.php';
require_once 'autoload.php';
require_once 'config/parameters.php';

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller'])  &&  !isset($_GET['action'])) {
    $nombre_controlador = controller_default;
    $_GET['action']="index";
  
} else {

    echo "La pagina que buscas no existe";
    exit();
}
if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo "la pagina que buscas no existe";
    }
} else {
    echo 'La pagina que buscas no existe';
}

?>