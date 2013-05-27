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
        echo "entro a cursoSInfo <br>";
        try
        {
            $cAD = new cursoDA();
            echo "crea instancia de cursoDA <br>";
            return $cAD->cursoSInfo($_idUsuario);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
