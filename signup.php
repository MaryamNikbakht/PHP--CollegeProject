<?php 
    include "classes/classUser.php";
    //required Fields
  $usernameErr = '';
  $emailErr = '';
    $passwordErr = '';
    $retypePasswordErr = '';
  
  //validation of registration 
    $passwordConfErr = '';
    $registerConfirm = '';
  $registerEmailErr = '';
  $registerUsernameErr = ''; 

  if(isset($_POST['submitNew'])){
  
    if (empty($_POST['username'])) {
    $usernameErr = "required";   
  } 
    if (empty($_POST['email'])) {
    $emailErr = "required";   
  } 
    if (empty($_POST['password'])) {
    $passwordErr = "required";  
  }
    if (empty($_POST['retypePassword'])) {
    $retypePasswordErr = "required"; 
  }  
     
    if(!empty($_POST['username'])&& !empty($_POST['email'])&& !empty($_POST['password'])&&!empty($_POST['retypePassword']))
    {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];
    
        //Check if the password and its confirmation are the same
        if($password != $retypePassword){
      $passwordErr =  "Error"; 
            $retypePasswordErr =  "Error"; 
            $passwordConfErr = '<img src="images/No.png" width="25px" />';
            $passwordConfErr.= '  Error : Password inputs do not match !<br/><br/>';
        }
        //Send a query to database to check if the email exists 
    if(User::Email_Exists($email)){
      $emailErr = "Error"; 
            
            $registerEmailErr .= '  Error : Email Address already exist !<br/><br/>';
        }
    if(User::Username_Exists($username)){
      $usernameErr = "Error";   
            
            $registerUsernameErr .= '  Error : Username already exist !<br/><br/>';
        }
    //Send a query to database to check if the username exists
      if(! User::Email_Exists($email) && !User::Username_Exists($username) && ($password == $retypePassword)){
           //Send a query to database to insert the data of the new member 
      
             $newUser = new User($username, $password, $email);
             $newUser->Save();
      
            header('Location: login.php');
        }
    
    } 
}


?>
  


<?php include "include/header.php"?>
<br/>
    <br/>
<div class="container text-center">    
    
    <div class="col-sm-6"  style="font-size:15px; text-align: left;">
   
      <span><h2>Register <h2/></span>
   
  
       <strong>
       <div class="col-xs-12" style="font-size:15px; text-align: left;">
            <font color=#CC0000><?php echo $registerUsernameErr; ?></font>
            <font color=#CC0000><?php echo $registerEmailErr; ?></font>
            <font color=#CC0000><?php echo $passwordConfErr; ?></font> 
            <font color=#006600><?php echo $registerConfirm; ?></font>
            <br/>
         
           <big><font color=#CC0000>* required field.</big></font>
           <br/>
           <form action="#" method="post">
              <div class="form-group" style="text-align: left;">
                  <br/>
                          Username:<font color=#CC0000> * <?php echo $usernameErr;?></font><input type="text" name = "username" class="form-control">
                          <br/>
                  Email Address:<font color=#CC0000> * <?php echo $emailErr;?></font><input type="email" name = "email" class="form-control">
                  <br/>
                  Password:<font color=#CC0000> * <?php echo $passwordErr;?></font><input type="password" name = "password" class="form-control">
                           <br/>
                          Re-type Password:<font color=#CC0000> * <?php echo $retypePasswordErr;?></font><input type="password" name = "retypePassword"  class="form-control">
                           <br/>
                          <input class = "btn btn-primary" type="submit" name="submitNew" value='Register'> 
                          
                           <br/>                 
             
              </div>
               
           </form>
      </div> 
           
   
      </strong>
     </div>


      <!-- <div class="col-md-4"> 
             <br>
             <br><br><br>
          <img src="img/3bra2.jpg" class="img-rounded" style="width:100%" alt="Image">
             
        </div> -->
   </div>
        




<!-- ******************************** -->
 <?php include "include/footer.php"?>