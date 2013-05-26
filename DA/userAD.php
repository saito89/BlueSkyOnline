<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

final class userAD
{
    function usuarioSLogin($_userName,$_password)
    {
        try
        {
            $db = mySqlConnection::openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $res = mysqli_query($db, "call usuarioSLogin('$_userName','$_password')");
            mySqlConnection::closeMySqlDB();
            return $res;
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
