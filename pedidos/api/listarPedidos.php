<?php 
include '../db/conexion.php';
include '../clases/Pedido.php';

$pedido = new Pedido (null, null, null);
$conexion = conectarBD();
$pedidosPendientes = $pedido->listar_Pendientes($conexion);

echo json_encode($pedidosPendientes);

?>