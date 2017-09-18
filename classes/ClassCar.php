<?php 
require_once "ClassDatabase.php";

class CAR{
	private $ID;

	private $Make;
	private $Model;
	private $Status;
	private $Year;
	private $BodyType;
	private $Engine;
	private $Drivetrain;
	private $Transmition;
	private $FuelType;	
	private $OldPrice;
	private $CurrentPrice;
	private $Mileage;
	private $Doors;
	private $Seats;
	private $ExteriorColor;
	private $EnteriorColor;	
	private $Image;

	
	private static $database;
	
	function __construct(  $make, $model,$status,$year, $bodyType, $engine, $drivetrain, $transmition, $fuelType, $oldPrice, $price, $mileage, $doors, $seats, $exteriorColor, $enteriorColor, $image, $id = null){

		$this->ID = $id;
		$this->Year = $year;
	    $this->Make = $make;
	    $this->Model = $model;
	    $this->Status = $status;
	    $this->BodyType = $bodyType;
	    $this->Engine = $engine;
	    $this->Drivetrain = $drivetrain;
	   $this->Transmition = $transmition;
	   $this->FuelType = $fuelType;
	   $this->OldPrice =  $oldPrice;
		$this->CurrentPrice = $price;
	   $this->Mileage = $mileage;
	   $this->Doors = $doors;
	   $this->Seats = $seats;		
		 $this->ExteriorColor = $exteriorColor;
		$this->EnteriorColor = $enteriorColor;
		$this->Image = $image;
	}
	public static function Init_Database(){
		if(! isset(self::$database)){
			self::$database = new Database();
		}
	}
	// public function Save(){
	// 	return isset($this->id)? $this->Update() : $this->Create();
	// }
	// public function Update(){
		
	// }
	
	// public function Create(){
	// 	$query = "INSERT INTO CAR(ID, Year, Make, Model, OldPrice, Price, KM, Image) ";
	// 	$query .= "VALUES(?,?,?,?,?,?,?,?)";
	// 	self::Init_Database();
		
	// 	try{
	// 		$sql = self::$database->Connection->prepare($query);
	// 		$sql->bindParam(1, $this->ID);
	// 		$sql->bindParam(2, $this->Year);
	// 		$sql->bindParam(3, $this->Make);
	// 		$sql->bindParam(4, $this->Model);
	// 		$sql->bindParam(5, $this->OldPrice);
	// 		$sql->bindParam(6, $this->Price);
	// 		$sql->bindParam(7, $this->KM);
	// 		$sql->bindParam(8, $this->Image);
	// 		$sql->execute();
	// 		$last_id = self::$database->Connection->LastInsertId();
			
	// 		return $last_id;
			
	// 	}catch(PDOException $e){
	// 		echo "Query INSERT Failed ".$e->getMessage();
	// 	}
	// }
	
	public static function Read_Cars(){
		

		$query = "SELECT * FROM car";
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
//=============================================== SEARCH BY MAKE ==============
	public static function Read_Cars_Make($car){
		

		$query = "SELECT * FROM car WHERE Make='$car'";
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
//=============================================== SEARCH BY MODEL ==============
	public static function Read_Cars_Model($car){
		

		$query = "SELECT * FROM car WHERE Model='$car'";
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
//=============================================== SEARCH BY Bodytype ==============
	public static function Read_Cars_BodyType($car){
		

		$query = "SELECT * FROM car WHERE BodyType='$car'";
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
public static function Read_Car_ID($id){
		

		$query = "SELECT * FROM car WHERE ID='$id'";
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


	//=======================================================================================
	public static function Display($array){
	
	echo "<table class='table' border = 0>";
	        echo "<tr>";
		echo "<th><h4 style = 'width:40%;font-weight: bold;'>Picture</h4></th>";
        echo "<th><h4 style = 'width:50%; font-weight: bold;'>Description</h4></th>";
	
        echo "</tr>";
	
	foreach($array as $key=>$value){
		echo "<tr>"	;	
		echo "<td align='left'>";
		echo "<div> <img id='ImageContent'  src = './img/".$value['PicCar'] ."'/> ";
		echo "</div>";
		echo "</td>";
		
		echo "<td>";
		echo "<div id='ImageDetails'>";
		echo "<h4 style = 'color : #CC0000'>". $value['RegisterationYear'] ." , ";
		echo $value['Make']."  ".$value['Model']." , ".$value['ExteriorColor'];
		echo "</h4>";
		
		if($value['OldPrice'] > 0){
			echo "<strike style = 'color:red'>";
			echo "<h4 style = 'color: gray'> \$".$value['OldPrice'];
			echo "</h4></strike>";
		}
		echo "<h4 style = 'color: black'> \$".$value['CurrentPrice'];
		echo "</h4>";
		echo "<h4 style = 'color: black'>".$value['MileAge'];
		echo "</h4>";
		echo "<h4 style = 'color: black'><a href='carPage.php?id=".$value['ID']."' >View More Infos</a></h4>";
		echo "</div></td></tr>";
	}
	echo "</table>";
	
	}
	
}
?>