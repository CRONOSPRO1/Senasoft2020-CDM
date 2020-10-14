<?php
require_once 'config/parameters.php';
require_once 'modelo/clin_pro.php';
require_once 'modelo/usuarios.php';
class AdministradorController
{
    public $model_clipro;
    public $model_admin;


    public function __construct()
    {
        $this->model_clipro;
        new clin_pro();
        $this->model_admin;
        new usuarios();
    }
    public function index()
    {
        require_once 'View/modulos/acceso/index.php';
    }
    public function crear_usuario()
    {
        require_once 'view/modulos/acceso/';
    }
    public function categorias()
    {
        require_once 'view/modulos/almacen/categorias.php';
    }
    public function crear_categoria()
    {
        require_once 'view/modulos/almacen/crear_categoria';
    }
    public function crear_producto()
    {
        require_once 'view/modulos/almacen/crear_producto';
    }
    public function productos()
    {
        require_once 'view/modulos/almacen/productos.php';
    }
    public function crear_ingreso()
    {
        require_once 'view/modulos/compras/crear_ingreso.php';
    }
    public function crear_proveedor()
    {
        require_once 'view/modulos/compras/crear_proveedor.php';
    }
    public function ingresos()
    {
        require_once 'view/modulos/compras/ingresos.php';
    }
    public function proveedores()
    {
        require_once 'view/modulos/compras/proveedores.php';
    }
    public function ventas()
    {
        require_once 'view/modulos/ventas/index.php';
    }
    public function clientes()
    {
        require_once 'view/modulos/ventas/clientes.php';
    }
    public function crear_cliente()
    {
        require_once 'view/modulos/ventas/crear_cliente.php';
    }
    public function crear_pedido()
    {
        require_once 'view/modulos/ventas/crear-pedido.php';
    }
    public function crear_sucursal()
    {
        require_once 'view/modulos/ventas/crear-sucursal.php';
    }
    public function pedidos()
    {
        require_once 'view/modulos/ventas/pedidos.php';
    }
    public function sucursales()
    {
        require_once 'view/modulos/ventas/sucursales.php';
    }







    /*public function registro()
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
    }*/
}
