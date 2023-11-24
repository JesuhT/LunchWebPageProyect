<?php
require_once("datasource.php");
require_once(__DIR__ . "/../entities/AlmuerzoEnMenu.php");

class AlmuerzoEnMenuDAO
{
    public function leerAlmuerzosMenu(){
        $data_source = new DataSource();
        $query = "SELECT a.ID_almuerzo, a.nombre AS nombre, m.ID_menu, d.nombre AS dia
                  FROM Almuerzo a
                  JOIN Almuerzos_En_Menu am ON a.ID_almuerzo = am.ID_almuerzo
                  JOIN Menu m ON am.ID_menu = m.ID_menu
                  JOIN Dia_almuerzo d ON m.ID_dia = d.ID_dia";
        $data_table = $data_source->ejecutarConsulta($query, null);

        if (!$data_table) {
            return array();
        }

        $almuerzosEnMenu = array();

        foreach($data_table as $fila){
            $almuerzoEnMenu = array(
                'ID_almuerzo' => $fila["ID_almuerzo"],
                'nombreAlmuerzo' => $fila["nombre"],
                'ID_menu' => $fila["ID_menu"],
                'nombreDia' => $fila["dia"]
            );
            $almuerzosEnMenu[] = $almuerzoEnMenu;
        }

        return $almuerzosEnMenu;
    }
}

?>
