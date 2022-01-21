<?php 

  function getUserInfo($conn) {

        $getUserSql = "SELECT * FROM `users` WHERE id=".$_SESSION['id'];
        
        $result = mysqli_query($conn, $getUserSql);
        
        if(mysqli_num_rows($result)>0) {
            $row = $result->fetch_assoc();
        } else {
          $row = [];
        }
        return $row;
  }

  function updateUserPassword($conn, $hashPassword) {

      // now here.. update password in database..
      $updatePassOnDbSql = "UPDATE `users` SET `password` = '$hashPassword' WHERE `id` =".$_SESSION['id'];
      
      // Run query here..
      mysqli_query($conn, $updatePassOnDbSql);

      return true;

  }


  function getUserInfoByEmail($conn, $email) {

     $query="SELECT id,email FROM users WHERE email='$email'";
     $checkUser=mysqli_query($conn, $query);
      
      if(mysqli_num_rows($checkUser)>0){
        
        $row = $checkUser->fetch_assoc();
      } else {
        $row = [];
      }
      return $row;
  }

  function getUserInfoById($conn, $id) {

        $getUserSql = "SELECT * FROM `users` WHERE id=".$id;
        $result = mysqli_query($conn, $getUserSql);
        
        if(mysqli_num_rows($result)>0) {
            $row = $result->fetch_assoc();
        } else {
          $row = [];
        }
        return $row;
  }


   function updateUserInfoById($conn, $userId, $hashPassword){

      $updatePassOnDbSql = "UPDATE `users` SET `password` = '$hashPassword' WHERE `id` =".$userId;

      // Run query here..
      mysqli_query($conn, $updatePassOnDbSql);

    }

  function generateRandomPassword( $length ) {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      return substr(str_shuffle($chars),0,$length);
  }


  function updateProfileInfo($conn, $updateData, $id) {


    $name = $updateData['name'];
    $mobile = $updateData['mobile'];
    $email = $updateData['email'];
    $profile_image = $updateData['profile_image'];

     
    // now here.. update details in database..
      $updateSql = "UPDATE `users` SET `name` = '$name', `mobile` = '$mobile', `email` = '$email', `profile_image` = '$profile_image'  WHERE `id` =".$id;
      
      // Run query here..
      mysqli_query($conn, $updateSql);


  }



  

?>
