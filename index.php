<?php /*require_once'modelo/conexion.php'; 
require_once'config/parameters.php';


$controller='Usuarios';
if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.Controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['controller']);
    $accion = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'Index';

    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}
*/

?>
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

?>