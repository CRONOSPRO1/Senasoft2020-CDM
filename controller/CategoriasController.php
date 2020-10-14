<?php
require_once 'modelo/categorias.php';
require_once 'config/parameters.php';
class CategoriasController
{
    public $model;
    public $session;
    public $datos;


    public function __construct()
    {
        $this->model = new categorias();
        $this->session = session_start();
        $this->datos = array();
    }
    public function index(){
        require_once'view/admin/categorias.php';
    }
    public function crear_categoria(){
        require_once'view/admin/crear-categoria.php';
    }
    public function guardar()
    {
        if (!empty($_POST)) {
            $this->datos['nombre'] = $_POST['nombre'];
            $this->datos['descripcion'] = $_POST['descripcion'];
    
            $this->model->insertar($this->datos);
            require_once 'view/admin/categorias.php';
        }else{
            require_once 'view/admin/categorias.php';
        }
        }
        
    public function eliminar()
    {
        $this->datos['idcategoria'] = $_REQUEST['idcategoria'];
        $this->model->eliminar($this->datos);

        require_once 'view/admin/categorias.php';
    }
    public function actualizar()
    {
        $this->datos['idcategoria'] = $_POST['idcategoria'];
        $this->datos['nombre'] = $_POST['nombre'];
        $this->datos['descripcion'] = $_POST['descripcion'];

        $this->model->actualizar($this->datos);

        require_once 'view/admin/categorias.php';
    }
}
