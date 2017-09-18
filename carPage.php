<?php include "include/header.php"?>
<?php include "classes/ClassCar.php"?>

<?php $idRes=$_GET['id']; 
 
  
   $resultOne=CAR::Read_Car_ID($idRes);
    foreach($resultOne as $key=>$value){
        
        $idcar = $value['ID'];
        $Year = $value['RegisterationYear'];
       $Make =$value['Make'];
        $Model = $value['Model'];
      $Status = $value['Status'];
      $BodyType = $value['BodyType'];
      $Engine = $value['Engine'];
      $Drivetrain = $value['drivetrain'];
     $Transmition = $value['Transmission'];
     $FuelType = $value['FuelType'];
     $OldPrice =  $value['OldPrice'];
    $CurrentPrice = $value['CurrentPrice'];
     $Mileage = $value['MileAge'];
     $Doors = $value['Doors'];
     $Seats = $value['Seats'];   
     $ExteriorColor = $value['ExteriorColor'];
    $InteriorColor = $value['InteriorColor'];
    $Image = $value['PicCar'];

   }



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
        <img id='ImageContent' style="background-color: brown;" src="img/bacKCar4.jpg" >



<!-- //********************************8 -->
<div class="main-text">
    <div class="col-md-12 text-center">
       <div class="btn-group">

     
        <img id='ImageContent' src="img/<?php echo $Image; ?>" alt="Image">
       
        
       
     <!-- Form code ends -->

  
  </div>
    </div>
<div class="col-md-12 text-center">          
          
              <span class="glyphicon glyphicon-star" data-rating="1" Style="color: yellow;"></span>
              <span class="glyphicon glyphicon-star" data-rating="2" Style="color: yellow;"></span>
              <span class="glyphicon glyphicon-star" data-rating="3" Style="color: yellow;"></span>
              <span class="glyphicon glyphicon-star" data-rating="4" Style="color: yellow;"></span>
              <span class="glyphicon glyphicon-star" data-rating="5" Style="color: yellow;"></span>
             
          <h2>
            <?php echo $Status.' '.$Year.' '.$Make.' '.$Model; ?> 
          </h2>
          
          <p>
            
            <table class='table table-borderless'>
              <tr>
                  <td><h4>
                      Stock Number :
                  </h4></td>
                  <td>
                      <?php echo $idcar; ?>
                  </td>
                  <td><h4>
                      Body:
                  </h4></td>
                  <td>
                      <?php echo $BodyType; ?>
                  </td>
              </tr>
              <tr>
                  <td><h4>
                      Engine :
                  </h4></td>
                  <td>
                      <?php echo $Engine; ?>
                  </td>
                  <td><h4>
                      Drivetrain:
                  </h4></td>
                  <td>
                      <?php echo $Drivetrain; ?>
                  </td>
              </tr>
              <tr>
                  <td><h4>
                      Transmission :
                  </h4></td>
                  <td>
                      <?php echo $Transmition; ?>
                  </td>
                  <td><h4>
                      Fuel:
                  </h4></td>
                  <td>
                      <?php echo $FuelType; ?>
                  </td>
              </tr>
               <tr>
                  <td><h4>
                      OldPrice/Price :
                  </h4></td>
                  <td>
                      <?php echo $OldPrice.'/'.$CurrentPrice; ?>
                  </td>
                  <td><h4>
                      KM:
                  </h4></td>
                  <td>
                      <?php echo $Mileage; ?>
                  </td>
              </tr>
               <tr>
                  <td><h4>
                      Doors:
                  </h4></td>
                  <td>
                      <?php echo $Doors; ?>
                  </td>
                  <td><h4>
                      Seats:
                  </h4></td>
                  <td>
                      <?php echo $Seats; ?>
                  </td>
              </tr>
               <tr>
                  <td><h4>
                      Color:
                  </h4></td>
                  <td>
                      <?php echo $ExteriorColor; ?>
                  </td>
                  <td><h4>
                      Interior Color:
                  </h4></td>
                  <td>
                      <?php echo $InteriorColor; ?>
                  </td>
              </tr>
                              
              
           
            </table>


          </p>

          

</div>

</div>

<!-- //********************************8 -->





        <div class="carousel-caption">
        
        </div> 




      </div>

<br>
       
</div>

<br>


 
<br><br>
 <!-- ******************************** -->
<?php include "include/footer.php"?>