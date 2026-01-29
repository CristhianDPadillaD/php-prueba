<?php
include '../db/conexion.php';
include '../clases/Cliente.php';
$cliente = new Cliente (null, null, null, null);
$conexion = conectarBD();
$listarClientes = $cliente->listar_clientes($conexion);
echo json_encode($listarClientes);

?>