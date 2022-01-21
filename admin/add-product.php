<?php 
session_start();
if( empty($_SESSION['email']) ) {
  header('location:auth/login.php');

} else {


  include('../config/database.php');
  include('includes/header.php');
  include('includes/left-sidebar.php'); 

  // define blank variables..
  $error = $titleErr = $shortDescErr = $longDescErr = $imageErr = '';
  $success = $title = $short_desc = $long_desc = $image = '';


  if(isset($_POST['submit'])) {

    $image = $_FILES['product_image']['name'];
    $allow_extensions = ['jpg', 'png', 'gif', 'jpeg'];
    $file_extension = pathinfo($image, PATHINFO_EXTENSION);

    if($image == '') {
      $imageErr = 'Product image field is required.';
    } else {
      if( in_array($file_extension, $allow_extensions) ) {

        if ($_FILES["product_image"]["size"] > 500000) {
          $imageErr = "Sorry, your file is too large.";
        } else {
          // upload file here..
          move_uploaded_file($_FILES['product_image']['tmp_name'], 'uploads/product_images/'.$_FILES['product_image']['name']);          
        }
      } else {
        $imageErr = 'You can use only jpg, png, git, jpeg file.';
      }
    }


    if(empty(trim($_POST['title']))) {
        $titleErr = "Title field is required.";
    } else {
      if(strlen(trim($_POST['title']))<3) {
        $titleErr = "Title must be atleast 3 characters";
      }else {
        $title = trim($_POST['title']);
      }
    }

        
    if(empty(trim($_POST['short_desc']))) {
      $shortDescErr = "Short desc field is required.";
    } else {
      $short_desc = trim($_POST['short_desc']);
    }


    if(empty(trim($_POST['long_desc']))) {
      $longDescErr = "Long desc field is required.";
    } else {
      $long_desc = trim($_POST['long_desc']);
    }

    if( !empty($title) && !empty($short_desc) ) {

      $date = date('Y-m-d H:i:s');

      $addSql = "INSERT INTO `products` (`id`, `title`,  `short_desc`, `long_desc`, `image`, `status`, `created_by`, `updated_by`, `created_at`) VALUES (NULL, '$title', '$short_desc',  '$long_desc', '$image', '1', '1', '1', '$date')"; 

        // run query.
        mysqli_query($conn, $addSql);

        $success ="Product information added successfully.";
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
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" class="form-horizontal" method="post"  enctype="multipart/form-data">
                <div class="card-body">



                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title*</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Enter title" value="<?php echo (isset($_POST['title'])) ? $_POST['title'] : ''; ?>">
                      <p class="err-msg"><?php echo $titleErr; ?></p>
                    </div>
                  </div>
                  


                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Short description*</label>
                    <div class="col-sm-10">
                      <textarea name="short_desc" class="form-control" id="short_desc" placeholder="Enter short description" ><?php echo (isset($_POST['short_desc'])) ? $_POST['short_desc'] : ''; ?></textarea>
                     
                      <p class="err-msg"><?php echo $shortDescErr; ?></p>
                    </div>
                  </div>


                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Long description*</label>
                    <div class="col-sm-10">
                      <textarea name="long_desc" class="form-control" id="short_desc" placeholder="Enter long description" ><?php echo (isset($_POST['long_desc'])) ? $_POST['long_desc'] : ''; ?></textarea>
                     
                      <p class="err-msg"><?php echo $longDescErr; ?></p>
                    </div>
                </div>  

                 <div class="form-group row">
                    <label for="profile" class="col-sm-2 col-form-label">Image*</label>
                    <div class="col-sm-10">
                     

                      <input type="file" name="product_image" class="" id="product_image" value="">
                      <p class="err-msg"><?php echo $imageErr; ?></p>
                    </div>
                  </div> 



                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-info">Add</button>
                  <a href="product-list.php" class="btn btn-default ">Back</a>
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