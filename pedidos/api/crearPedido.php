<?php 
include '../db/conexion.php';
include '../clases/Pedido.php';
include '../clases/PedidoProducto.php';
include '../clases/Producto.php';

$id_cliente = $_POST['id_cliente'];
$productos = $_POST['productos'];
$estado_pedido = $_POST['Estado'];
$fechaPedido = date("Y-m-d H:i:s");
$cantidad = 1;

$pedido = new Pedido(null,null,null, null);
$pedidoProducto = new PedidoProducto(null, null,null);
$producto = new Producto(null,null);
$conexion = conectarBD();

$pedido-> crear_Pedido($conexion,$fechaPedido, $id_cliente,$estado_pedido);




$id_pedido = $pedido->getId_pedido();

foreach($productos as $p){

    $producto -> createProducto($conexion, $p);
    $id_producto = $producto->getId_producto();

    $pedidoProducto->createPedidoProducto($conexion, $id_pedido,$id_producto, $cantidad);

}


?>