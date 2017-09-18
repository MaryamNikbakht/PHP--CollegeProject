

<?php 
// if(  !class_exists('Database') ) {
//     include('ClassDatabase.php');
// }
	require_once "ClassDatabase.php";
 	include "classCity.php";
	include "classRestCategory.php";

class Restaurant{

	private $id;
	
	private $name;
	private $street;
	private $phone;
	private $pic;	
	private $refCity;
	
	private static $database;
	
	function __construct( $rname,$street,$phone,$pic,City $referCity, $id = null){
		$this->id = $id;		
		$this->name = $rname;
		$this->street = $street;
		$this->phone = $phone;
	    $this->pic = $pic;
	    $this->refCity = $referCity;
	 
	}
	public static function Init_Database(){
		if(! isset(self::$database)){
			self::$database = new Database();
		}
	}
	// public function Save(){
	// 	isset($this->id)? $this->Update() : $this->Create();
	// }
	// public function Update(){
	// 	$this->Update_Password();
	// }
	
	// public function Update_Password(){
	// 	$query = "update member set password= '$this->password' where ID_Member=$this->id";
	// 	self::Init_Database();
	// 	try{
	// 			self::$database->Connection->exec($query);
			

	// 	}
	// 	catch(PDOException $ex){
	// 		"Query updated failed!".$ex->getMessage();
	// 	}
	// }
	
	// public function Create(){
	// 	$query = "insert into city(ID_City,nameCity,picCity) ";
	// 	$query .= "values(?,?,?)";
	// 	self::Init_Database();
	// 	try{
	// 		$sql= self::$database->Connection->prepare($query);
	// 		$sql->bindparam(1,$this->id);
	// 		$sql->bindparam(2,$this->name);
	// 		$sql->bindparam(3,$this->pic);
			
	// 		$sql->execute();
	// 		$last_id= self::$database->Connection->LastInsertId();

	// 		return $last_id;
	// 	}
	// 	catch(PDOException $ex){
	// 		"Query insert failed!".$ex->getMessage();
	// 	}
	// }
	
	public static function Restaurant_Search_City($city){
		
		 // $query = "select * from Restaurant inner join City on ";
		 // $query +="City.ID_City=Restaurant.referCity where referCity='$city'";
 			$ncity=City::Get_CityID($city);
			$query = "select * from Restaurant where referCity='$ncity'";
			self::Init_Database();
			try{
			$sql= self::$database->Connection->prepare($query);
			$sql->execute();
			$result= $sql->fetchAll(PDO::FETCH_OBJ);			
				
				return $result;	
		
		}
		catch(PDOException $ex){
			"Query select failed!".$ex->getMessage();
		}
	}


public static function Restaurant_Search_One($id){
		
		
		 $idResCategory=RestaurantCategory::Category_Search_All($id);
		 foreach($idResCategory as $key=>$value){
			$query = "select * from Restaurant where ID_restaurant='$value->ID_RestCategory'";
		self::Init_Database();
			try{
			$sql= self::$database->Connection->prepare($query);
			$sql->execute();
			$result= $sql->fetchAll(PDO::FETCH_OBJ);			
				
				return $result;	
		
		}
		
		catch(PDOException $ex){
			"Query select failed!".$ex->getMessage();
		}
		}
	}

public static function Restaurant_Search($id){
		
		echo $id;
		 $idResCategory=RestaurantCategory::Category_Search_All($id);
		 foreach($idResCategory as $key=>$value){
			$query = "select * from Restaurant where ID_restaurant='$value->ID_RestCategory'";
		self::Init_Database();
			try{
			$sql= self::$database->Connection->prepare($query);
			$sql->execute();
			$result= $sql->fetchAll(PDO::FETCH_OBJ);			
				
				return $result;	
		
		}
		
		catch(PDOException $ex){
			"Query select failed!".$ex->getMessage();
		}
		}
	}


	public static function Display($array){
	
	echo "<table class='table' border = 0>";
	        echo "<tr>";
		echo "<th><h4 style = 'width:50%;font-weight: bold;'>Picture</h4></th>";
        echo "<th><h4 style = 'width:50%; font-weight: bold;'>Description</h4></th>";
	
        echo "</tr>";
      
	foreach($array as $key=>$value){
		echo "<tr>"	;	
		echo "<td align='left'>";
		echo "<div> <img id='ImageContent' src = './img/".$value->picREstaurant ."'/> ";
		echo "</div>";
		echo "</td>";
		
		echo "<td>";
		echo "<div id='ImageDetails'>";
		
		echo "<h3 style = 'color: red'>".$value->nameRestaurant." Restaurant </h4>";
		echo "<h4 style = 'color: black'>".$value->street." <br/> ".$value->phone;
		echo "</h4>";
		echo "<h4 style = 'color: black'>Opening: ".$value->openingHour;
		echo "</h4>";
		
		

		echo "<h4 style = 'color: black'>".City::Get_Cityname($value->referCity);
		echo "</h4>";
		echo "<h4 style = 'color: black'><a href='restaurant.php?id=$value->ID_restaurant' >View Restaurant</a></h4>";
		echo "</div></td></tr>";




	}
	echo "</table>";
	
	}








// 	public static function DisplayOne($array){



// 	echo "<table class='table' border = 0>";
// 	        echo "<tr>";
// 		echo "<th><h4 style = 'width:50%;font-weight: bold;'>Picture</h4></th>";
//         echo "<th><h4 style = 'width:50%; font-weight: bold;'>Description</h4></th>";
	
//         echo "</tr>";
// foreach($array as $key=>$value){
// 		echo "<tr>"	;	
// 		echo "<td align='left'>";
// 		echo "<div> <img id='ImageContent' src = './img/".$value['picREstaurant'] ."'/> ";
// 		echo "</div>";
// 		echo "</td>";
		
// 		echo "<td>";
// 		echo "<div id='ImageDetails'>";
		
// 		echo "<h3 style = 'color: red'>".$value['nameRestaurant']." Restaurant </h4>";
// 		echo "<h4 style = 'color: black'>".$value['street']." <br/> ".$value['phone'];
// 		echo "</h4>";
// 		echo "<h4 style = 'color: black'>Opening: ".$value['openingHour'];
// 		echo "</h4>";
		
// 		echo "</div></td></tr>";




// 	}
// 	echo "</table>";
	
// 	}




}
?>