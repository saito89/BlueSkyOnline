<?php
include '../DA/asignacionDA.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class asignacionLG
{
    function asignacionSInfo($_idUsuario,$_idAsignacion)
    {
        try
        {
            $aAD = new asignacionDA();
            return $aAD->asignacionSInfo($_idUsuario,$_idAsignacion);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
    function asignacionI($_asignacion)
    {
        try
        {
            $aAD = new asignacionDA();
            $aAD->asignacionI($_asignacion);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
    
    function asignacionU($_asignacion)
    {
        try
        {
            $aAD = new asignacionDA();
            $aAD->asignacionU($_asignacion);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
