<?php
require_once 'conexion.php';
class usuario
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }

    public function insertar($datos)
    {
        $stmt=$this->conexion->conectar()->prepare("INSERT INTO usuarios (tipo_documento,no_documento,nombre,email,clave
        )VALUES(:tipo_documento,:no_documento,:nombre,:email,:clave)");
        
        $stmt->bindParam(':tipo_documento',$datos['tipo_documento'],PDO::PARAM_STR);
        $stmt->bindParam(':no_documento',$datos['no_documento'],PDO::PARAM_INT);
        $stmt->bindParam(':nombre',$datos['nombre'],PDO::PARAM_STR);
        $stmt->bindParam(':email',$datos['email'],PDO::PARAM_STR);
        $stmt->bindParam(':clave',$datos['clave'],PDO::PARAM_STR);
        
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();




    }

    public function eliminar($id_usuario)
    {
        $stmt = $this->conexion->conectar()->prepare("DELETE  FROM usuarios where idusuario=:id ");
        $stmt->bindParam(':id', $id_usuario['idusuario'], PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($idusuario, $datos)
    {
        $stmt = $this->conexion->conectar()->prepare("UPDATE usuarios SET 
        tipo_documento=:tipo_documento,no_documento=:no_documento,
        nombre=:nombre,email=:email, clave=:clave
        WHERE id_usuario=:id ");
        $stmt->bindParam(':tipo_documento', $datos['tipo_documento'], PDO::PARAM_STR);
        $stmt->bindParam(':no_documento', $datos['no_documento'], PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(':clave', $datos['clave'], PDO::PARAM_STR);
        $stmt->bindParam(':idusuario', $id_usuario, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function validacion($identificacion)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT no_documento,clave,idusuario,nombre FROM usuarios 
        WHERE  no_documento=:identificacion ");
        $stmt->bindParam(':identificacion', $identificacion, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    
    public function listar_usuarios()
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
