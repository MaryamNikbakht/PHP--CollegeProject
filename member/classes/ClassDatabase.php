<?php 
include "dbConfig.php";

class Database{
	
	public $Connection;
	
	function __construct(){
		
		$this->OpenConnection();
		
	}
	function __destruct(){
		
		$this->CloseConnection();
	}
	function OpenConnection(){
		global $USER_DB, $PWD_DB, $NAME_DB, $SERVER_DB;
		try{
			$this->Connection = new PDO("mysql:host=$SERVER_DB; dbname=$NAME_DB",$USER_DB, $PWD_DB );
			$this->Connection->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
			
		}
		catch(PDOExeption $ex)
		{
			"Connection failed".$ex->getMessage();
		}
		
	}
	function CloseConnection(){
		$this->Connection = null;
	}
}


?>