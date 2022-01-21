 <?php 
 include('adminFunctions.php');
session_start();
if( empty($_SESSION['email']) ) {
  header('location:index.php');

} else {

  include('../config/database.php');


  $dateTime = date('Y-m-d H:i:s');
  $table = 'product_categories';
  
  updateDeletedAt($conn, $table, $dateTime, $_GET['id']);

  header('location: product-category-list.php');

}
?>