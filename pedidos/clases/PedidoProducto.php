<?php 
class PedidoProducto{

    public $id_pedido;
    public $id_producto;
    public $cantidad;

    public function __construct($id_pedido,$id_producto, $cantidad){
        $this-> id_pedido = $id_pedido;
        $this->id_producto = $id_producto;
        $this-> cantidad = $cantidad;
    }


    public function getId_pedido() {
      return $this->id_pedido;
    }
    public function setId_pedido($id_pedido) {
      $this->id_pedido = $id_pedido;
    }

    public function getId_producto() {
      return $this->id_producto;
    }
    public function setId_producto($id_producto) {
      $this->id_producto = $id_producto;
    }

    public function getCantidad() {
      return $this->cantidad;
    }
    public function setCantidad($cantidad) {
      $this->cantidad = $cantidad;
    }

    public function createPedidoProducto($conexion, $id_pedido,$id_producto,$cantidad){
        $query = "INSERT INTO pedidoproducto(id_ped,id_pro,cantidad) VALUES('$id_pedido', '$id_producto', '$cantidad')";
        $resultado = mysqli_query($conexion, $query);
        $this->id_pedido = mysqli_insert_id($conexion);
        if(!$resultado){
            die('Error al insertar un nuevo pedidoProducto'. mysqli_error($conexion));
        }
    }
}

?>