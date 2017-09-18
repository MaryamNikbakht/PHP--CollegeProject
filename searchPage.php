<?php 
  if(! isset($_SESSION)){
    session_start();
  }
?>


<?php include "include/header.php"; ?>
<?php 
 
    include "classes/ClassCar.php";
    include "classes/ClassSort.php";
   
?>
 <!-- ************** car Pic ****************** -->
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img id='ImageContent' style="background-color: brown;" src="" >



<!-- //********************************8 -->
<div class="main-text">
    <div class="col-md-3 text-center">
       <div class="btn-group">

     
        <img id='ImageContent' src="img/car5.jpg" alt="Image">
       
        
       
     <!-- Form code ends -->

  
  </div>
    </div>
</div>

<!-- //********************************8 -->





        <div class="carousel-caption">
          <h3>
            Best Online Marketplace 
          </h3>
          
          
              <span class="glyphicon glyphicon-star" data-rating="1" Style="color: yellow;"></span>
              <span class="glyphicon glyphicon-star" data-rating="2" Style="color: yellow;"></span>
              <span class="glyphicon glyphicon-star" data-rating="3" Style="color: yellow;"></span>
              <span class="glyphicon glyphicon-star" data-rating="4" Style="color: yellow;"></span>
              <span class="glyphicon glyphicon-star" data-rating="5" Style="color: yellow;"></span>
              <input type="hidden" name="whatever" class="rating-value" value="3">
         
          
          
        </div> 




      </div>

    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<br>
<!-- ******************************** -->

<br><br><br><br>

    <div class="col-md-12 text-center">
       <div class="btn-group">
<form class="form-inline" action="#" method="post">
          <div class="form-group">
            
            <select type="dropdown" class="form-control" name="typeSearch" id="typeSearch" >
                <option value="0">Search All</option>
                <option value="1">Search by Make</option>
                <option value="2">Search by Model</option>
                <option value="3">Search by Bodytype</option>
             
            </select>
          </div>
          <div class="form-group">
           
            <input type="dropdown-toggle" class="form-control" id="infoEnter" placeholder="Enter Info" name="infoEnter">
          </div>
          
         <select type="dropdown" class="form-control" name="Sort" >
                <option value="0">Sort by Make</option>
                <option value="1">Sort by Price</option>
                <option value="2">Sort by Km</option>
                <option value="3">Sort by Year</option>
                                
            
            </select>

        
        
         
          <button type="submit"  name="search" class="btn btn-danger">Search </button>
        </form>


  </div>
    </div>

<br><br><br><br>
<!-- ************* Category Part ******************* -->

<div class="container">
<?php 

  
if (isset($_POST['search'])) {
 

  if ($_POST['typeSearch']=='0') {       
     $array=CAR::Read_Cars();
      CAR::Display($array);  
}
    if ($_POST['typeSearch']=='1') {
   
        $car=$_POST['infoEnter'];    
       $array=CAR::Read_Cars_Make($car);
       CAR::Display($array);
       
   }
  
    if ($_POST['typeSearch']=='2') {       
      $car=$_POST['infoEnter'];    
     $array=CAR::Read_Cars_Model($car);
      CAR::Display($array);        
   
  }
    if ($_POST['typeSearch']=='3') {       
      $car=$_POST['infoEnter'];    
     $array=CAR::Read_Cars_BodyType($car);
      CAR::Display($array);        
   
  }
    
 

        if (!empty($_POST['Sort'])) {
      // if ($_POST['Sort']=='0') {
      //   SORT_METHODS::sortByMake(&$array)
      // }      
      //  if ($_POST['Sort']=='2') {
      //   SORT_METHODS::sortByKMAsc(&$array)
      // }        
   
  }
  
}
?> 
 </div> 


<br><br>
<!-- ******************************** -->
<?php include "include/footer.php"?>