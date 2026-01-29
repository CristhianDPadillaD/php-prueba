<?php 
class Direccion {
CONST ACTIVA = 'A';
const INACTIVA = 'I';

    public $id_direccion;
    public $id_cliente;
    public $nombre_direccion;
    public $estado_direccion;

public function __construct($id_direccion, $id_cliente, $nombre_direccion,$estado_direccion=self::ACTIVA)
{
    $this->id_direccion = $id_direccion;
    $this->id_cliente = $id_cliente;
    $this->nombre_direccion = $nombre_direccion;
    $this->estado_direccion = $estado_direccion;
}

    public function getId_direccion() {
      return $this->id_direccion;
    }
    public function setId_direccion($id_direccion) {
      $this->id_direccion = $id_direccion;
    }

    public function getId_cliente() {
      return $this->id_cliente;
    }
    public function setId_cliente($id_cliente) {
      $this->id_cliente = $id_cliente;
    }

    public function getNombre_direccion() {
      return $this->nombre_direccion;
    }
    public function setNombre_direccion($nombre_direccion) {
      $this->nombre_direccion = $nombre_direccion;
    }

    public function getEstado_direccion() {
      return $this->estado_direccion;
    }
    public function setEstado_direccion($estado_direccion) {
      $this->estado_direccion = $estado_direccion;
    }
}

?>