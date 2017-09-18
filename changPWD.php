<?php 
  if(! isset($_SESSION)){
    session_start();
  }
?>

<?php include "include/header.php";
    
?>



<!-- //**************************************** -->

  <?php
    include "classes/classUser.php";
        $newpasswordErr = '';
        $passwordErr = '';
        $loginErr = '';
        $loginConfirm = '';
  
          if(isset($_POST['Login'])){
            
            if (empty($_POST['newpassword'])) {
              $newpasswordErr = "required";
            } 
            if (empty($_POST['password'])) {
              $passwordErr = "required";
            }    
            if(!empty($_POST['newpassword']) && !empty($_POST['password']))
            {
              $newpassword = $_POST['newpassword'];
              $password = $_POST['password'];
              
                    
              
               
               if(!($newpassword==$password)){
                $newpasswordErr = "Error";
                $passwordErr = "Error";
               
                $loginErr .= '<strong>   Error : Password and Re_Password combination is incorrect !</strong><br/><br/><br/><br/>';
              }else{
                $username=$_SESSION['Username'];
                $result = User::Update_Password($id,$password);
                $loginConfirm .= "<strong>   Creating new password is Successfull ! </strong><br/><br/><br/><br/>";

                 // $_SESSION['Username'] = $username;              
                
                
                  header('Location: ../login.php');
             

              }
            }
          }
        ?>



  <!-- ******************* *********** -->
<br/>
    <br/>
    <br/>
    <br/>









<div class="container text-center">    
    
    <div class="col-sm-6"  style="font-size:15px; text-align:left;" >
               <font color=#CC0000><?php echo $loginErr; ?></font> 
               <font color=#006600><?php echo $loginConfirm; ?></font> 
      
              <strong><font color=#CC0000>* required field.</strong></font>
              <br/>
              <form action="#" method="post">
              <div class="form-group">
              <br/>
              <strong>Enter new password :</strong><font color=#CC0000> * <?php echo $newpasswordErr;?></font><input type="text" name = "newpassword" class="form-control"><br/>
              <strong>Enter re_password :</strong><font color=#CC0000> * <?php echo $passwordErr;?></font><input type="password" name = "password" class="form-control">
              <br/> 
              <input class = "btn btn-primary" type="submit" name="Login" value='Sign In'> 
              
              <br/>
              </div>
              </form>
          
        </div>
        <!--  <div class="col-md-4"> 
             
           
          <img src="img/car1.jpg" class="img-rounded" style="width:100%" alt="Image">
             
        </div> -->
    
</div><br>




<!-- ******************************** -->
<?php include "include/footer.php"?>