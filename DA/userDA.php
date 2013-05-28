<?php
include 'mySqlConnection.php';
include '../EN/usuarioEN.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class userDA
{
    //Selects the info from a usuario using the username and password
    function usuarioSLogin($_userName,$_password)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $res = mysqli_query($db, "call usuarioSLogin('$_userName','$_password')");
            $uEN = new usuarioEN();
            $connection->closeMySqlDB();
            while($resPro = mysqli_fetch_array($res))
            {
                $uEN->setIdUsuario($resPro['idUsuario']);
                $uEN->setUserName($resPro['userName']);
                $uEN->setPassword($resPro['password']);
                $uEN->setTipo($resPro['TipoUsuario_idTipoUsuario']);
                $uEN->setNombre($resPro['nombre']);
                $uEN->setFechaNacimiento($resPro['fechaNacimiento']);
                $uEN->setDescripcion($resPro['descripcion']);   
                $uEN->setCorreoElectronico($resPro['correoElectronico']);  
            }
            
            return $uEN;
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
    
    function infoPersonalSListaEstudiantes($_idAsignacion)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $res = mysqli_query($db, "call infoPersonalSListaEstudiantes('$_idAsignacion')");
            $connection->closeMySqlDB();
            $listEstudiante = array();
            while($es = mysqli_fetch_array($res))
            {
                $eEN = new estudianteEN();
                $eEN->setIdAsignacion($es['idAsignacion']);
                $eEN->setIdUsuario($es['idUsuario']);
                $eEN->setNombre($es['nombre']);
                $eEN->setCorreoElectronico($es['correoElectronico']);
                /*echo $cEN->getIdCurso();
                echo $cEN->getNombre();
                echo $cEN->getSigla();
                echo $cEN->getHorario();
                echo $cEN->getCreditos();
                echo $cEN->getCalificacion();*/
                array_push($listEstudiante, $eEN);
            }
            return $listEstudiante;
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
