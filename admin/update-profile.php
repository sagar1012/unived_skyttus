<?php 
// echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; die;
//echo $_SERVER['DOCUMENT_ROOT'];die;

//echo $handle = fopen($_FILES["profile_image"]["tmp_name"], 'r');
//die;
session_start();
if( empty($_SESSION['email']) ) {
  header('location:auth/login.php');

} else {


  include('../config/database.php');
  include('includes/header.php');
  include('includes/left-sidebar.php'); 


  $error = $nameErr = $emailErr =  $mobiledErr = $profileErr = '';
  $success = $name = $email = $mobile = $profile_image = '';

  // get admin information here.. 

   $query="SELECT * FROM admins WHERE id=".$_SESSION['id'];
   $checkUser=mysqli_query($conn, $query);
    
    if(mysqli_num_rows($checkUser)>0){
      
      $row = $checkUser->fetch_assoc();  

    }


  if(isset($_POST['submit'])) {


    // $fileName = $_FILES["profile_image"]["name"];
    // if(empty($fileName) ) {
    //     $profileErr = "Profile image field is required.";
    //     $uploadOk = 0;

    // } else {


    //       $target_dir = "uploads/admin_images/";
    //       $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
    //       $uploadOk = 1;
    //       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          
    //       $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
          

    //         if($check !== false) {
    //           //$profileErr = "File is an image - " . $check["mime"] . ".";
    //           $uploadOk = 1;
    //         } else {
    //           $profileErr = "File is not an image.";
    //           $uploadOk = 0;
    //         }

    //         // Check if file already exists
    //         if (file_exists($target_file)) {
    //           $profileErr = "Sorry, file already exists.";
    //           $uploadOk = 0;
    //         }


    //         // Check file size
    //         if ($_FILES["profile_image"]["size"] > 500000) {
    //           $profileErr = "Sorry, your file is too large.";
    //           $uploadOk = 0;
    //         }      



    //         // Allow certain file formats
    //         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //         && $imageFileType != "gif" ) {
    //           $profileErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //           $uploadOk = 0;
    //         }


    //       // Check if $uploadOk is set to 0 by an error
    //       if ($uploadOk == 0) {
    //           $profileErr = "Sorry, your file was not uploaded.";
    //       // if everything is ok, try to upload file
    //       } else {
    //         if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {

    //           $profile_image = basename($_FILES["profile_image"]["name"]);
             
    //         } else {
    //            $profileErr = "Sorry, there was an error uploading your file.";
    //         }

    //       }

    // }


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
        $nameErr = "Name field is required.";
    } else {
      //$verifyOnlyCharacter = ctype_alpha( trim($_POST['name']) );

      // if( $verifyOnlyCharacter ) {
      //   $name = trim($_POST['name']);
      // }else {
      //   $nameErr = "Name field contain only characters";
      // }

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

      // now here.. update details in database..
      $updateSql = "UPDATE `admins` SET `name` = '$name', `mobile` = '$mobile', `email` = '$email', `profile_image` = '$updated_profile_img'  WHERE `id` =".$_SESSION['id'];
      
      // Run query here..
      mysqli_query($conn, $updateSql);

      // set success message here..
      $success="Profile information updated successfully.";

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
                <h3 class="card-title">Update Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="card-body">



                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name*</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : $row['name']; ?>">
                      <p class="err-msg"><?php echo $nameErr; ?></p>
                    </div>
                  </div>
                  

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email address*</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : $row['email']; ?>">
                      <p class="err-msg"><?php echo $emailErr; ?></p>
                    </div>
                  </div>
                  


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile no.*</label>
                    <div class="col-sm-10">
                      <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter mobile no." value="<?php echo (isset($_POST['mobile'])) ? $_POST['mobile'] : $row['mobile']; ?>">
                      <p class="err-msg"><?php echo $mobiledErr; ?></p>
                    </div>
                  </div>


                 <div class="form-group row">
                    <label for="profile" class="col-sm-2 col-form-label">Profile Image*</label>
                    <div class="col-sm-10">
                      <?php 
                        if($row['profile_image'] !='') {
                      ?>
                      <img src="<?php echo $domain; ?>/admin/uploads/admin_images/<?php echo $row['profile_image']; ?>" alt="" width="100" height="100">
                      <br><br>

                      <?php    
                        }
                      ?>

                      <input type="file" name="profile_image" class="" id="profile_image" value="">
                      <input type="hidden" name="old_profile_image" value="<?php echo $row['profile_image']; ?>" >

                      <p class="err-msg"><?php echo $profileErr; ?></p>
                    </div>
                  </div>                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-info">Update</button>
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