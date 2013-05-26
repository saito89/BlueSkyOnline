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
            echo "inicia usuarioSLogin";
            $connection = new mySqlConnection();
            echo "se crea instancia mySqlConnection";
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            echo "se abre la connecion de DB";
            //$db = mySqlConnection::openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $res = mysqli_query($db, "call usuarioSLogin('$_userName','$_password')");
            echo "se ejecuta query";
            $connection->closeMySqlDB();
            echo "se cierra connection";
            return $res;
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
