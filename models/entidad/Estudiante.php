<?php
class Estudiante {
    private $ID_estudiante;
    private $ID_Programa;

    public function __construct($ID_estudiante, $ID_Programa) {
        $this->ID_estudiante = $ID_estudiante;
        $this->ID_Programa = $ID_Programa;
    }
    

    public function getIDEstudiante() {
        return $this->ID_estudiante;
    }

    public function getIDPrograma() {
        return $this->ID_Programa;
    }

    public function setIDPrograma($ID_Programa) {
        $this->ID_Programa = $ID_Programa;
    }
}
?>