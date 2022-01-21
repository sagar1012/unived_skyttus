 <?php 
session_start();
include('adminFunctions.php');

if( empty($_SESSION['email']) ) {
  header('location:index.php');

} else {


  include('../config/database.php');


  $table = 'users';
  $id = $_GET['id'];
  $result = deleteRecord($conn, $table, $id);


  if($result) {
    header('location: user-list.php');
  }


}



?>