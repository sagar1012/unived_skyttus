<?php 
  include('config/database.php');
  include('includes/header.php');

  // define blank variables.. 
  $error = $full_nameErr  = $emailErr = $passwordErr = $mobileError = '';
  $success = $full_name = $email = $password = $confirm_password = '';

  if(isset($_POST) && !empty($_POST)) {

    if( empty( trim($_POST['full_name']) ) ) {
      $full_nameErr = "Name field is required.";
    } else {
      $full_name = trim($_POST['full_name']);
    }

    if( empty( trim($_POST['email']) ) ) {
      $emailErr = "Email field is required.";
    } else {
      $email = trim($_POST['email']);

      if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
          // Return Error - Invalid Email
          $emailErr = 'The email you have entered is invalid, please try again with correct one.';
      }

    }

    if( empty( trim($_POST['password']) ) ) {
      $passwordErr = "Password field is required.";
    } else {
      if(strlen(trim($_POST['password']))<8) {
        $passwordErr = "Password must be atleast 8 characters";
      }else {
        $password = trim($_POST['password']);
        $password = password_hash($password, 
            PASSWORD_DEFAULT);

      }
    }

    if(empty(trim($_POST['mobile']))) {
        $mobileError = "Mobile no field is required.";
    } else {
      if(strlen(trim($_POST['mobile']))<10) {
        $mobileError = "Mobile no must be atleast 10 digit";
      }else {
        $mobile = trim($_POST['mobile']);
      }
    }      

    if( !empty($full_name) && !empty($email) && !empty($password) && !empty($mobile) ) {


      $addUserSql = "INSERT INTO `users` (`id`, `name`,  `email`, `password`, `mobile`) VALUES (NULL, '$full_name', '$email',  '$password', '$mobile')";   

        // run query.
        mysqli_query($conn, $addUserSql);

        $success ="User registered successfully.";
    }
  }


?>
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>Ecom Teleconsult</a>
  </div>

  <?php if(isset($success) && !empty($success)){ ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?php echo $success ?> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php } ?> 

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="register.php" method="post">
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="full_name" id="full_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <p class="err-msg" id="full_nameErr"><?php echo $full_nameErr; ?></p>


        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="email" id="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <p class="err-msg" id="emailErr"><?php echo $emailErr; ?></p>

        
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

        </div>
        <p class="err-msg" id="passwordErr"><?php echo $passwordErr; ?></p>


        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Mobile" name="mobile" id="mobile">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

        </div>        
        <p class="err-msg" id="mobileErr"><?php echo $mobileError; ?></p>
        
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
 <?php 
  include('includes/footer.php');
?>