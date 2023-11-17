<?php
require_once("datasource.php");
require_once(__DIR__ . "/../entities/Almuerzo.php");

class AlmuerzoDAO
{
    function obtenerAlmuerzosPorDia($dia)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT al.ID_almuerzo, al.nombre, al.descripcion FROM Almuerzo al 
                                                      INNER JOIN Almuerzos_En_Menu am ON al.ID_almuerzo = am.ID_almuerzo
                                                      INNER JOIN Menu me ON me.ID_menu = am.ID_menu
                                                      INNER JOIN Dia_almuerzo d ON me.ID_dia = d.ID_dia
                                                      WHERE d.nombre = :dia",
            array(':dia' => $dia)
        );
        $almuerzos = array();

        foreach ($data_table as $indice => $valor) {
            $almuerzoObj = new Almuerzo(
                $data_table[$indice]["ID_almuerzo"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["descripcion"]
            );
            array_push($almuerzos, $almuerzoObj);
        }
        $almuerzosArray = array();

        foreach ($almuerzos as $almuerzo) {
            $almuerzoArray = array(

                'nombre' => $almuerzo->getNombre(),
                'descripcion' => $almuerzo->getDescripcion(),
            );

            $almuerzosArray[] = $almuerzoArray;
        }
        return $almuerzosArray;
    }

    public function obtenerAlmuerzosUsuario($usuarioID, $dia)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM Dias_Almuerzos_Estudiante e
            INNER JOIN Dia_almuerzo d ON d.ID_dia = e.ID_dia WHERE e.ID_estudiante = :usuarioID AND d.nombre = :dia",
            array(':usuarioID' => $usuarioID, ':dia' => $dia)
        );

        if (count($data_table) == 1) {
            return true; // El estudiante tiene almuerzo para el día específico
        } else {
            return false; // El estudiante no tiene almuerzo para el día específico
        }
    }
}
