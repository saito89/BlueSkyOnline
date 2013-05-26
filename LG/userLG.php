<?php
include '../AD/userAD.php';
include '../EN/usuarioEN.php';
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
            $uAD = new userAD();
            return $uAD->usuarioSLogin($_userName, $_password);
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
