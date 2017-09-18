<?php include "include/header.php"; ?>
<?php 
 
    include "classes/ClassCar.php";
    include "classes/ClassFavourite.php";
   
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

     
        <img id='ImageContent' src="img/car2.jpg" alt="Image">
       
        
       
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
    
</div>

<br>
<!-- ******************************** -->

<br><br><br><br>

    <div class="col-md-12 text-center">

    </div>

<br><br><br><br>
<!-- ************* Category Part ******************* -->

<div class="container">

 </div> 

<?php
  Favourite::Read_Favourite_ID($_SESSION['ID']);
?>
<br><br>
<!-- ******************************** -->
<?php include "include/footer.php"?>