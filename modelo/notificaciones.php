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
        ("SELECT stock, idproducto FROM producto WHERE stock <= 10");
        $stmt->execute();
    
        $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
        
        while($fetch){
            $stock = $fetch["stock"];
            $id = $fetch["idproducto"];

            // echo $id;

            // ("INSERT INTO notificaciones (Accion,Fecha)
            // values(:'El producto .x. tiene 10 o menos cantidad de Stock', :NOW()) ");
            // $stmt->execute();
            // $stmt->closeCursor();
        }


        if (is_array($fetch))  {
          
    
        
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
