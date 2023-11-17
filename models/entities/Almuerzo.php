<?php

class Almuerzo{
    private $ID_almuerzo;
    private $nombre;
    private $descripcion;

    public function __construct($ID_almuerzo, $nombre,$descripcion) {
        $this->ID_almuerzo = $ID_almuerzo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function getID_almuerzo() {
        return $this->ID_almuerzo;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }
}
?>