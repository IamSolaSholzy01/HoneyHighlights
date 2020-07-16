<!--Beginning of Modal-->
<div class="container" id="loginSection">
        
        <div class="modal fade login" id="loginModal">
             <div class="modal-dialog login animated" style="margin-top: 150px;">
                 <div class="modal-content">
                    <div class="modal-header">
                       <button type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                       <h4 class="modal-title">Login with</h4>
                   </div>
                   <div class="modal-body">
                       <div class="box"> 
                            <div class="content">
                                <div class="form loginBox">
                                    <div class="error" id="reply"></div>
                                    <form class="logform" method="POST" action="php/server.php" accept-charset="UTF-8" name="logginginform">
                                        <input id="loginemail" class="form-control" title="Please put in an existing email address" type="email" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" placeholder="Email" name="email" required>
                                        <input id="loginpassword" class="form-control" type="password" title="Please put in a valid password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" placeholder="Password" name="password" required>
                                        <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> ><label for="remember-me" style="padding-left: 2px;"> Remember me</label>
                                        <input class="btn-login" id="loginbtn" type="submit" value="Login">
                                    </form>
                                </div>
                               <div class="division">
                                   <div class="line l"></div>
                                     <span>or</span>
                                   <div class="line r"></div>
                               </div>
                               <div class="social">
                                   <div class="g-signin2" data-onsuccess="onSignIn" data-width="auto" data-longtitle="true" data-style="text-align: center;"></div>
                               </div>
                            </div>
                       </div>
                       <div class="box">
                           <div class="content registerBox" style="display:none;">
                            <div class="error" id="response"></div>
                            <div class="form">
                                   <form class="registrationform" method="POST" action="php/server.php" accept-charset="UTF-8" id="registerform" name="registerform">
                                       <input id="firstname" class="form-control" type="text" title="Please input your firstname" placeholder="First name" name="firstname" required>
                                       <input id="surname" class="form-control" type="text" title="Please input your surname" placeholder="Last name" name="surname" required>
                                       <input id="username" class="form-control" type="text" title="Username must not be less than 4 characters" placeholder="Username" pattern="(?=.*[a-z]).{4,}" name="username" required>
                                       <input id="regemail" class="form-control" type="email" title="Please input a valid email address" placeholder="Email" name="email" required>
                                       <div><input id="regpassword" onblur="return validateForm()" onfocus="aliababwa()" title="Minimum 6 characters, must include at least one lowercase and one uppercase letter, and at least one number." class="form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" placeholder="Password" name="password" required /><p id="passwordshow" class="field-icon" style="display: none;">Show</p></div>
                                       <span id="passError" style="color: red;"></span>
                                       <div><input id="passwordconfirmation" onblur="return validateForm()" onfocus="alibaba()" class="form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" placeholder="Repeat Password" name="password_confirmation" required /><p id="confirmpasswordshow" class="field-icon" style="display: none;">Show</p></div>
                                       <span id="confirmError" style="color: red;"></span>
                                       <input id="registerbtn" class="btn-register" type="submit" name="commit" value="Create account" />
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <div class="forgot login-footer">
                           <span>Looking to
                                <a id="createacc" href="javascript: showRegisterForm();">create an account</a>
                           ?</span>
                       </div>
                       <div class="forgot register-footer" style="display:none">
                            <span>Already have an account?</span>
                            <a href="javascript: showLoginForm();" id="logginuser">Login</a>
                       </div>
                   </div>
                 </div>
             </div>
         </div>
   </div>
<!----End of Modal-->
