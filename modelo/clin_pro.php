<?php
require_once'Modelo/Conexion.php';
class clin_pro{
    public $conexion;

    public function __construct()
    {
        $this->conexion=new conexion();
    }
    public function actualizar($datos){
        $stmt=$this->conexion->conectar()->prepare("UPDATE clin_pro 
        SET tipo=:tipo nombre=:nombre apellido=:apellido tipo_documento=:tipo_documento direccion=:direccion telefono=:telefono email=:email WHERE id=:id");
        $stmt->bindParam(":id",$datos['id'],PDO::PARAM_STR);

        $stmt->bindParam(":tipo",$datos['tipo'],PDO::PARAM_STR);
        $stmt->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
        $stmt->bindParam(":apellido",$datos['apellido'],PDO::PARAM_STR);
        $stmt->bindParam(":tipo_documento",$datos['tipo_documento'],PDO::PARAM_STR);
        $stmt->bindParam(":no_documento",$datos['no_documento'],PDO::PARAM_STR);
        $stmt->bindParam(":direccion",$datos['direccion'],PDO::PARAM_STR);
        $stmt->bindParam(":telefono",$datos['telefono'],PDO::PARAM_STR);
        $stmt->bindParam(":email",$datos['email'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function insertar($datos){
        $stmt=$this->conexion->conectar()->prepare("INSERT INTO clin_pro 
        (tipo,nombre,apellido,tipo_documento,no_documento,direccion,telefono,email)VALUES(:tipo,:nombre,:apellido,:tipo_documento,:no_documento,:direccion,:telefono,:email)  WHERE");

        $stmt->bindParam(":tipo",$datos['tipo'],PDO::PARAM_STR);
        $stmt->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
        $stmt->bindParam(":apellido",$datos['apellido'],PDO::PARAM_STR);
        $stmt->bindParam(":tipo_documento",$datos['tipo_documento'],PDO::PARAM_STR);
        $stmt->bindParam(":no_documento",$datos['no_documento'],PDO::PARAM_STR);
        $stmt->bindParam(":direccion",$datos['direccion'],PDO::PARAM_STR);
        $stmt->bindParam(":telefono",$datos['telefono'],PDO::PARAM_STR);
        $stmt->bindParam(":email",$datos['email'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($datos){
        $stmt=$this->conexion->conectar()->prepare("DELETE FROM clin_pro WHERE id=:id");
        $stmt->bindParam(":id",$datos['id'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function listar($tipo){
        $stmt=$this->conexion->conectar()->prepare("SELECT * FROM clin_pro WHERE tipo=:tipo");
        $stmt->bindParam(":tipo",$tipo,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function validacion($no_documento)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM clin_pro where no_documento=:no_documento");
        $stmt->bindParam(':no_documento', $no_documento, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
?>