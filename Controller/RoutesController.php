<?php
require_once 'config/parameters.php';
require_once'modelo/clin_pro.php';
require_once'modelo/usuarios.php';
//Para movernos entre contralores con un header
class RoutesController
{
    public function nombre()
    {
        header('location: ruta');
    }
    public function administrador()
    {
        echo header('location:'.base_url.'Administrador/index');
    }
    


}
