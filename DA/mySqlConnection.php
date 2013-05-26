<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class mySqlConnection
{
    //Connection handler
    private $dbHandle;

    //Connects to DB
    function openMySqlDB($_hostName,$_userName,$_password,$_dataBaseName)
    {
	try
	{
            echo "inicia apertura Base";
		$this->dbHandle = mysqli_connect($_hostName,$_userName,$_password,$_dataBaseName) or die ();
		echo "Connected";
		
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
    }

    //Closes DB connection
    function closeMySqlDB()
    {
	try
	{
                echo "inicia cierre coneccion base";
		mysqli_close($this->dbHandle);
		echo "Closed connection";
	}
	catch (Exception $ex)
	{
		echo $ex->getMessage();
	}
    }    
}
?>
