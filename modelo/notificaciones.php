<?php
require_once 'conexion.php';
class notificacion
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function notificarProducto10()
    {
    
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM producto WHERE stock <= 10");
        $stmt->execute();
    
        $fetch = $stmt->fetch(PDO::FETCH_ASSOC);

        if (is_array($fetch))  {

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $stock = $row["stock"];
                $id = $row["idproducto"];
    
                echo "El producto le quedan $stock y el ID es $id";

      
                // ("INSERT INTO notificaciones (Accion,Fecha)
                // values(:'El producto .x. tiene 10 o menos cantidad de Stock', :NOW()) ");
                // $stmt->execute();
                // $stmt->closeCursor();
            
            }
        
        
        }else {
            echo 'NO';
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
