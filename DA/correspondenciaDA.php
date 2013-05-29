<?php
include '../EN/correspondenciaEN.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class correspondenciaDA
{
    function correspondenciaS($_idUsuario,$_idTipoCorrespondencia,$_idCurso)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $res = mysqli_query($db, "call correspondenciaS('$_idUsuario','$_idTipoCorrespondencia','$_idCurso')");
            $connection->closeMySqlDB();
            $listCorrespondencia = array();
            while($resCo = mysqli_fetch_array($res))
            {
                $cEN = new correspondenciaEN();
                $cEN->setIdTipoCorrespondencia($resCo['idCorrespondencia']);
                $cEN->setTexto($resCo['texto']);
                $cEN->setRespuesta($resCo['respuesta']);
                $cEN->setIdTipoCorrespondencia($resCo['TipoCorrespondencia_idTipoCorrespondencia']);
                array_push($listCorrespondencia, $cEN);
            }
            
            return $listCorrespondencia;
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
        
    }
    function correspondenciaI($_text,$_respuesta,$_idTipoCorrespondencia,$_idUsuario,$_idCurso)
    {
        try 
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            mysqli_query($db, "call correspondenciaI('$_text','$_respuesta','$_idTipoCorrespondencia','$_idUsuario','$_idCurso')");
            $connection->closeMySqlDB();
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
                      
    }
}
?>
