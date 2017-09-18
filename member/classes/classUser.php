

<?php 
include "ClassDatabase.php";
class User{
	private $id;
	
	private $username;
	private $password;
	private $email;
	
	private static $database;
	
	function __construct( $uname, $pass, $email, $id = null){
		$this->id = $id;		
		$this->username = $uname;
	    $this->password = $pass;
	    $this->email = $email;
	}
	public static function Init_Database(){
		if(! isset(self::$database)){
			self::$database = new Database();
		}
	}
	public function Save(){
		isset($this->id)? $this->Update() : $this->Create();
	}
	public function Update(){
		$this->Update_Password();
	}
	
	public function Update_Password($id,$password){
		$query = "update user set password= '$this->password' where ID=$this->id";
		self::Init_Database();
		try{
				self::$database->Connection->exec($query);
			

		}
		catch(PDOException $ex){
			"Query updated failed!".$ex->getMessage();
		}
	}
	
	public function Create(){
		$query = "insert into user(ID,username,password,email) ";
		$query .= "values(?,?,?,?)";
		self::Init_Database();
		try{
			$sql= self::$database->Connection->prepare($query);
			$sql->bindparam(1,$this->id);
			$sql->bindparam(2,$this->username);
			$sql->bindparam(3,$this->password);
			$sql->bindparam(4,$this->email);
			$sql->execute();
			$last_id= self::$database->Connection->LastInsertId();

			return $last_id;
		}
		catch(PDOException $ex){
			"Query insert failed!".$ex->getMessage();
		}
	}
	
	public static function Member_Exists($username, $password){
		$query = "select ID from user where username='$username' and password='$password'";
		self::Init_Database();
			try{
			$sql= self::$database->Connection->prepare($query);
			$sql->execute();
			$result= $sql->fetch(PDO::FETCH_OBJ);
			
			return !empty($result->ID);
		
		}
		catch(PDOException $ex){
			"Query select failed!".$ex->getMessage();
		}
	}

public static function Email_Exists($email){
		$query = "select email from user where email='$email'";
		self::Init_Database();
			try{
			$sql= self::$database->Connection->prepare($query);
			$sql->execute();
			$result= $sql->fetch(PDO::FETCH_OBJ);
			
			return !empty($result->email);
		
		}
		catch(PDOException $ex){
			"Query select failed!".$ex->getMessage();
		}
	}


public static function Get_Id($user){
		$query = "select ID from user where username='$user'";
		self::Init_Database();
			try{
			$sql= self::$database->Connection->prepare($query);
			$sql->execute();
			$result= $sql->fetch(PDO::FETCH_OBJ);
			
			return !empty($result->ID);
		
		}
		catch(PDOException $ex){
			"Query select failed!".$ex->getMessage();
		}
	}



	public static function Username_Exists($username){
		$query = "select username from user where username='$username'";
		self::Init_Database();
			try{
			$sql= self::$database->Connection->prepare($query);
			$sql->execute();
			$result= $sql->fetch(PDO::FETCH_OBJ);
			
			return !empty($result->username);
		
		}
		catch(PDOException $ex){
			"Query select failed!".$ex->getMessage();
		}
	}

}
?>