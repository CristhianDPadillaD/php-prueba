<?php
include '../db/conexion.php';
include '../clases/Producto.php';

$producto = new producto(null,null);
$conexion = conectarBD();
$productos = $producto->getTotal_productos($conexion);
echo json_encode($productos);
?>