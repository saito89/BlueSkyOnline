<?php
include 'mySqlConnection.php';
include '../EN/usuarioEN.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class userAD
{
    function usuarioSLogin($_userName,$_password)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $res = mysqli_query($db, "call usuarioSLogin('$_userName','$_password')");
            $uEN = new usuarioEN();
            $connection->closeMySqlDB();
            $resPro = mysqli_fetch_array($res);
            $uEN->setIdUsuario($resPro['idUsuario']);
            $uEN->setUserName($resPro['userName']);
            $uEN->setPassword($resPro['password']);
            $uEN->setTipoUsuario_idTipoUsuario($resPro['TipoUsuario_idTipoUsuario']);
            $uEN->setNombre($resPro['nombre']);
            $uEN->setFechaNacimiento($resPro['fechaNacimiento']);
            $uEN->setDescripcion($resPro['descripcion']);   
            return $uEN;
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
