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
        $usernameErr = '';
        $passwordErr = '';
        $loginErr = '';
        $loginConfirm = '';
  
          if(isset($_POST['Login'])){
            
            if (empty($_POST['username'])) {
              $usernameErr = "required";
            } 
            if (empty($_POST['password'])) {
              $passwordErr = "required";
            }    
            if(!empty($_POST['username']) && !empty($_POST['password']))
            {
              $username = $_POST['username'];
              $password = $_POST['password'];
              //Send a query to database to check the username and password
                    
              
              $result = User::Member_Exists($username, $password);
               if(!$result){
                $usernameErr = "Error";
                $passwordErr = "Error";
               
                $loginErr .= '<strong>   Error : Username and Password combination is incorrect !</strong><br/><br/><br/><br/>';
              }else{
                
                $loginConfirm .= "<strong>   Your Login is Successfull ! </strong><br/><br/><br/><br/>";

                  $_SESSION['Username'] = $username;              
                  $_SESSION['ID'] = User::Get_Id($user);
                
                  header('Location: member/index.php');
             

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
              <strong>Username :</strong><font color=#CC0000> * <?php echo $usernameErr;?></font><input type="text" name = "username" class="form-control"><br/>
              <strong>Password :</strong><font color=#CC0000> * <?php echo $passwordErr;?></font><input type="password" name = "password" class="form-control">
              <br/> 
              <input class = "btn btn-primary" type="submit" name="Login" value='Sign In'> 
              <a href="changPWD.php">Forgot your password?</a>
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