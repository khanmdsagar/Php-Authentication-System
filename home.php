<?php
  session_start();

  if (empty($_SESSION['email'])) {
    header("Location: index.php");
  }

 ?>

 <h1>Hello <?php echo $_SESSION['email'];?></h1>
<a href="logout.php">logout</a>
