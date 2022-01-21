<?php  

session_start();
include('functions.php');

if( empty($_SESSION['email']) ) {
  header('location:login.php');

} else {

  include('config/database.php');
  include('includes/header.php');


  // define blank variables..
  $error = $nameErr = $emailErr = $mobiledErr = $profileErr =  $oldPasswordErr =  $newPasswordErr = $confirmPasswordErr = '';

  $success = $name = $email = $mobile = $profile_image = $old_password  = $new_password = $confirm_password = '';

  if(isset($_POST['changePassword'])) {

    if(empty(trim($_POST['old_password']))) {
        $oldPasswordErr = "Old password field is required.";
    } else {
      if(strlen(trim($_POST['old_password']))<8) {
        $oldPasswordErr = "Old password must be atleast 8 characters";
      }else {
        $old_password = trim($_POST['old_password']);


        // get user info for check old password from database..
         $userInfo = getUserInfo($conn);

        if($userInfo) {

            $dbHashPassword = $userInfo['password'];
            // check password here..
            $varifyPassword = password_verify($old_password, $dbHashPassword);
            if(!$varifyPassword) {
              $oldPasswordErr = "Old password field does not match.";
            } 

        }

      }
    }

    if(empty(trim($_POST['new_password']))) {
        $newPasswordErr = "New password field is required.";
    } else {
      if(strlen(trim($_POST['new_password']))<8) {
        $newPasswordErr = "New password must be atleast 8 characters";
      }else {
        $new_password = trim($_POST['new_password']);
      }
    }

    if(empty(trim($_POST['confirm_password']))) {
        $confirmPasswordErr = "Confirm password field is required.";
    } else {
      if(strlen(trim($_POST['confirm_password']))<8) {
        $confirmPasswordErr = "Confirm password must be atleast 8 characters";
      }else {
        $confirm_password = trim($_POST['confirm_password']);
      }
    }

    // check new password and confirm password.. 
    if(!empty($new_password) && !empty($confirm_password)) {
      if($new_password != $confirm_password) {
          $confirmPasswordErr = "Password and Confirm Password should be same.";
      } else {

        $hashPassword = password_hash($new_password, 
            PASSWORD_DEFAULT);
      
        // Update user password here 
        if(updateUserPassword($conn, $hashPassword)) {
          $_SESSION['success']="Password changed successfully.";
          header('Location: index.php');
        }
      } 

    }
  
  }
    }


?>

<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Ecom Teleconsult</b></a>
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
      <p class="login-box-msg">Change Password</p>

      <form action="" method="post">
        <div class="input-group mb-3">
            <input type="password" name="old_password" class="form-control" id="inputEmail3" placeholder="Old password" value="<?php echo (isset($_POST['old_password'])) ? $_POST['old_password'] : ''; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

          <p class="err-msg"><?php echo $oldPasswordErr; ?></p>

        <div class="input-group mb-3">
            <input type="password" name="new_password" class="form-control" id="inputEmail3" placeholder="New password" value="<?php echo (isset($_POST['new_password'])) ? $_POST['new_password'] : ''; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <p class="err-msg"><?php echo $newPasswordErr; ?></p>


        <div class="input-group mb-3">
          <input type="password" name="confirm_password" class="form-control" id="inputPassword3" placeholder="Confirm Password" value="<?php echo (isset($_POST['confirm_password'])) ? $_POST['confirm_password'] : ''; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <p class="err-msg"><?php echo $confirmPasswordErr; ?></p>



        <div class="row">
         
          <!-- /.col -->
            <div class="col-12">
              <button type="submit" name="changePassword" class="btn btn-primary btn-block">Change password</button>
            </div>          <!-- /.col -->
        </div>
      </form>

    
    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<?php 
  include('includes/footer.php');
?>