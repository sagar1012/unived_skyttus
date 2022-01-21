<?php 
session_start();
include('functions.php');

if( empty($_SESSION['email']) ) {
  header('location:auth/login.php');

} else {
  include('config/database.php');
  include('includes/header.php');

  $error = $nameErr = $emailErr =  $mobiledErr = $profileErr = '';
  $success = $name = $email = $mobile = $profile_image = '';

  // get user info information here.. 

    $row = getUserInfoById($conn, $_SESSION['id']);

  if(isset($_POST['updateProfile'])) {


    $profile_image = $_FILES['profile_image']['name'];

    $old_profile_image = $_POST['old_profile_image'];
    $allow_extensions = ['jpg', 'png', 'gif', 'jpeg'];
    $file_extension = pathinfo($profile_image, PATHINFO_EXTENSION);

    if($profile_image != '') {
      $updated_profile_img = $_FILES['profile_image']['name'];

      if( in_array($file_extension, $allow_extensions) ) {

        if ($_FILES["profile_image"]["size"] > 500000) {
          $profileErr = "Sorry, your file is too large.";
        } else {
          // upload file here..
          move_uploaded_file($_FILES['profile_image']['tmp_name'], 'admin/uploads/user_images/'.$_FILES['profile_image']['name']);          
        }
      } else {
        $profileErr = 'You can use only jpg, png, git, jpeg file.';
      }

    }else {
      $updated_profile_img = $old_profile_image;
    }



    if(empty(trim($_POST['name']))) {
        $nameErr = "Name field is required.";
    } else {    
      if( strlen( trim( $_POST['name'] ) )<8 ) {
        $nameErr = "Name must be atleast 3 characters";
      }else {
        $name = trim($_POST['name']);
      }

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

    if(empty(trim($_POST['mobile']))) {
        $mobiledErr = "mobile field is required.";
    } else {
      if(strlen(trim($_POST['mobile']))<10) {
        $mobiledErr = "mobile must be atleast 10 digit";
      }else {
        $mobile = trim($_POST['mobile']);
      }

    }

    if(!empty($name) && !empty($email) && !empty($mobile) && !empty($updated_profile_img)) {

      $updateData = [
        'name'  => $name,
        'mobile' => $mobile,
        'email' => $email,
        'profile_image' => $updated_profile_img,
      ];

      // update user info here..
      updateProfileInfo($conn, $updateData, $_SESSION['id']);

      // set success message here..
      $success="Profile information updated successfully.";

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
      <p class="login-box-msg">Update Profile</p>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : $row['name']; ?>">
          
        </div>

          <p class="err-msg"><?php echo $nameErr; ?></p>




        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : $row['email']; ?>">
          
        </div>
          <p class="err-msg"><?php echo $emailErr; ?></p>


        <div class="input-group mb-3">
            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter mobile no." value="<?php echo (isset($_POST['mobile'])) ? $_POST['mobile'] : $row['mobile']; ?>">
          
        </div>
          <p class="err-msg"><?php echo $mobiledErr; ?></p>


        <div class="input-group mb-3">

           <?php 
              if($row['profile_image'] !='') {
            ?>
            <img src="<?php echo $domain; ?>/admin/uploads/user_images/<?php echo $row['profile_image']; ?>" alt="" width="100" height="100">
            <br><br>

            <?php    
              }
            ?>

            <input type="file" name="profile_image" class="" id="profile_image" value="">
            <input type="hidden" name="old_profile_image" value="<?php echo $row['profile_image']; ?>" >


          <div class="input-group-append">
           
          </div>
        </div>
        <p class="err-msg"><?php echo $profileErr; ?></p>





        <div class="row">
         
          <!-- /.col -->
            <div class="col-6">
              <button type="submit" name="updateProfile" class="btn btn-primary btn-block">Update</button>
            </div>          <!-- /.col -->

            <div class="col-6">
              <a href="index.php" class="btn btn-secondary btn-block">Back</a>
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