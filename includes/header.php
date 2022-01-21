<?php 

 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $domain = "https://";   
 } else {
    $domain = "http://"; 
 }
 
$domain = $domain . $_SERVER['HTTP_HOST']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecom Teleconsult | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/dist/css/adminlte.min.css">

  <style>
  .err-msg{
    color: red;
  }
</style>
</head>
<body class="hold-transition login-page">
