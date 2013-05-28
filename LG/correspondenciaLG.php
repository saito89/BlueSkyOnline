<?php
include '../DA/correspondenciaDA.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class correspondenciaLG
{
    //List all correspondencia from a specific curso and usuario
    function correspondenciaS($_idUsuario,$_idTipoCorrespondencia,$_idCurso)
    {
        try
        {
            $cAD = new correspondenciaDA();
            return $cAD->correspondenciaS($_idUsuario,$_idTipoCorrespondencia,$_idCurso);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }        
    }
}
?>
