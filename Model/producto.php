<?php
require_once 'conexion.php';
class producto
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function insertar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        
        ("INSERT INTO producto (nombre, descripcion)
        values(:nombre,:descripcion) ");

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("UPDATE producto SET condicion=0 where idproducto=idproducto");
        $stmt->bindParam(':idproducto', $datos['idproducto'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("UPDATE producto SET nombre=:nombre,descripcion=:descripcion WHERE idproducto=:idproducto ");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function validacion($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM producto where idproducto=:idproducto");
        $stmt->bindParam(':idproducto', $datos['idproducto'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function listar_productos()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM productos WHERE condicion=1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
