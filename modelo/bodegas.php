<?php
require_once 'conexion.php';
class bodegas
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function insertar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        
        ("INSERT INTO bodegas (nombre, direccion)
        values(:nombre,:direccion) ");

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $datos['direccion'], PDO::PARAM_STR);     
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($id)
    {
        $stmt = $this->conexion->conectar()->prepare("DELETE FROM bodegas where idbodegas=:idbodegas ");
        $stmt->bindParam(':idbodegas', $id, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("UPDATE bodegas SET nombre=:nombre,direccion=:direccion WHERE idbodegas=:idbodegas ");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $datos['direccion'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function validacion($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM bodegas where idbodegas=:idbodegas");
        $stmt->bindParam(':idbodegas', $datos['idbodegas'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function listar_bodegas()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM bodegas");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
