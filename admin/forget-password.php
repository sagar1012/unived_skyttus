<?php 
  include('../config/database.php');
  include('admin_includes/header.php');


  // define blank variables.. 
  $error = $emailErr  = '';
  $success = $email  = '';

  if(isset($_POST['forget'])) {


    if( empty( trim($_POST['email']) ) ) {
      $emailErr = "User name field is required.";

    } else {
      $email = trim($_POST['email']);


      if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
          // Return Error - Invalid Email
          $emailErr = 'The email you have entered is invalid, please try again with correct one.';
      }

    }


    // check email is registered in database or not.. 
     $query="SELECT id,email FROM admins WHERE email='$email'";
     $checkUser=mysqli_query($conn, $query);
      
      if(mysqli_num_rows($checkUser)>0){
        
        $row = $checkUser->fetch_assoc();

        // now generate a random password and update in database.
        $randomPassword = generateRandomPassword(8);

        // now update password in database, with password_hash
        $hashPassword = password_hash($randomPassword, 
            PASSWORD_DEFAULT);

        $updatePassOnDbSql = "UPDATE `admins` SET `password` = '$hashPassword' WHERE `id` =".$row['id'];


        // Run query here..
        mysqli_query($conn, $updatePassOnDbSql);

        /* Send mail code goes here.. for password changed */



        $success="Your new password is ".$randomPassword." you can change it after login by change password option";


      } else {

        $error = "Sorry, this email is not registered with us.";

      }



  }



  function generateRandomPassword( $length ) {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      return substr(str_shuffle($chars),0,$length);
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

<?php if(isset($success) && !empty($success)){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
   <?php echo $success ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>



  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <p class="err-msg"><?php echo $emailErr; ?></p>


        <div class="row">
          <div class="col-12">
            <button type="submit" name="forget" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="index.php">Login</a>
      </p>
     <!--  <p class="mb-0">
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