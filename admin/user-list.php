 <?php 
session_start();
include('adminFunctions.php'); 
if( empty($_SESSION['email']) ) {
  header('location:index.php');

} else {

  include('../config/database.php');
  include('includes/header.php');
  include('includes/left-sidebar.php'); 


$showRecordPerPage = 10;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;

$getUserSQL = "SELECT * FROM `users` ";

$userResult = mysqli_query($conn, $getUserSQL);
$totalUser = mysqli_num_rows($userResult);
$lastPage = ceil($totalUser/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;


  if($conn) {

      $sql = "SELECT * FROM `users` LIMIT $startFrom, $showRecordPerPage";

      $result = $conn->query($sql);

  }

}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card ">

        <div class="card-header">
          <h3 class="card-title">User Listing</h3>
          <a href="add-user.php" class=" btn btn-info float-right" >Add User</a>
        </div>

        
        <div class="card-body p-0 table-responsive">
          <table cellpadding="0" cellspacing="0" border="0"
                           class="table table-bordered table-hover table-striped">

              <thead>
                  <tr>
                      <th >
                          #
                      </th>
                      
                      <th >
                          Full Name
                      </th>
                      
                      <th >
                          email
                      </th>
                      
                      <th>
                          Mobile no.
                      </th>
                       <th>
                          Profile image
                      </th>
                      
                      <th class="text-center">
                          Status
                      </th>
                      
                      <th class="text-center">
                        Actions
                      </th>
                  </tr>
              </thead>
              <tbody>

                  <?php 
                        while($row = mysqli_fetch_assoc($result))
                        {
                  ?>                
                  <tr>
                      <td>#</td>
                      
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>

                    <td>
                      <?php if($row['profile_image']!=''){
                        $path = $domain.'/admin/uploads/user_images/'.$row['profile_image'];
                      } else {
                        $path = $domain.'/admin/uploads/nouser1.png';


                      }?>
                      <img src="<?php echo $path; ?>" alt="" width="100" height="100">
                    </td>


                    <td class="project-state">
                        <?php if($row['status'] == 1){ ?>
                            <span class="badge badge-success">Active</span>
                        <?php }else{ ?>
                            <span class="badge badge-danger">Inactive</span>
                        <?php } ?>
                        
                    </td>

                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->

                          <a class="btn btn-info btn-sm" href="edit-user.php?id=<?php echo $row['id']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>

                          <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete user ?');" href="delete-user.php?id=<?php echo $row['id']; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php                          
                        }

                  ?>                 
              </tbody>
          </table>


   

        </div>


        <!-- /.card-body -->
      </div>

        <?php
          if($totalUser >0){
            include('pagination.php');
          }
        ?>          
      <!-- /.card -->

    </section>
    <!-- /.content -->
          

          </div>
        </div>
       
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php 
  include('includes/footer.php');
?>