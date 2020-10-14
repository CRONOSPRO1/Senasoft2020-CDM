<?php
require_once 'conexion.php';
class inventario
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function insertar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        
        ("INSERT INTO inventario (idproveedor, no_comprobante, fecha_hora)
        values(:idproveedor,:no_comprobante,NOW()) ");

        $stmt->bindParam(':idproveedor', $datos['idproveedor'], PDO::PARAM_INT);
        $stmt->bindParam(':no_comprobante', $datos['no_comprobante'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($id)
    {
        $stmt = $this->conexion->conectar()->prepare("DELETE FROM inventario where idinventario=:idinventario ");
        $stmt->bindParam(':idinventario', $id, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("UPDATE inventario SET idproveedor=:idproveedor,no_comprobante=:no_comprobante WHERE idcategoria=:idcategoria ");
        $stmt->bindParam(':idproveedor', $datos['idproveedor'], PDO::PARAM_STR);
        $stmt->bindParam(':no_comprobante', $datos['no_comprobante'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function validacion($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM inventario where idinventario=:idinventario");
        $stmt->bindParam(':idinventario', $datos['idinventario'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function listar_inventario()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM inventario");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
