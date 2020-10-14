<?php
require_once'Model/Conexion.php';
class model{
    public $conexion;

    public function __construct()
    {
        $this->conexion=new conexion();
    }

    public function actualizar($datos){
        $stmt=$this->conexion->conectar()->prepare("UPDATE tabla SET valor1=:valor1 WHERE");
        $stmt->bindParam(":valo1",$datos['valor1'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function insertar($datos){
        $stmt=$this->conexion->conectar()->prepare("INSERT INTO tabla ()VALUES()  WHERE");
        $stmt->bindParam(":valo1",$datos['valor1'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($datos){
        $stmt=$this->conexion->conectar()->prepare("DELETE FROM tabla WHERE valor1=:valor1");
        $stmt->bindParam(":valo1",$datos['valor1'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function listar(){
        $stmt=$this->conexion->conectar()->prepare("SELECT FROM tabla WHERE");
        $stmt->execute();
        $stmt->closeCursor();
    }
}
?>