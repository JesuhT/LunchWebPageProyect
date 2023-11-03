<?php

class Almuerzo{
    private $ID_almuerzo;
    private $nombre;

    public function __construct($ID_almuerzo, $nombre) {
        $this->ID_almuerzo = $ID_almuerzo;
        $this->nombre = $nombre;
    }

    public function getID_almuerzo() {
        return $this->ID_almuerzo;
    }

    public function getNombre() {
        return $this->nombre;
    }
}
?>