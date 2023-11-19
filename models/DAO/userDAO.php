<?php require_once("datasource.php");
require_once(__DIR__ . "/../entities/Usuario.php");
class UsuarioDAO
{
    public function autenticarUsuario($email, $Contrasena)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM Usuario WHERE email = :Email AND Contrasena = :Contrasena",
            array(':Email' => $email, ':Contrasena' => $Contrasena)
        );
        $usuario = null;

        if (count($data_table) == 1) {
            foreach ($data_table as $indice => $valor) {
                $usuario = new Usuario(
                    $data_table[$indice]["ID_user"],
                    $data_table[$indice]["Nombre"],
                    $data_table[$indice]["Apellido"],
                    $data_table[$indice]["Email"],
                    $data_table[$indice]["Contrasena"],
                    $data_table[$indice]["Celular"],
                    $data_table[$indice]["ID_programa"],
                    $data_table[$indice]["ID_rol"]
                );
            }
            return $usuario;
        } else {
            return null;
        }
    }

    public function buscarUsuarioPorId($ID_user)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Usuario WHERE ID_user = :ID_user", array(':ID_user' => $ID_user));
        $usuario = null;

        if (count($data_table) == 1) {
            foreach ($data_table as $indice => $valor) {
                $usuario = new Usuario(
                    $data_table[$indice]["ID_user"],
                    $data_table[$indice]["Nombre"],
                    $data_table[$indice]["Apellido"],
                    $data_table[$indice]["Email"],
                    $data_table[$indice]["Contrasena"],
                    $data_table[$indice]["Celular"],
                    $data_table[$indice]["ID_programa"],
                    $data_table[$indice]["ID_rol"]
                );
            }
            return $usuario;
        }
    }

    public function leerUsuarios()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Usuario",NULL);
        $usuarios = array();
        if (!$data_table) {
            return array();
        }
        foreach ($data_table as $indice => $valor) {
            $usuario = new Usuario(
                $data_table[$indice]["ID_user"],
                $data_table[$indice]["Nombre"],
                $data_table[$indice]["Apellido"],
                $data_table[$indice]["Email"],
                $data_table[$indice]["Contrasena"],
                $data_table[$indice]["Celular"],
                $data_table[$indice]["ID_programa"],
                $data_table[$indice]["ID_rol"]
            );
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }

    public function insertarUsuario(Usuario $usuario)
    {
        $data_source = new DataSource();
        $sql = "INSERT INTO Usuario (ID_user, Nombre, Apellido, Email, Contrasena, Celular, ID_programa, ID_rol) VALUES (:ID_user, :Nombre, :Apellido, :Email, :Contrasena, :Celular, :ID_programa, :ID_rol)";
        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(
                ':ID_user' => $usuario->getID_User(),
                ':Nombre' => $usuario->getNombre(),
                ':Apellido' => $usuario->getApellido(),
                ':Email' => $usuario->getEmail(),
                ':Contrasena' => $usuario->getContrasena(),
                ':Celular' => $usuario->getCelular(),
                ':ID_programa' => $usuario->getID_programa(),
                ':ID_rol' => $usuario->getID_rol(),

            )
        );


        return $resultado;
    }

    public function modificarContraseña(Usuario $user, $newPassword)
    {
        $data_source = new DataSource();
        $sql = "UPDATE Usuario SET Contrasena = :Contrasena WHERE idUser = :idUser";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':Contrasena' => $newPassword,
            ':idUser' => $user->getID_User()
        ));

        return $resultado;
    }

    public function modificarUsuario(Usuario $usuario)
    {
        $data_source = new DataSource();
        $sql = "UPDATE Usuario SET ID_user = :ID_user, Nombre = :Nombre, Apellido = :Apellido, Email = :Email, Contrasena = :Contrasena, Celular = :Celular, ID_programa=:ID_programa, ID_rol=:ID_rol WHERE ID_user = :ID_user";
        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(

                ':Nombre' => $usuario->getNombre(),
                ':Apellido' => $usuario->getApellido(),
                ':Email' => $usuario->getEmail(),
                ':Contrasena' => $usuario->getContrasena(),
                ':Celular' => $usuario->getCelular(),
                ':ID_user' => $usuario->getID_user(),
                ':ID_programa' => $usuario->getID_programa(),
                ':ID_rol' => $usuario->getID_rol(),
            )
        );
        return $resultado;
    }

    public function borrarUsuario($ID_user)
    {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM Usuario WHERE ID_user = :ID_user", array('ID_user' => $ID_user));

        return $resultado;
    }
    public function verUsuarios()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT Usuario.ID_usuario, Usuario.Nombre, Usuario.Apellido, Usuario.Email, Usuario.Contraseña, Usuario.Celular, Programa.Nombre AS NombrePrograma, Usuario.ID_rol FROM Usuario
        INNER JOIN Programa ON Usuario.ID_programa = Programa.ID_programa", NULL);

        // Verificar si hay resultados
        if (!$data_table) {
            return array();
        }

        $usuarios = array();

        foreach ($data_table as $fila) {
            $idUsuario = isset($fila["ID_usuario"]) ? $fila["ID_usuario"] : null;
            $nombres = isset($fila["Nombres"]) ? $fila["Nombres"] : null;
            $apellidos = isset($fila["Apellidos"]) ? $fila["Apellidos"] : null;
            $email = isset($fila["Email"]) ? $fila["Email"] : null;
            $contrasena = isset($fila["Contraseña"]) ? $fila["Contraseña"] : null;
            $celular = isset($fila["Celular"]) ? $fila["Celular"] : null;
            $rol = isset($fila["ID_rol"]) ? $fila["ID_rol"] : null;
            $nombrePrograma = isset($fila["NombrePrograma"]) ? $fila["NombrePrograma"] : null;

            $usuario = array(
                'ID_usuario' => $idUsuario,
                'Nombres' => $nombres,
                'Apellidos' => $apellidos,
                'Email' => $email,
                'Contraseña' => $contrasena,
                'Celular' => $celular,
                'ID_rol' => $rol,
                'NombrePrograma' => $nombrePrograma
            );
            $usuarios[] = $usuario;
        }
        return $usuarios;
    }
    public function verUsuarioPorId($idUsuario){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT Usuario.ID_usuario, Usuario.Nombres, Usuario.Apellidos, Usuario.Email, Usuario.Contraseña, Usuario.Celular, Programa.Nombre AS NombrePrograma, Usuario.ID_rol 
            FROM Usuario
            INNER JOIN Programa ON Usuario.ID_programa = Programa.ID_programa 
            WHERE ID_usuario = :idUsuario",
            array(':idUsuario' => $idUsuario)
        );
    
        if (!$data_table || empty($data_table)) {
            return null; 
        }

        $fila = $data_table[0];
    
        return [
            'ID_usuario' => $fila["ID_usuario"],
            'Nombres' => $fila["Nombres"],
            'Apellidos' => $fila["Apellidos"],
            'Email' => $fila["Email"],
            'Contrasena' => $fila["Contraseña"],
            'Celular' => $fila["Celular"],
            'ID_rol' => $fila["ID_rol"],
            'NombrePrograma' => $fila["NombrePrograma"]
        ];
    }
}
