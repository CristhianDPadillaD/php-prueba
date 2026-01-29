<?php 


class Cliente{

    public $id_cliente;
    public $doc_cliente;
    public $nombre_cliente;
    public $apellido_cliente;

public function __construct($id_cliente,$doc_cliente,$nombre_cliente,$apellido_cliente)
{
    $this-> id_cliente = $id_cliente;
    $this-> doc_cliente = $doc_cliente;
    $this-> nombre_cliente = $nombre_cliente;
    $this-> apellido_cliente = $apellido_cliente;
}

    public function getId_cliente() {
      return $this->id_cliente;
    }
    public function setId_cliente($id_cliente) {
      $this->id_cliente = $id_cliente;
    }

    public function getDoc_cliente() {
      return $this->doc_cliente;
    }
    public function setDoc_cliente($doc_cliente) {
      $this->doc_cliente = $doc_cliente;
    }

    public function getNombre_cliente() {
      return $this->nombre_cliente;
    }
    public function setNombre_cliente($nombre_cliente) {
      $this->nombre_cliente = $nombre_cliente;
    }

    public function getApellido_cliente() {
      return $this->apellido_cliente;
    }
    public function setApellido_cliente($apellido_cliente) {
      $this->apellido_cliente = $apellido_cliente;
    }

    public function listar_clientes($conexion){
      $query = "SELECT * FROM cliente";
      $resultado = mysqli_query ($conexion, $query);
      if(!$resultado){
        die('Query falló'.mysqli_error($conexion));
      }
      $datos = [];
      while ($row = mysqli_fetch_assoc($resultado)){
        $datos[] = $row;
      }
      return $datos;
    }
}


?>