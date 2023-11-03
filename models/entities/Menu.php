<?php

class Menu{
    private $ID_Menu;

    public function __construct($ID_Menu) {
        $this->ID_Menu = $ID_Menu;
    }

    public function getID_Menu() {
        return $this->ID_Menu;
    }
}
?>