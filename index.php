<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecom Teleconsult | Home </title>
</head>

<body >
  <h2>Default home page</h2>


<ul class="list-group">
  <li class="list-group-item active"><a href="index.php">Home</a></li>

  <?php if(isset($_SESSION['email'])){ ?>
    <li class="list-group-item"><a href="change-password.php">Change Password</a></li>
    <li class="list-group-item"><a href="update-profile.php">Edit Profile</a></li>
  <?php } ?>

  <?php if(isset($_SESSION['email'])){ ?>
  <li class="list-group-item"><a href="logout.php">Logout</a></li>
  <?php } else { ?>
    <li class="list-group-item"><a href="login.php">Login</a></li>
    <li class="list-group-item "><a href="register.php">Register</a></li>    
  <?php } ?>

</ul>

</body>
</html>
