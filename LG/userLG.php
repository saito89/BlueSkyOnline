<?php
include '../DA/userAD.php';
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
            echo "entro a usuarioSLogin del LG <br>";
            $uAD = new userDA();
            echo "creo instancia de userAD <br>";
            return $uAD->usuarioSLogin($_userName, $_password);
            echo "devolvio entidad de usuario";
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
