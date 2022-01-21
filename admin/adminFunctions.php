<?php 
  
  function getUserInfoByEmail($conn, $email) {

     $query="SELECT * FROM admins WHERE email='$email'";
     $checkUser=mysqli_query($conn, $query);
      
      if(mysqli_num_rows($checkUser)>0){
        
        $row = $checkUser->fetch_assoc();
      } else {
        $row = [];
      }
      return $row;
  }


  function insertDataInDb($conn, $userData){

   $name = $userData['name'];
   $email = $userData['email'];
   $password = $userData['password'];
   $mobile = $userData['mobile'];
   $status = $userData['status'];
   $created_by = $userData['created_by'];


    $addAdminSql = "INSERT INTO `admins` (`id`, `name`,  `email`, `password`, `mobile`, `status`, `created_by`) VALUES (NULL, '$name', '$email',  '$password', '$mobile', '$status', '$created_by')";   

    // // run query.
    mysqli_query($conn, $addAdminSql);
  }


  function getTotalAdminUsers($conn, $id) {

    // get total admin user counts.
    $getAdminUserSQL = "SELECT * FROM `admins` WHERE  created_by=".$id;
    $adminUserResult = mysqli_query($conn, $getAdminUserSQL);
    $totalAdminUser = mysqli_num_rows($adminUserResult);
    return $totalAdminUser;

  }

  function getTotalUser($conn) {

      $getUserSQL = "SELECT * FROM `users` ";
      $userResult = mysqli_query($conn, $getUserSQL);
      return $totalUser = mysqli_num_rows($userResult);
  }

  function getTotalNoOfProducts($conn) {

    $getProductSQL = "SELECT * FROM `products` WHERE status = 1 ";
    $ProductResult = mysqli_query($conn, $getProductSQL);
    return $totalProduct = mysqli_num_rows($ProductResult);
  }



  function getTotalProductCategory($conn) {

      $getProductCatSQL = "SELECT * FROM `product_categories` WHERE status = 1 ";
      $ProductCatResult = mysqli_query($conn, $getProductCatSQL);
      return $totalProductCat = mysqli_num_rows($ProductCatResult);
  }


  function getUserInfoById($conn, $id)
  {
    $getUserInfoSql = "SELECT * FROM admins WHERE id =".$id;
    $result = mysqli_query($conn, $getUserInfoSql);

    return $row = $result->fetch_assoc();

  }


  function updateUserInfo($conn, $id, $name, $email, $mobile, $status) {

    $updatePassOnDbSql = "UPDATE `admins` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `status` = '$status' WHERE `id` =".$id;

    // run query.
    mysqli_query($conn, $updatePassOnDbSql);

  }


  function getTotalUserById($conn, $id) {
    $getUserSQL = "SELECT * FROM `admins` WHERE  created_by=".$id;
    $userResult = mysqli_query($conn, $getUserSQL);
    $totalUser = mysqli_num_rows($userResult);
    return $totalUser;
  }


  function getUserList($conn, $id, $startFrom, $showRecordPerPage)
  {
      $sql = "SELECT * FROM `admins` WHERE  created_by=".$id." LIMIT $startFrom, $showRecordPerPage";

      $result = $conn->query($sql);

  }


function deleteRecord($conn, $table, $id) {

  $sql = "DELETE FROM $table WHERE `id` = ".$id;
  $result = mysqli_query($conn, $sql);  
  return true;
}


  function updateDeletedAt($conn, $table, $dateTime, $id) {

    $updatePassOnDbSql = "UPDATE `$table` SET `deleted_at` = '$dateTime' WHERE `id` =".$id;
    // Run query here..
    mysqli_query($conn, $updatePassOnDbSql);

  }




  function generateRandomPassword( $length ) {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      return substr(str_shuffle($chars),0,$length);
  }


?>