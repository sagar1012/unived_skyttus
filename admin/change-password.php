<?php 
session_start();
if( empty($_SESSION['email']) ) {
  header('location:index.php');

} else {


  include('../config/database.php');
  include('includes/header.php');
  include('includes/left-sidebar.php'); 

  // define blank variables..
  $error = $oldPasswordErr =  $newPasswordErr = $confirmPasswordErr = '';
  $success = $old_password  = $new_password = $confirm_password = '';


  if(isset($_POST['submit'])) {

    if(empty(trim($_POST['old_password']))) {
        $oldPasswordErr = "Old password field is required.";
    } else {
      if(strlen(trim($_POST['old_password']))<8) {
        $oldPasswordErr = "Old password must be atleast 8 characters";
      }else {
        $old_password = trim($_POST['old_password']);


        // get user info for check old password from database..
        $getUserSql = "SELECT * FROM admins WHERE id=".$_SESSION['id'];
        $result = mysqli_query($conn, $getUserSql);
        if(mysqli_num_rows($result)>0) {

            $row = $result->fetch_assoc();
            $dbHashPassword = $row['password'];
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
      
        // now here.. update password in database..
        $updatePassOnDbSql = "UPDATE `admins` SET `password` = '$hashPassword' WHERE `id` =".$_SESSION['id'];
        
        // Run query here..
        mysqli_query($conn, $updatePassOnDbSql);

        $success="Password changed successfully.";
        $_POST = array();        

      } 

    }

  
  }

}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Main content -->
    <section class="content">

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


          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" class="form-horizontal" method="post">
                <div class="card-body">



                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Old Password*</label>
                    <div class="col-sm-10">
                      <input type="password" name="old_password" class="form-control" id="inputEmail3" placeholder="Old password" value="<?php echo (isset($_POST['old_password'])) ? $_POST['old_password'] : ''; ?>">
                      <p class="err-msg"><?php echo $oldPasswordErr; ?></p>
                    </div>
                  </div>
                  

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">New password*</label>
                    <div class="col-sm-10">
                      <input type="password" name="new_password" class="form-control" id="inputEmail3" placeholder="New password" value="<?php echo (isset($_POST['new_password'])) ? $_POST['new_password'] : ''; ?>">
                      <p class="err-msg"><?php echo $newPasswordErr; ?></p>
                    </div>
                  </div>
                  


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password*</label>
                    <div class="col-sm-10">
                      <input type="password" name="confirm_password" class="form-control" id="inputPassword3" placeholder="Confirm Password" value="<?php echo (isset($_POST['confirm_password'])) ? $_POST['confirm_password'] : ''; ?>">
                      <p class="err-msg"><?php echo $confirmPasswordErr; ?></p>
                    </div>
                  </div>
                  


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-info">Change Password</button>
                  <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
  include('includes/footer.php');
?>