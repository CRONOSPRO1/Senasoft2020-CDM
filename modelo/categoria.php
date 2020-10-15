<?php
require_once 'Conexion.php';
class categoria{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function insertar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        
        ("INSERT INTO categoria (nombre, descripcion,condicion)
        values(:nombre,:descripcion,:condicion) ");

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(':condicion', $datos['condicion'], PDO::PARAM_STR);

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("UPDATE categoria SET condicion=0 where idcategoria=:idcategoria");
        $stmt->bindParam(':idcategoria', $datos['id'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("UPDATE categoria SET nombre=:nombre,descripcion=:descripcion WHERE idcategoria=:idcategoria ");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(':idcategoria', $datos['idcategoria'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    
    public function listar_categorias()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM categoria WHERE condicion=1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
