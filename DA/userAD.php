<?php
include 'mySqlConnection.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class userAD
{
    function usuarioSLogin($_userName,$_password)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            //$db = mySqlConnection::openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $res = mysqli_query($db, "call usuarioSLogin('$_userName','$_password')");
            $connection-->closeMySqlDB();
            return $res;
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
