<?php
require_once 'config/parameters.php';
require_once 'modelo/clin_pro.php';
require_once 'modelo/Usuarios.php';
require_once 'modelo/producto.php';
require_once 'modelo/categoria.php';
require_once 'modelo/notificaciones.php';

class AdministradorController
{
    public $model_clipro;
    public $model_admin;
    public $model_producto;
    public $model_categoria;
    public $model_notificaciones;

    public function __construct()
    {
        $this->model_clipro = new clin_pro();
        $this->model_admin = new usuarios();
        $this->model_producto = new producto();
        $this->model_categoria = new categoria();
        $this->model_notificaciones = new notificacion();
    }
    public function index()
    {
        require_once 'View/modulos/acceso/index.php';
    }
    public function crear_usuario()
    {
        require_once 'view/modulos/acceso/crear-usuario.php';
    }
    public function almacen(){
require_once'view/modulos/almacen/productos.php';
    }
    public function categorias()
    {
        require_once 'view/modulos/almacen/categorias.php';
    }
    public function crear_categoria()
    {
        require_once 'view/modulos/almacen/crear_categoria.php';
        echo "ruta categoria";
    }
    public function crear_producto()
    {
        require_once 'view/modulos/almacen/crear_producto.php';
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
        require_once 'view/modulos/ventas/clientes.php';
    }
    public function clientes()
    {
        require_once 'view/modulos/ventas/clientes.php';
    }
    public function crear_cliente()
    {
        require_once 'view/modulos/ventas/crear_cliente.php';
    }
    public function compras(){
        require_once'view/modulos/compras/ingresos.php';
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

    public function registrar_usuario()
    {
        if (isset($_POST) & !empty($_POST)) {

            $this->datos['rol'] = $_POST['rol'];

            $this->datos['rol'] = $_POST['rol'];
            $this->datos['nombre']          = $_POST['nombre'];
            $this->datos['tipo_documento']  = $_POST['tipo_documento'];
            $this->datos['no_documento']    = $_POST['no_documento'];
            $this->datos['direccion']       = $_POST['direccion'];
            $this->datos['telefono']        = $_POST['telefono'];
            $this->datos['email']           = $_POST['email'];

            $this->datos['clave'] = $_POST['no_documento'];
            $this->datos['clave'] = password_hash($this->datos['clave'], PASSWORD_BCRYPT);

            $this->model_admin->insertar($this->datos);

            require_once 'view/modulos/acceso/index.php';
        }
    }

    public function Eliminar_usuarios()
    {
        $this->datos['id'] = $_REQUEST['id'];

        $this->model_admin->eliminar($this->datos);
        require_once 'view/modulos/acceso/index.php';
    }
    public function Actualizar_Usuario()
    {
        $this->datos['idusuario'] = $_POST['idusuario'];
        $this->datos['direccion']       = $_POST['direccion'];
        $this->datos['telefono']        = $_POST['telefono'];
        $this->datos['email']           = $_POST['email'];

        $this->model_admin->actualizar($this->datos);
        require_once'view/modulos/acceso/index.php';
    }

    public function notificarProducto(){
        $this->model_notificaciones->notificarProducto10();
    }
}
