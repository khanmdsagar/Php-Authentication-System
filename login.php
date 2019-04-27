<?php
require_once('function.php');

session_start();

  if($_SERVER['REQUEST_METHOD'] != "POST"){
    header("Location:index.php");
  }else {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $count = checkMail($email);
    $userPass = getPass($email);

    if ($count>0) {
      $hashedPass = sha1($password);
      if ($email == $email && $hashedPass == $userPass) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $hashedPass;
        header("Location:home.php");
      }else {
        die("Wrong email or password");
      }
    }
    else {
      die("Email not found!");
    }
  }

 ?>
