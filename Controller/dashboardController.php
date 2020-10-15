<?php
require_once 'config/parameters.php';
require_once 'modelo/clin_pro.php';
require_once 'modelo/Usuarios.php';
require_once 'modelo/producto.php';
require_once 'modelo/categoria.php';
require_once 'modelo/notificaciones.php';

class dashboardController
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
    public function almacen()
    {
        require_once 'view/modulos/almacen/productos.php';
    }
    public function categorias()
    {
        require_once 'view/modulos/almacen/categorias.php';
    }
    public function crear_categoria()
    {
        require_once 'view/modulos/almacen/crear-categoria.php';
    }
    public function crear_producto()
    {
        require_once 'view/modulos/almacen/crear-producto.php';
    }
    public function productos()
    {
        require_once 'view/modulos/almacen/productos.php';
    }
    public function crear_ingreso()
    {
        require_once 'view/modulos/compras/crear-ingreso.php';
    }
    public function crear_proveedor()
    {
        require_once 'view/modulos/compras/crear-proveedor.php';
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
        require_once 'view/modulos/ventas/crear-cliente.php';
    }
    public function compras()
    {
        require_once 'view/modulos/compras/ingresos.php';
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
        if (!empty($_POST['idusuario']) && !empty($_POST['email'])) {
            # code...
        }
        $this->datos['idusuario'] = $_POST['idusuario'];
        $this->datos['direccion']       = $_POST['direccion'];
        $this->datos['telefono']        = $_POST['telefono'];
        $this->datos['email']           = $_POST['email'];

        $this->model_admin->actualizar($this->datos);
        require_once 'view/modulos/acceso/index.php';
    }

    public function notificarProducto()
    {
        $this->model_notificaciones->notificarProducto10();
    }
    public function guardar_categorias()
    {
        if (!empty($_POST['descripcion']) && !empty($_POST['nombre'])) {
            $this->datos['descripcion'] = $_POST['descripcion'];
            $this->datos['nombre'] = $_POST['nombre'];
            $this->datos['condicion'] = 1;

            $this->model_categoria->insertar($this->datos);
            require_once 'view/modulos/almacen/categoria.php';
        }
    }
    public function eliminarCa()
    {
        if (!empty($_GET['id'])) {
            $this->datos['id'] = $_REQUEST['id'];
            $this->model_categoria->eliminar($this->datos);

            require_once 'view/modulos/almacen/categorias.php';
        } else {
            require_once 'view/modulos/almacen/categorias.php';
        }
    }
    public function actualizar_categoria()
    {
        if (!empty($_POST['descripcion']) && !empty($_POST['nombre'])) {
            $this->datos['idcategoria'] = $_POST['idcategoria'];
            $this->datos['descripcion'] = $_POST['descripcion'];
            $this->datos['nombre'] = $_POST['nombre'];
            $this->datos['condicion'] = 1;

            $this->model_categoria->actualizar($this->datos);
            require_once 'view/modulos/almacen/categorias.php';
        } else {
            echo '<script>alert("Debe llenar todos los campos")</script>';
            require_once 'view/modulos/almacen/categorias.php';
        }
    }


    /* Aqui va la CRUD de proveedor */

    public function guardar_proveedor()
    {
        if (!empty($_POST['nombre']) && !empty($_POST['Apellido']) && $_POST['tipo_documento'] && !empty($_POST['no_documento']) && !empty($_POST['direccion']) && !empty($_POST['telefono']) && !empty($_POST['email'])) {
            
            $this->datos['tipo'] = 'Proveedor';
            $this->datos['nombre'] = $_POST['nombre'];
            $this->datos['Apellido'] = $_POST['Apellido'];
            $this->datos['tipo_documento'] = $_POST['tipo_documento'];
            $this->datos['no_documento'] = $_POST['no_documento'];
            $this->datos['direccion'] = $_POST['direccion'];
            $this->datos['telefono'] = $_POST['telefono'];
            $this->datos['email'] = $_POST['email'];

            $this->model_clipro->insertar($this->datos);
            require_once 'view/modulos/compras/proveedores.php';
        }else {
            echo '<script>alert("Error, ocurrio algo inesoperado")</script>';
            require_once 'view/modulos/compras/proveedores.php';
        }
    }
    public function eliminarPro()
    {
        if (!empty($_GET['id'])) {
            $this->datos['id'] = $_REQUEST['id'];
            $this->model_clipro->eliminar($this->datos);

            require_once 'view/modulos/compras/proveedores.php';
        } else {
            require_once 'view/modulos/compras/proveedores.php';
        }
    }
    public function actualizar_proveedor()
    {
        if (!empty($_POST['id']) && !empty($_POST['Apellido']) && $_POST['tipo_documento'] && !empty($_POST['direccion']) && !empty($_POST['telefono']) && !empty($_POST['email'])) {
            
            $this->datos['id'] = $_POST['id'];
            $this->datos['nombre'] = $_POST['nombre'];
            $this->datos['Apellido'] = $_POST['Apellido'];
            $this->datos['tipo_documento'] = $_POST['tipo_documento'];
            $this->datos['direccion'] = $_POST['direccion'];
            $this->datos['telefono'] = $_POST['telefono'];
            $this->datos['email'] = $_POST['email'];

            $this->model_clipro->actualizar($this->datos);
            require_once 'view/modulos/compras/proveedores.php';
        } else {
            echo '<script>alert("Debe llenar todos los campos")</script>';
            require_once 'view/modulos/compras/proveedores.php';
        }
    }

    public function guardar_producto(){

    }
    public function eliminar_producto(){
    $this->datos['idproducto']=$_REQUEST['idp'];
    
    $this->model_producto->eliminar($this->datos);

    require_once'view/modulos/almacen/productos.php';
    }
    
    public function actualizar_producto(){
    
    }
}
