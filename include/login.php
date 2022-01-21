  <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-login modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-0">
                  <div class="card login-card card-custom">
                     <div class="card-header p-0">
                        <img src="assets/img/login_img.svg" class="w-100 login-img" alt="" title="">
                     </div>
                     <div class="card-body">
                        <form action="login_cs.php" method="post" name="login_form" class="user_login_form">
                           <div class="login-section">
                              <div class="login-div-top">
                                 <h2 class="login-main-title mb-0 color-brown">Welcome</h2>
                                 <h5 class="text-darkgray lead login-bottom-text">Sign in to your account</h5>
                              </div>
                              <div>
                                 <div class="alert alert-danger error_cls_1" role="alert" style="display: none;" > 
                                 </div>
                              </div>
                              <div class="form-group form-group-mb">
                                 <div class="form-control-inside position-relative">
                                    <input type="email" class="form-control position-relative" placeholder="Email Id"   name="email" id="login_email" value="" >
                                    <i class="ri-mail-line email-id-icon login-icon"></i>
                                 </div>
                              </div>
                              <div class="form-group form-group-mb">
                                 <div class="form-control-inside position-relative">
                                    <input type="password" class="form-control position-relative" placeholder="Password"   id="login_password" name="password" value="" >
                                    <i class="ri-lock-password-line password-icon login-icon"></i> 
                                 </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-end">
                                 <div class="">
                                    <a href="forgot.php" class="link link-brown font-medium font-size-16px">Forget Password?</a>
                                 </div>
                              </div>
                              <div class="form-actions ext-end d-flex align-items-center justify-content-between">
                                 <div>
                                    <span class="color-brown">New User?</span><div><a href="signup.php" class="link link-theme font-size-14px">User Sign Up</a> / <a href="expert_signup.php" class="link link-theme ms-1 font-size-14px">Expert Sign Up</a>
                                 </div></div>
                                 <input type="submit" id="user_login_btn" class="btn btn-theme btn-login" value="Log In" />
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>