
           <!-- Modal -->
              <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body">

                  <!--   <font color=#CC0000><?php echo $registerUsernameErr; ?></font>
                    <font color=#CC0000><?php echo $registerEmailErr; ?></font>
                    <font color=#CC0000><?php echo $passwordConfErr; ?></font> 
                    <font color=#006600><?php echo $registerConfirm; ?></font>
                    <br/> -->
                     
          <!-- Body Modal -->
                <form action="#" method="post"> 
                    <div class="form-group">
                        <label for="email">Username:
                            <font color=#CC0000> * <?php echo $usernameErr;?></font>
                        </label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter name">
                      </div>
                     
                      <div class="form-group">
                        <label for="email">Email:
                            <font color=#CC0000> * <?php echo $emailErr;?></font>
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:
                            <font color=#CC0000> * <?php echo $passwordErr;?></font>
                        </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                      </div>
                       <div class="form-group">
                        <label for="pwd">Re_Password:
                            <font color=#CC0000> * <?php echo $retypePasswordErr;?></font>
                        </label>
                        <input type="password" class="form-control" id="re_Password" name="re_Password" placeholder="Enter re_password">
                      </div>
                      <div class="checkbox">
                      <label>
                        <font color=#CC0000> * <?php echo $privacyacceptErr;?></font>
                      </label><br>
                      <label>
                            
                        <input type="checkbox" name="privacyaccept" id="privacyaccept" required> Accept Privacy Policy</label>
                      </div>
                      <!-- <button type="Submit"   class="btn btn-default" name="submitRegister" data-backdrop="static" data-keyboard="false">Submit</button> -->
                    <button type="button"  onclick="reg();" class="btn btn-default" name="submitRegister" id="submitRegister" data-backdrop="static" data-keyboard="false">Submit</button>

                </form> 

        