<?php
include '../DA/cursoDA.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class cursoLG
{
    function cursoSInfo($_idUsuario)
    {
        try
        {
            $cAD = new cursoDA();
            return $cAD->cursoSInfo($_idUsuario);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
    function usuario_has_cursoI($_idUsuario,$_idCurso)
    {
        try
        {
            $cAD = new cursoDA();
            return $cAD->usuario_has_cursoI($_idUsuario,$_idCurso);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
