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
            $usuarioArray = array(
                'ID_user' => $usuario->getID_User(),
                'Nombre' => $usuario->getNombre(),
                'Apellido' => $usuario->getApellido(),
                'Email' => $usuario->getEmail(),
                'Celular' => $usuario->getCelular(),
                'Contrasena' => $usuario->getContrasena(),
                'ID_rol' => $usuario->getID_rol(),
                'ID_programa' => $usuario->getID_programa());
            return $usuarioArray;
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
        $usuariosArray = array();

        foreach ($usuarios as $usuario) {
            $usuarioArray = array(

                'ID_user' => $usuario->getID_User(),
                'Nombre' => $usuario->getNombre(),
                'Apellido' => $usuario->getApellido(),
                'Email' => $usuario->getEmail(),
                'Celular' => $usuario->getCelular(),
                'ID_rol' => $usuario->getID_rol(),
                'ID_programa' => $usuario->getID_programa(),
            );

            $usuariosArray[] = $usuarioArray;
        }
        return $usuariosArray;
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
    
    public function verUsuarioPorId($idUsuario){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT Usuario.ID_user, Usuario.Nombre, Usuario.Apellido, Usuario.Email, Usuario.Contrasena, Usuario.Celular, Usuario.ID_rol, Usuario.ID_programa AS NombrePrograma,  
            FROM Usuario
            WHERE ID_user = :idUsuario",
            array(':idUsuario' => $idUsuario));
    
        if (!$data_table || empty($data_table)) {
            return null; 
        }

        $fila = $data_table[0];
    
        return [
            'ID_usuario' => $fila["ID_usuario"],
            'Nombres' => $fila["Nombres"],
            'Apellidos' => $fila["Apellidos"],
            'Email' => $fila["Email"],
            'Contrasena' => $fila["Contrasena"],
            'Celular' => $fila["Celular"],
            'ID_rol' => $fila["ID_rol"],
            'NombrePrograma' => $fila["NombrePrograma"]
        ];
    }
}
