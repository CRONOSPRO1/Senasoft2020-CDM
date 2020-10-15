<?php
require_once 'config/parameters.php';
require_once 'modelo/clin_pro.php';
require_once 'modelo/Usuarios.php';
require_once 'modelo/producto.php';

class PrincipalController
{
    public $model_clipro;
    public $model_admin;
    public $model_producto;

    public function __construct()
    {
        $this->model_clipro = new clin_pro();
        $this->model_admin = new usuarios();
        $this->model_producto = new producto();
    }
    public function index()
    {
        require_once 'view/index.php';
    }
    public function actualizar()
    {
        if (!empty($_POST['']) &&  !empty($_POST[''])) {
            $this->datos[''] = $_POST[''];

            $this->model->eliminar($this->datos);
        } else {
        }
    }
    public function crear_administrador()
    {
        $this->datos['tipo_documento'] = "Cedula";
        $this->datos['no_documento'] = "123456789";
        $this->datos['nombre'] = "Demo";
        $this->datos['email'] = "email";
        $this->datos['administrador'] = "Administrador";
        $this->datos['clave'] = "senasoft";
        $this->datos['clave'] = password_hash($this->datos['clave'], PASSWORD_BCRYPT);
        var_dump($this->datos);



        $this->model_admin->insertar($this->datos);
    }
    public function validar()
    {
        if (!empty($_POST['no_documento']) && !empty($_POST['clave'])) {
            $no_documento = $_POST['no_documento'];
            $clave = $_POST['clave'];

            $resultado = $this->model_clipro->validacion($no_documento);

            if (!empty($resultado)) {
                $verificacion = password_verify($clave, $resultado[0]['clave']);
                if ($verificacion == 1) {
                    //session para el otro modulo
                    $_SESSION['id_vendedor'] = $resultado[0]['id'];
                    $_SESSION['Nombre_vendedor'] = $resultado[0]['nombre'];

                    //ruta si puso bien el usuario y contraseña
                    echo "session de un proveedor";
                } else {

                    //si no puso bien las contraseña
                    echo '<script>alert("Contraseña incorrecta")</script>';
                    require_once 'view/index.php';
                }
            } else {
                $resultado = $this->model_admin->validacion($no_documento);

                if (!empty($resultado)) {
                    $verificacion = password_verify($clave, $resultado[0]['clave']);
                    if ($verificacion == 1) {

                        if ($resultado[0]['rol'] == "Administrador") {
                            //session para el otro modulo
                            $_SESSION['id_admin'] = $resultado[0]['id_admin'];
                            $_SESSION['nombre'] = $resultado[0]['nombre'];
                            echo "Admin";
                            header('location:' . base_url . 'administrador/index');
                        } else {
                            $_SESSION['id_usuario'] = $resultado[0]['id_usuario'];
                            $_SESSION['nombre'] = $resultado[0]['nombre'];
                            header('location:' . base_url . 'administrador/sucursales');
                        }
                        //ruta si puso bien el usuario y contraseña
                    }
                } else {
                    //Si el usuario no existe
                    echo '<script>alert("Usuario no existe")</script>';
                    require_once 'view/index.php';
                   
                }
            }
        }
        echo '<script>alert("Debe llenar todos los campos")</script>';
        require_once 'view/index.php';

    }

    public function facturapdf(){
        require_once 'assets/pdf/factura.php';
    }
}
