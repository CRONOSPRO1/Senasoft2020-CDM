<?php
require_once 'conexion.php';
class categoria
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }

    public function actualizar($datos){
        $stmt=$this->conexion->conectar()->prepare("UPDATE sucursal SET direccion=:direccion nombre=:nombre WHERE idsucursal=:idsucursal");
        $stmt->bindParam(":direccion",$datos['direccion'],PDO::PARAM_STR);
        $stmt->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
        $stmt->bindParam(":idsucursal",$datos['idsucursal'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function insertar($datos){
        $stmt=$this->conexion->conectar()->prepare("INSERT INTO sucursal (nombre,direccion)VALUES(:nombre,:direccion) ");
        $stmt->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
        $stmt->bindParam(":direccion",$datos['direccion'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($datos){
        $stmt=$this->conexion->conectar()->prepare("DELETE FROM sucursal WHERE idsucursal=:idsucursal ");
        $stmt->bindParam(":idsucursal",$datos['idsucursal'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function listar(){
        $stmt=$this->conexion->conectar()->prepare("SELECT FROM sucursal ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }








?>