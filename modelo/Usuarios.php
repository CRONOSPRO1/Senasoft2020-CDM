<?php
require_once'conexion.php';
class usuarios{

    public $conexion;
    
        public function __construct()
        {
            $this->conexion=new conexion();
        }
        public function actualizar($datos){
            $stmt=$this->conexion->conectar()->prepare("UPDATE usuarios SET email=:email ,telefono=:telefono , direccion=:direccion WHERE idusuario=:idusuario");
            $stmt->bindParam(":idusuario",$datos['idusuario'],PDO::PARAM_STR);
            $stmt->bindParam(":email",$datos['email'],PDO::PARAM_STR);
            $stmt->bindParam(":telefono",$datos['telefono'],PDO::PARAM_STR);
            $stmt->bindParam(":direccion",$datos['direccion'],PDO::PARAM_STR);

            $stmt->execute();
            $stmt->closeCursor();
        }
    
        public function insertar($datos){
            $stmt=$this->conexion->conectar()->prepare("INSERT INTO usuarios  (tipo_documento,no_documento,nombre,telefono,direccion,email,clave,rol)VALUES(:tipo_documento,:no_documento,:nombre,:telefono,:direccion,:email,:clave,:rol) ");
            $stmt->bindParam(":tipo_documento",$datos['tipo_documento'],PDO::PARAM_STR);
            $stmt->bindParam(":no_documento",$datos['no_documento'],PDO::PARAM_STR);
            $stmt->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
            $stmt->bindParam(":telefono",$datos['telefono'],PDO::PARAM_STR);
            $stmt->bindParam(":direccion",$datos['direccion'],PDO::PARAM_STR);
            $stmt->bindParam(":email",$datos['email'],PDO::PARAM_STR);
            $stmt->bindParam(":clave",$datos['clave'],PDO::PARAM_STR);
            $stmt->bindParam(":rol",$datos['rol'],PDO::PARAM_STR);

           

            $stmt->execute();
            $stmt->closeCursor();
        }
    
        public function eliminar($datos){
            $stmt=$this->conexion->conectar()->prepare("DELETE FROM usuarios WHERE idusuario=:idusuario");
            $stmt->bindParam(":idusuario",$datos['id'],PDO::PARAM_STR);
            $stmt->execute();
            $stmt->closeCursor();
        }
    
        public function listar_usuarios()
        {
            $stmt = $this->conexion->conectar()->prepare("SELECT * FROM usuarios");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->closeCursor();
        }
        public function validacion($no_documento)
        {
            $stmt = $this->conexion->conectar()->prepare
            ("SELECT * FROM usuarios where no_documento=:no_documento");
            $stmt->bindParam(':no_documento', $no_documento, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->closeCursor();
        }
    
    








}
