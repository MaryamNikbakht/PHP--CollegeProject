<?php 
class SORT_METHODS{
	
//---------- Sorting Functions----------------
	public static function sortByMake(&$array){
		ksort($array);
	}
//---------Sorting By Ascending Price-----------
	public static function comparisonByPriceAsc($array1, $array2){
		if($array1['CurrentPrice'] == $array2['CurrentPrice'])
			return 0;
		elseif ($array1['CurrentPrice']>$array2['CurrentPrice'])
			return 1;
		else
			return -1;
	}
						
	public static function sortByPriceAsc(&$carsArray){
		uasort($carsArray, "self::comparisonByPriceAsc");
	}
//---------Sorting By Descending Price----------------------------------
	public static function comparisonByPriceDec($array1, $array2){
		if($array1['CurrentPrice'] == $array2['CurrentPrice'])
			return 0;
		elseif ($array1['CurrentPrice']<$array2['CurrentPrice'])
			return 1;
		else
			return -1;
	}
	
	function sortByPriceDec(&$carsArray){
		uasort($carsArray, "self::comparisonByPriceDec");
	}
//----------Sorting By Descending Year---------------------------------------
	public static function comparisonByYearDec($array1, $array2){
		if($array1['RegisterationYear'] == $array2['RegisterationYear'])
			return 0;
		elseif ($array1['RegisterationYear']<$array2['RegisterationYear'])
			return 1;
		else
			return -1;
	}
	
	public static function sortByYearDec(&$carsArray){
		uasort($carsArray, "self::comparisonByYearDec");
	}
//-------Sorting By Ascending Year ----------------------------------
	public static function comparisonByYearAsc($array1, $array2){
		if($array1['RegisterationYear'] == $array2['RegisterationYear'])
			return 0;
		elseif ($array1['RegisterationYear']>$array2['RegisterationYear'])
			return 1;
		else
			return -1;
	}
	
	public static function sortByYearAsc(&$carsArray){
		uasort($carsArray, "self::comparisonByYearAsc");
	}
//-------Sorting By Descending Mileage-------------------------------
	public static function comparisonByKMDec($array1, $array2){
		if($array1['MileAge'] == $array2['MileAge'])
			return 0;
		elseif ($array1['MileAge']<$array2['MileAge'])
			return 1;
		else
			return -1;
	}
	
	public static function sortByKMDec(&$carsArray){
		uasort($carsArray, "self::comparisonByKMDec");
	}
//-------Sorting By Ascending Mileage -----------------------------------------
	public static function comparisonByKMAsc($array1, $array2){
		if($array1['MileAge'] == $array2['MileAge'])
			return 0;
		elseif ($array1['MileAge']>$array2['MileAge'])
			return 1;
		else
			return -1;
	}
	
	public static function sortByKMAsc(&$carsArray){
		uasort($carsArray, "self::comparisonByKMAsc");
	}
}

?>