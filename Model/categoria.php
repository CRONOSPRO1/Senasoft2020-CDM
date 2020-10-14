<?php
require_once 'conexion.php';
class categoria
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function insertar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        
        ("INSERT INTO categoria (nombre, descripcion)
        values(:nombre,:descripcion) ");

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("UPDATE categoria SET condicion=0 where idcategoria=idcategoria");
        $stmt->bindParam(':idcategoria', $datos['idcategoria'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("UPDATE categoria SET nombre=:nombre,descripcion=:descripcion WHERE idcategoria=:idcategoria ");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    
    public function listar_categorias()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM categorias WHERE condicion=1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
