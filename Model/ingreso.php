<?php
require_once 'conexion.php';
class ingreso
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function insertar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("INSERT INTO ingreso (idproveedor,tipo_soporte,no_soporte,iva,estado)
        values(:idproveedor,:tipo_soporte,:no_soporte,:iva,:estado) ");

        $stmt->beginTransaction();

        try {
    
            $stmt->bindParam(':idproveedor', $datos['idproveedor'], PDO::PARAM_STR);
            $stmt->bindParam(':tipo_soporte', $datos['tipo_soporte'], PDO::PARAM_STR);
            $stmt->bindParam(':idproveedor', $datos['idproveedor'], PDO::PARAM_STR);
            $stmt->bindParam(':no_soporte', $datos['no_soporte'], PDO::PARAM_STR);
            $stmt->bindParam(':tipo_soporte', $datos['tipo_soporte'], PDO::PARAM_STR);
            $stmt->execute();
            $stmt->closeCursor();
            

            /* Aqui hacemos referencia al modelo detalle de ingreso y traemos los detalles de la 
            compra que llegan por array desde el formulario*/            
            $stmt->bindParam($idproducto, $datos['idproducto'], PDO::PARAM_STR);
            $stmt->bindParam($cantidad, $datos['cantidad'], PDO::PARAM_STR);
            $stmt->bindParam($costo, $datos['costo'], PDO::PARAM_STR);
            $stmt->bindParam($precio, $datos['precio'], PDO::PARAM_STR);

            $cont=0;
            while ($cont < count($idproducto)) {
                $stmt = $this->conexion->conectar()->prepare("INSERT INTO detalle_ingreso (idingreso,idproducto,cantidad,costo,precio)
                 values(:idproducto,:cantidad,:costo,precio) ");
                $stmt->bindParam(':idingreso', $datos['idingreso'], PDO::PARAM_STR);
                $stmt->bindParam(':idproducto', $idproducto[$cont], PDO::PARAM_STR);
                $stmt->bindParam(':cantidad', $cantidad[$cont], PDO::PARAM_STR);
                $stmt->bindParam(':costo', $costo[$cont], PDO::PARAM_STR);
                $stmt->bindParam(':precio', $precio[$cont], PDO::PARAM_STR);
                $stmt->execute();
                $stmt->closeCursor();
                $cont=$cont+1;

            }
            $stmt->commit();
            // Banderita
            echo 'Datos insertados';

        } catch (Exception $e) {
            // si ocurre un error hacemos rollback para anular todos los insert
            $stmt->rollback();
            /* Mostrar mensaje de que no se pudo realizar la transacción */
            echo $e->getMessage();
        }
        
    }
    public function eliminar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("UPDATE ingreso SET condicion=0 where idingreso=idingreso");
        $stmt->bindParam(':idingreso', $datos['idingreso'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("UPDATE ingreso SET nombre=:nombre,descripcion=:descripcion WHERE idingreso=:idingreso ");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    
    public function listar_ingresos()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM ingresos WHERE condicion=1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

       
    }

    
