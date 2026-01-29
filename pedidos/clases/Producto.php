<?php 

class Producto {
    public $id_producto;
    public $nombre_producto;

    public function __construct($id_producto, $nombre_producto){
              $this->id_producto = $id_producto;
        $this ->nombre_producto = $nombre_producto;  
    }

    public function getId_producto() {
      return $this->id_producto;
    }
    public function setId_producto($id_producto) {
      $this->id_producto = $id_producto;
    }

    public function getNombre_producto() {
      return $this->nombre_producto;
    }
    public function setNombre_producto($nombre_producto) {
      $this->nombre_producto = $nombre_producto;
    }

    public function listar_productos ($conexion){
        $query = "SELECT * FROM producto";
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            die('Query fallo '. mysqli_error($conexion));
    }
    $datos = [];
    while ($row = mysqli_fetch_array($resultado)){
        $datos = $row;
    }
    return $datos;
}

public function getTotal_productos($conexion){
  $query = "SELECT COUNT(*) as total FROM producto";
  $resultado = mysqli_query($conexion, $query);
  $total = mysqli_fetch_assoc($resultado);
  return $total;
}
public function createProducto($conexion, $nombre_producto){
  $query = "INSERT INTO producto (nom_pro) VALUES ('$nombre_producto')";
  $resultado = mysqli_query($conexion,$query);
  $this-> id_producto = mysqli_insert_id($conexion);
  if(!$resultado){
    die('Error al agregar'. mysqli_error($conexion));
  }
}

}
?>