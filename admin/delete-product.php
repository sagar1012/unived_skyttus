 <?php 
session_start();
include('adminFunctions.php');

if( empty($_SESSION['email']) ) {
  header('location:index.php');

} else {

  include('../config/database.php');


  $dateTime = date('Y-m-d H:i:s');
  $table = 'products';

  updateDeletedAt($conn, $table, $dateTime, $_GET['id']);


  header('location: product-list.php');

}
?>