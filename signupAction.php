<?php
require_once('function.php');

if($_SERVER['REQUEST_METHOD'] != "POST"){
  header("Location:signup.php");
}else {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];

  $count = checkMail($email);

  if ($count>0) {
    die("Email Already Exists!");
  }
  else {
    if ($password == $repassword) {
      $hasPassword = sha1($password);
      
      $result = mysqli_query($con,"INSERT INTO users (name,email,password,created) VALUES ('$name', '$email', '$hasPassword', CURDATE())");

      if ($result) {
        header("Location:index.php");
      }
    }else {
      die("Password Didn't Match");
    }
  }
}

?>
