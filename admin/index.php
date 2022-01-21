<?php include('adminFunctions.php');

  include('../config/database.php');
  include('admin_includes/header.php');

  // define blank variables.. 
  $error = $emailErr = $passwordErr = '';
  $success = $email = $password = '';


  if(isset($_POST['login'])) {

    if( empty( trim($_POST['email']) ) ) {
      $emailErr = "User name field is required.";

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
      }
    }


    // get user info..
    $checkUser = getUserInfoByEmail($conn, $email);

    if($checkUser){
      
      //$row = $checkUser->fetch_assoc();
      
      $hashPassword = $checkUser['password'];
      
      // check password with stored hash
      if(password_verify($password, $hashPassword)) {

          session_start();
          $_SESSION['email']=$checkUser['email'];
          $_SESSION['id']=$checkUser['id'];

          header("location: dashboard.php");

      } else {
          $error = "You have entered wrong password.";
      }
     
    } else {
    
      $error = "Your user name or password is invalid.";
    }
  }
?>


<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Ecom teleconsult</b></a>
  </div>

<?php if(isset($error) && !empty($error)){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <?php echo $error ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <p class="err-msg"><?php echo $emailErr; ?></p>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : ''; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <p class="err-msg"><?php echo $passwordErr; ?></p>


        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!--<div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
         <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a> 
      </div>-->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forget-password.php">I forgot my password</a>
      </p>
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

 <?php 
  include('admin_includes/footer.php');
?>