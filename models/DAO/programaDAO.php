<?php

require_once("datasource.php");
require_once(__DIR__ . "/../entities/Programa.php");

/**
 * Description of ProgramaDAO
 */
class ProgramaDAO
{
    public function buscarProgramaPorId($id)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Programa WHERE ID_programa = :id", array(':id' => $id));
        $programa = null;

        if (count($data_table) == 1) {
            foreach ($data_table as $indice => $valor) {
                $programa = new Programa(
                    $data_table[$indice]["ID_programa"],
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["ID_facultad"]
                );
            }
            return $programa;
        } else {
            return null;
        }
    }

}
