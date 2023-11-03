<?php

class Día_Almuerzo{
    private $ID_Día;
    private $nombre;
    private $ID_menu;

    public function __construct($ID_Día, $nombre, $ID_menu) {
        $this->ID_Día = $ID_Día;
        $this->nombre = $nombre;
        $this->ID_menu = $ID_menu;
    }

    public function getID_Día() {
        return $this->ID_Día;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getID_menu() {
        return $this->ID_menu;
    }
}
?>