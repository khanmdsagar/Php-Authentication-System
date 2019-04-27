<?php
require_once 'config.php';

function checkMail($email)
{
  global $con;
  $result = mysqli_query($con,"SELECT email FROM users WHERE email = '$email'");
  $rows = mysqli_num_rows($result);
  return $rows;
}

function getPass($email)
{
  global $con;
  $result = mysqli_query($con,"SELECT * FROM users WHERE email = '$email'");
  $data = mysqli_fetch_assoc($result);
  return $data['password'];
}

?>
