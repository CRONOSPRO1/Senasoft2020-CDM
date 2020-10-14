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
        /* El campo idproducto es autoincremental, el campo estado esta por defaul '1' */ 
        ("INSERT INTO producto (idcategoria,codigo,nombre,descripcion,stock,imagen,disponibilidad)
        values(:nombre,:descripcion) ");

        $stmt->bindParam(':idcategoria', $datos['idcategoria'], PDO::PARAM_STR);
        $stmt->bindParam(':codigo', $datos['codigo'], PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(':stock', $datos['stock'], PDO::PARAM_STR);
        /*en el caso de la imegen tu tienes otro manejo, si?  */
        $stmt->bindParam(':imagen', $datos['imagen'], PDO::PARAM_STR);
        $stmt->bindParam(':disponibilidad', '1', PDO::PARAM_STR);

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
        ("UPDATE producto SET 
        idcategoria=:idcategoria,
        codigo=:codigo,
        nombre=:nombre,
        descripcion=:descripcion,
        stock=:stock,
        /* en este caso tu manejas el tema de subir las imagenes al directorio, vale? */
        imagen=:imagen,
        disponibilidad=:disponibilidad
        WHERE idproducto=:idproducto ");
        $stmt->bindParam(':idcategoria', $datos['idcategoria'], PDO::PARAM_STR);
        $stmt->bindParam(':codigo', $datos['codigo'], PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(':stock', $datos['stock'], PDO::PARAM_STR);
        /*en el caso de la imegen tu tienes otro manejo, si?  */
        $stmt->bindParam(':imagen', $datos['imagen'], PDO::PARAM_LOB);
        $stmt->bindParam(':disponibilidad', $datos['disponibilidad'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    
    public function listar_productos()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM producto WHERE estado='1'");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
