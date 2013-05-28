<?php
include '../DA/userDA.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class userLG
{
    function usuarioSLogin($_userName,$_password)
    {
        try
        {
            $uAD = new userDA();
            return $uAD->usuarioSLogin($_userName, $_password);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
    //Selects all the students within a specific Asignacion
    function infoPersonalSListaEstudiantes($_idAsignacion)
    {
        try
        {
            $uAD = new userDA();
            return $uAD->infoPersonalSListaEstudiantes($_idAsignacion);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
    function usuarioS($_idUsuario)
    {
        try
        {
            $uAD = new userDA();
            return $uAD->usuarioS($_idUsuario);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
