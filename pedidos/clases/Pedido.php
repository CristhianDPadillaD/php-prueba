<?php
class Pedido
{

    const PENDIENTE = 'P';
    const ENVIADO = 'E';

    public $id_pedido;
    public $fecha_pedido;
    public $id_cliente;
    public $estado_pedido;

    public function __construct($id_pedido, $fecha_pedido, $id_cliente, $estado_pedido = self::PENDIENTE)
    {
        $this->id_pedido = $id_pedido;
        $this->fecha_pedido = $fecha_pedido;
        $this->id_cliente = $id_cliente;
        $this->estado_pedido = $estado_pedido;
    }

    public function getId_pedido()
    {
        return $this->id_pedido;
    }
    public function set_Id_pedido($id_pedido)
    {
        $this->id_pedido = $id_pedido;
    }

    public function getFecha_pedido()
    {
        return $this->fecha_pedido;
    }
    public function setFecha_pedido($fecha_pedido)
    {
        $this->fecha_pedido = $fecha_pedido;
    }

    public function getId_cliente()
    {
        return $this->id_cliente;
    }
    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    public function getEstado_pedido()
    {
        return $this->estado_pedido;
    }
    public function setEstado_pedido($estado_pedido)
    {
        $this->estado_pedido = $estado_pedido;
    }

    //funciones crud 

    public function listar_Pendientes($conexion)
    {
        $query = "SELECT 
    p.id_ped,
    p.fec_ped, 
    c.nom_cli, 
    d.nom_dir, 
    con.num_con, 
    pp.cantidad,
    pro.nom_pro 
FROM pedido p
INNER JOIN cliente c ON p.id_cli = c.id_cli
INNER JOIN direccion d ON p.id_cli = d.id_cli  
INNER JOIN contrato con ON p.id_cli = con.id_cli 
INNER JOIN pedidoproducto pp ON p.id_ped = pp.id_ped
INNER JOIN producto pro ON pp.id_pro = pro.id_pro
WHERE p.est_ped = 'P';";

        $resultado = mysqli_query($conexion, $query);
        if (!$resultado) {
            die('Query Failed' . mysqli_error($conexion));
        }

        $datos = [];
        while ($row = mysqli_fetch_array($resultado)) {
            $datos[] = $row;
        }
        return $datos;
    }

    public function crear_Pedido($conexion, $fecha_pedido, $id_cliente, $estado_pedido)
    {
        $query = "INSERT INTO pedido (fec_ped, id_cli,est_ped) VALUES ('$fecha_pedido',$id_cliente, '$estado_pedido')";
        $restultado = mysqli_query($conexion, $query);
        $this->id_pedido = mysqli_insert_id($conexion);
        return $restultado;
    }
}
