<?php
require_once'conexion.php';
class Admin{

    public $conexion;
    
        public function __construct()
        {
            $this->conexion=new conexion();
        }
        public function actualizar($datos){
            $stmt=$this->conexion->conectar()->prepare("UPDATE admin SET email=:email clave=:clave WHERE idadmin=:idadmin");
            $stmt->bindParam(":idadmin",$datos['idadmin'],PDO::PARAM_STR);
            $stmt->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
            $stmt->bindParam(":email",$datos['email'],PDO::PARAM_STR);
            $stmt->bindParam(":clave",$datos['clave'],PDO::PARAM_STR);

            $stmt->execute();
            $stmt->closeCursor();
        }
    
        public function insertar($datos){
            $stmt=$this->conexion->conectar()->prepare("INSERT INTO admin 
            (tipo_documento,no_documento,nombre,email,clave,rol)VALUES(:tipo_documento,:no_documento,:nombre,:email,:clave,:rol) ");
            $stmt->bindParam(":tipo_documento",$datos['tipo_documento'],PDO::PARAM_STR);
            $stmt->bindParam(":no_documento",$datos['no_documento'],PDO::PARAM_STR);
            $stmt->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
            $stmt->bindParam(":email",$datos['email'],PDO::PARAM_STR);
            $stmt->bindParam(":clave",$datos['clave'],PDO::PARAM_STR);
            $stmt->bindParam(":rol",$datos['rol'],PDO::PARAM_STR);
            $stmt->execute();
            $stmt->closeCursor();
        }
    
        public function eliminar($datos){
            $stmt=$this->conexion->conectar()->prepare("DELETE FROM admin WHERE idadmin=:idadmin");
            $stmt->bindParam(":idadmin",$datos['idadmin'],PDO::PARAM_STR);
            $stmt->execute();
            $stmt->closeCursor();
        }
    
        public function listar(){
            $stmt=$this->conexion->conectar()->prepare("SELECT FROM admin ");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->closeCursor();
        }
    
    








}
