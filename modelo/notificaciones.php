<?php
require_once 'conexion.php';
class producto
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function notificarProducto10()
    {
        $stmt = $this->conexion->conectar()->prepare

        ("SELECT COUNT(stock) FROM producto WHERE");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();

       

        if($result < 10){
            ("INSERT INTO notificaciones (idcategoria,codigo,nombre,descripcion,stock,imagen,disponibilidad)
            values(:nombre,:descripcion) ");

            $stmt->bindParam(':idcategoria', ['idcategoria'], PDO::PARAM_STR);
            $stmt->execute();
            $stmt->closeCursor();
        }

             
    }

 
    public function notificaciones()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM notificaciones WHERE Leido = 0");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
