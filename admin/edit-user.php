<?php 
session_start();
if( empty($_SESSION['email']) ) {
  header('location:auth/login.php');
} else {
  include('../config/database.php');
  include('includes/header.php');
  include('includes/left-sidebar.php'); 

  // define blank variables..
  $error = $namedErr =  $emailError = $mobileError = $profileErr = '';
  $success = $name  = $email = $mobile = $profile_image = $status = $created_by = '';

  if(!empty($_GET['id'])) {

    $id = $_GET['id'];

    $getUserInfoSql = "SELECT * FROM users WHERE id =".$id;
    $result = mysqli_query($conn, $getUserInfoSql);
    $row = $result->fetch_assoc();
  }

  if(isset($_POST['submit'])) {

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
          move_uploaded_file($_FILES['profile_image']['tmp_name'], 'uploads/user_images/'.$_FILES['profile_image']['name']);          
        }
      } else {
        $profileErr = 'You can use only jpg, png, git, jpeg file.';
      }

    }else {
      $updated_profile_img = $old_profile_image;
    }

    if(empty(trim($_POST['name']))) {
        $namedErr = "Name field is required.";
    } else {
      if(strlen(trim($_POST['name']))<3) {
        $namedErr = "Name must be atleast 3 characters";
      }else {
        $name = trim($_POST['name']);
      }
    }    

    if( empty( trim($_POST['email']) ) ) {
      $emailError = "User name field is required.";

    } else {
      $email = trim($_POST['email']);


      if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
          // Return Error - Invalid Email
          $emailError = 'The email you have entered is invalid, please try again with correct one.';
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

    $status = $_POST['status'];
    $created_by = $_SESSION['id'];

    if( !empty($name) && !empty($email) && !empty($mobile) &&  !empty($updated_profile_img) ) {

        $updatePassOnDbSql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `profile_image` = '$updated_profile_img', `status` = '$status' WHERE `id` =".$id;

        // run query.
        mysqli_query($conn, $updatePassOnDbSql);

        $success ="User information updated successfully.";
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
                <h3 class="card-title">Update User Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" class="form-horizontal" method="post"  enctype="multipart/form-data">
                <div class="card-body">



                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name*</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Enter name" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : $row['name']; ?>">
                      <p class="err-msg"><?php echo $namedErr; ?></p>
                    </div>
                  </div>
                  

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email address*</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : $row['email']; ?>">
                      <p class="err-msg"><?php echo $emailError; ?></p>
                    </div>
                  </div>
                  


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile no.*</label>
                    <div class="col-sm-10">
                      <input type="text" name="mobile" class="form-control" id="inputPassword3" placeholder="Enter mobile no." value="<?php echo (isset($_POST['mobile'])) ? $_POST['mobile'] : $row['mobile']; ?>">
                      <p class="err-msg"><?php echo $mobileError; ?></p>
                    </div>
                  </div>
                  


                 <div class="form-group row">
                    <label for="profile" class="col-sm-2 col-form-label">Profile Image*</label>
                    <div class="col-sm-10">
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
                      <p class="err-msg"><?php echo $profileErr; ?></p>
                    </div>
                  </div> 


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">

                      <select name="status" id="status" class="form-control">
                        <option value="1" <?php if($row['status'] == '1') {echo 'selected="selected"';} ?>>Active</option>
                        <option value="0" <?php if($row['status'] == '0') {echo 'selected="selected"';} ?>>Inactive</option>
                      </select>

                    </div>
                  </div>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-info">Update</button>
                  <a href="user-list.php" class="btn btn-default ">Back</a>
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