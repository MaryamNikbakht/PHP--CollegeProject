

<?php 
// if(  !class_exists('Database') ) {
//     include('ClassDatabase.php');
// }
require_once "ClassDatabase.php";
//include "classRestaurant.php";
class RestaurantCategory{
	private $id;
	
	private $refRest;
	private $refCategory;	
	
	private static $database;
	
	function __construct( $refRest, $refCategory, $id = null){
		$this->id = $id;		
		$this->refRest = $refRest;
	    $this->refCategory = $refCategory;
	 
	}
	public static function Init_Database(){
		if(! isset(self::$database)){
			self::$database = new Database();
		}
	}

		public static function Category_Search_All($id){		

 			
			$query = "select ID_RestCategory from restcategory where RefCategory='$id'";
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



	// public static function Display($array){
	
	// echo "<table class='table' border = 0>";
	//         echo "<tr>";
	// 	echo "<th><h4 style = 'width:50%;font-weight: bold;'>Picture</h4></th>";
 //        echo "<th><h4 style = 'width:50%; font-weight: bold;'>Description</h4></th>";
	
 //        echo "</tr>";
	// foreach($array as $key=>$value){
	// 	echo "<tr>"	;	
	// 	echo "<td align='left'>";
	// 	echo "<div> <img id='ImageContent' src = './img/".$value->picREstaurant ."'/> ";
	// 	echo "</div>";
	// 	echo "</td>";
		
	// 	echo "<td>";
	// 	echo "<div id='ImageDetails'>";
		
	// 	echo "<h3 style = 'color: red'>".$value->nameRestaurant." Restaurant </h4>";
	// 	echo "<h4 style = 'color: black'>".$value->street." <br/> ".$value->phone;
	// 	echo "</h4>";
	// 	echo "<h4 style = 'color: black'>Opening: ".$value->openingHour;
	// 	echo "</h4>";
		
		

	// 	echo "<h4 style = 'color: black'>".City::Get_Cityname($value->referCity);
	// 	echo "</h4>";
	// 	echo "<h4 style = 'color: black'><a href='restaurant.php?id=$value->ID_restaurant' >View Restaurant</a></h4>";
	// 	echo "</div></td></tr>";




	// }
	// echo "</table>";
	
	// }
	
	







}
?>