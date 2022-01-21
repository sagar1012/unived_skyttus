<?php 
session_start();
  include('adminFunctions.php'); 
if( empty($_SESSION['email']) ) {
  header('location:index.php');

} else {


  include('../config/database.php');
  include('includes/header.php');
  include('includes/left-sidebar.php'); 

  // define blank variables..
  $error = $namedErr = $passwordErr =  $emailError = $mobileError = '';
  $success = $name = $password  = $email = $mobile = $status = $created_by = '';



  if(isset($_POST['submit'])) {


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
      $emailError = "Email field is required.";

    } else {
      $email = trim($_POST['email']);


      if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
          // Return Error - Invalid Email
          $emailError = 'The email you have entered is invalid, please try again with correct one.';
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

    if( !empty($name) && !empty($email) && !empty($mobile) && !empty($password) ) {

        $password = password_hash($password, 
            PASSWORD_DEFAULT);


        // insert data in database..
        $userData = [
          'name' => $name,
          'email' => $email,
          'mobile' => $mobile,
          'status' => $status,
          'password' => $password,
          'created_by' => $created_by,
        ];

        insertDataInDb($conn, $userData);

        $success ="User information added successfully.";
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
              <form action="" class="form-horizontal" method="post">
                <div class="card-body">



                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name*</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Enter name" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : ''; ?>">
                      <p class="err-msg"><?php echo $namedErr; ?></p>
                    </div>
                  </div>
                  

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email address*</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
                      <p class="err-msg"><?php echo $emailError; ?></p>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password*</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Enter password" value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : ''; ?>">
                      <p class="err-msg"><?php echo $passwordErr; ?></p>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile no.*</label>
                    <div class="col-sm-10">
                      <input type="text" name="mobile" class="form-control" id="inputPassword3" placeholder="Enter mobile no." value="<?php echo (isset($_POST['mobile'])) ? $_POST['mobile'] : ''; ?>">
                      <p class="err-msg"><?php echo $mobileError; ?></p>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">

                      <select name="status" id="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>

                    </div>
                  </div>
                  


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-info">Add</button>

                  <a href="admin-user-list.php" class="btn btn-default ">Back</a>

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