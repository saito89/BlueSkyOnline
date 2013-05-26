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
            echo $_hostName,$_userName,$_password,$_dataBaseName;
		$this->dbHandle = mysqli_connect($_hostName,$_userName,$_password,$_dataBaseName) or die ("No se puede conectar a la base de datos");
		
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
		mysqli_close($this->dbHandle);
	}
	catch (Exception $ex)
	{
		echo $ex->getMessage();
	}
    }    
}
?>
