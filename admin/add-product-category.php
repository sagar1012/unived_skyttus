<?php 
session_start();
if( empty($_SESSION['email']) ) {
  header('location:index.php');

} else {


  include('../config/database.php');
  include('includes/header.php');
  include('includes/left-sidebar.php'); 

  // define blank variables..
  $error = $namedErr = '';
  $success = $name  = '';



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


    if( !empty($name)  ) {

      $date = date('Y-m-d H:i:s');

       $addSql = "INSERT INTO `product_categories` (`id`, `name`,  `alias`, `parent_id`, `status`, `created_by`, `updated_by`, `created_at`) VALUES (NULL, '$name', '$name',  '0', 'active', '1', '1', '$date')";        

        // run query.
        mysqli_query($conn, $addSql);

        $success ="Product category information added successfully.";
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
                <h3 class="card-title">Add Product Category</h3>
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
                  

                 


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-info">Add</button>
                  <a href="product-category-list.php" class="btn btn-default ">Back</a>
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