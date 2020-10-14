<?php
require_once 'conexion.php';
class productos
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
   }
   public function insertar($datos)
   {
       $stmt = $this->conexion->conectar()->prepare
       ("INSERT INTO productos (idcategoria,codigo,nombre,descripcion,imagen,estado)
       values(:idcategoria,:codigo,:nombre,:descripcion,:imagen,:estado) ");
       $stmt->bindParam(':idcategoria', $datos['idcategoria'], PDO::PARAM_INT);
       $stmt->bindParam(':codigo', $datos['codigo'], PDO::PARAM_STR);
       $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
       $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
       $stmt->bindParam(':imagen', $datos['imagen'], PDO::PARAM_STR);
       $stmt->bindParam(':estado', 'Activo', PDO::PARAM_STR);
       $stmt->execute();
       $stmt->closeCursor();
   }

   public function eliminar($id)
   {
       $stmt = $this->conexion->conectar()->prepare
       ("DELETE FROM productos where idproducto=:idproducto");
       $stmt->bindParam(':idproducto', $id, PDO::PARAM_INT);
       $stmt->execute();
       $stmt->closeCursor();
   }
   public function actualizar($datos)
   {
       $stmt = $this->conexion->conectar()->prepare
       ("UPDATE productos SET idcategoria=:idcategoria,codigo=:codigo,nombre=:nombre,descripcion=:descripcion,imagen=:imagen WHERE idproducto=:idproducto ");
       $stmt->bindParam(':idcategoria', $datos['idcategoria'], PDO::PARAM_INT);
       $stmt->bindParam(':codigo', $datos['codigo'], PDO::PARAM_STR);
       $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
       $stmt->bindParam(':descrpcion', $datos['descrpcion'], PDO::PARAM_STR);
       $stmt->bindParam(':imagen', $datos['imagen'], PDO::PARAM_STR);
       $stmt->execute();
       $stmt->closeCursor();
   }
   public function validacion($datos)
   {
       $stmt = $this->conexion->conectar()->prepare("SELECT * FROM productos where idproducto=:idproducto");
       $stmt->bindParam(':idproducto', $datos, PDO::PARAM_INT);
       $stmt->execute();
       return $stmt->fetchAll();
       $stmt->closeCursor();
   }
   public function listar_productos()
   {
       $stmt = $this->conexion->conectar()->prepare
       ("SELECT * FROM productos WHERE estado='Activo'");
       $stmt->execute();
       return $stmt->fetchAll();
       $stmt->closeCursor();
   }

}
