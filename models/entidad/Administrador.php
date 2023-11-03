<?php
class Administrador {
    private $ID_administrador;

    public function __construct($ID_administrador) {
        $this->ID_administrador = $ID_administrador;
    }

    public function getIDAdministrador() {
        return $this->ID_administrador;
    }
}
?>