<?php
class ControladorController
{
    public $model;
    public $datos;
    public $session;

    public function __construct()
    {
        $this->model = new model();
        $this->session = session_start();
    }

    public function registro()
    {
        if (!empty($_POST['']) &&  !empty($_POST[''])) {
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
    public function eliminar()
    {
        if (isset($_POST['id'])) {
            $this->datos['id'] = $_POST['id'];

            $this->model->eliminar($this->datos);

            require_once '';
        } else {
            //Mensaje de no eliminado
        }
    }

    public function actualizar(){
        if (!empty($_POST['']) &&  !empty($_POST[''])){
            $this->datos['']=$_POST[''];

            $this->model->eliminar($this->datos);
        }else{

        }
    }

    public function validar(){
        $variable_usuario = $_POST[''];
        $variable_clave = $_POST[''];

        $resultado = $this->model->validacion($variable_usuario);

        if (!empty($resultado)) {
            $verificacion = password_verify($variable_clave, $resultado[0]['clave']);
            if ($verificacion == 1) {
                //session para el otro modulo
                $_SESSION['varibale id'] = $resultado[0]['varible id'];
                $_SESSION['variable nombre '] = $resultado[0]['variable nombre'];

                //ruta si puso bien el usuario y contraseña
                require_once 'view/admin/usuarios.php';
            } else {

                //si no puso bien las contraseña
                echo '<script>alert("Contraseña incorrecta")</script>';
                require_once 'view/index.php';
            }
        } else {
            //Si el usuario no existe
            echo '<script>alert("Usuario no existe")</script>';
            require_once 'view/index.php';
        }
    }
    
}
