 <?php 
session_start();
include('adminFunctions.php');
if( empty($_SESSION['email']) ) {
  header('location:index.php');

} else {


  include('../config/database.php');


  $table = 'admins';
  $id = $_GET['id'];
  $result = deleteRecord($conn, $table, $id);

  if($result) {
    header('location: admin-user-list.php');
  }


}



?>