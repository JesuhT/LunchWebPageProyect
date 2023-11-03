<?php require_once("datasource.php");
require_once (__DIR__."/../entities/Usuario.php");
class UsuarioDAO
{
    public function autenticarUsuario($email, $Contrasena)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Usuarios WHERE email = :Email AND Contrasena = :Contrasena", 
                                                        array(':Email'=>$email,':Contrasena'=>$Contrasena));
        $usuario = null;

        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                    $data_table[$indice]["ID_user"],
                    $data_table[$indice]["Nombre"],
                    $data_table[$indice]["Apellido"],
                    $data_table[$indice]["Email"],
                    $data_table[$indice]["Contrasena"],
                    $data_table[$indice]["Celular"]
                    );
            }
            return $usuario;
        }else{
            return null;
        }
    }

    public function buscarUsuarioPorId($ID_user)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Usuarios WHERE ID_user = :ID_user", array(':ID_user' => $ID_user));
        $usuario = null;

        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                    $data_table[$indice]["ID_user"],
                    $data_table[$indice]["Nombre"],
                    $data_table[$indice]["Apellido"],
                    $data_table[$indice]["Email"],
                    $data_table[$indice]["Contrasena"],
                    $data_table[$indice]["Celular"]
                    );
            }
            return $usuario;
        }
    }

    public function leerUsuarios()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Usuarios");
        $usuarios = array();

        foreach($data_table as $indice=>$valor){
            $usuario = new Usuario(
                $data_table[$indice]["ID_user"],
                $data_table[$indice]["Nombre"],
                $data_table[$indice]["Apellido"],
                $data_table[$indice]["Email"],
                $data_table[$indice]["Contrasena"],
                $data_table[$indice]["Celular"]
                );
        }
        return $usuarios;  
    }

    public function insertarUsuario(Usuario $usuario)
    {
        $data_source = new DataSource();
        $sql = "INSERT INTO Usuarios (Nombre, Apellido, Email, Contrasena, Celular) VALUES (:Nombre, :Apellido, :Email, :Contrasena, :Celular)";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':Nombre' => $usuario->getNombre(),
            ':Apellido' => $usuario->getApellido(),
            ':Email' => $usuario->getEmail(),
            ':Contrasena' => $usuario->getContrasena(),
            ':Celular' => $usuario->getCelular()
            )
        );
        

        return $resultado;
    }

    public function modificarUsuario(Usuario $usuario)
    {
        $data_source = new DataSource();
        $sql = "UPDATE Usuarios SET Nombre = :Nombre, Apellido = :Apellido, Email = :Email, Contrasena = :Contrasena, Celular = :Celular WHERE ID_user = :ID_user";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':Nombre' => $usuario->getNombre(),
            ':Apellido' => $usuario->getApellido(),
            ':Email' => $usuario->getEmail(),
            ':Contrasena' => $usuario->getContrasena(),
            ':Celular' => $usuario->getCelular(),
            ':ID_user' => $usuario->getID_user()
            )
        );
        return $resultado;
    }

    public function borrarUsuario($ID_user)
    {
        $data_source = new DataSource();
        $sql = "DELETE FROM Usuarios WHERE ID_user = :ID_user";
        $values = array(':ID_user' => $ID_user);
        $resultado = $data_source->ejecutarActualizacion($sql, $values);

        return $resultado;
    }
}
?>