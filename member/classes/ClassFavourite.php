<?php 
require_once "ClassDatabase.php";

class Favourite{
	private $ID;
	private $refCar;
	private $refUser;
	

	
	private static $database;
	
	function __construct( $refCar,$refUser , $id = null){

		$this->ID = $id;
		$this->refCar = $refCar;
	    $this->refUser = $refUser;
	 
	}
	public static function Init_Database(){
		if(! isset(self::$database)){
			self::$database = new Database();
		}
	}
	
	public function Save(){
		isset($this->id)? $this->Update() : $this->CreateFav();
	}

	public function CreateFav(){
		$query = "INSERT INTO favorite(ID, referCar, referUser) ";
		$query .= "VALUES(?,?,?)";
		self::Init_Database();
		
		try{
			$sql = self::$database->Connection->prepare($query);
			$sql->bindParam(1, $this->ID);
			$sql->bindParam(2, $this->refCar);
			$sql->bindParam(3, $this->refUser);
	
			$sql->execute();
			$last_id = self::$database->Connection->LastInsertId();
			
			return $last_id;
			
		}catch(PDOException $e){
			echo "Query INSERT Failed ".$e->getMessage();
		}
	}
	
	public static function Read_favourite(){
		

		$query = "SELECT * FROM favorite";
		self::init_Database();
		try{

			$sql = self::$database->Connection->prepare($query);
			$sql->execute();
			
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);
			return $result;
			
		}
		catch(PDOException $e)
		{
			echo "Query Read Cars Failed: ".$e->getMessage();
		}
	}

	//=============================================== SEARCH BY ID ==============
public static function Read_Favourite_ID($refUser){
		

		$query = "SELECT * FROM favorite WHERE referUser='$refUser'";
		self::init_Database();
		try{

			$sql = self::$database->Connection->prepare($query);
			$sql->execute();
			
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
			
		}
		catch(PDOException $e)
		{
			echo "Query Read Cars Failed: ".$e->getMessage();
		}
	}


	//==================================================================================
	// public static function Display($array){
	
	// echo "<table class='table' border = 0>";
	//         echo "<tr>";
	// 	echo "<th><h4 style = 'width:40%;font-weight: bold;'>Picture</h4></th>";
 //        echo "<th><h4 style = 'width:50%; font-weight: bold;'>Description</h4></th>";
	
 //        echo "</tr>";
	
	// foreach($array as $key=>$value){
	// 	echo "<tr>"	;	
	// 	echo "<td align='left'>";
	// 	echo "<div> <img id='ImageContent'  src = './img/".$value['PicCar'] ."'/> ";
	// 	echo "</div>";
	// 	echo "</td>";
		
	// 	echo "<td>";
	// 	echo "<div id='ImageDetails'>";
	// 	echo "<h4 style = 'color : #CC0000'>". $value['RegisterationYear'] ." , ";
	// 	echo $value['Make']."  ".$value['Model']." , ".$value['ExteriorColor'];
	// 	echo "</h4>";
		
	// 	if($value['OldPrice'] > 0){
	// 		echo "<strike style = 'color:red'>";
	// 		echo "<h4 style = 'color: gray'> \$".$value['OldPrice'];
	// 		echo "</h4></strike>";
	// 	}
	// 	echo "<h4 style = 'color: black'> \$".$value['CurrentPrice'];
	// 	echo "</h4>";
	// 	echo "<h4 style = 'color: black'>".$value['MileAge'];
	// 	echo "</h4>";
	// 	echo "<h4 style = 'color: black'><a href='carPage.php?id=".$value['ID']."' >View More Infos</a></h4>";
	// 	echo "</div></td></tr>";
	// }
	// echo "</table>";
	
	// }
	
}
?>