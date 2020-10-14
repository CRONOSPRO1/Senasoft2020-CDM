<?php
require_once 'config/parameters.php';
require_once'modelo/clin_pro.php';
require_once'modelo/Admin.php';
class AdministradorController{
    public $model_clipro;
    public $model_admin;


    public function __construct()
    {
        $this->model_clipro;new clin_pro();
        $this->model_admin;new admin();
    }
    public function index(){
        require_once'View/modulos/acceso/index.php';
    }
    public function registro()
    {
        if (!empty($_POST['']) &&  !empty($_POST[''] ) {
            $this->datos[''] = $_POST[''];

            $resultado=$this->model->insertar($this->datos);

            if ($resultado == 1) {
                echo '<script>alert("Ya estas registrado,puedes iniciar sesion")</script>';
                //ruta si se registro
                require_once 'view/index.php';
            } else {
                echo '<script>alert("Usuario no registrado")</script>';
                //ruta si no se pudo registrar
                require_once 'view/register.php';
            }
        } else {
            //retornar al formulario si no puso todos los datos
        }
    }
    
    
    





}
?>