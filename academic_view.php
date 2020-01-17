

  <?php
  include "header.php";
  include_once "../controllers/controller.php";
  include('../config/connection.php');
  $conn = new PDO($dsn, $username, $password, $options);
  if(isset($_POST['view_sub'])){
    $conn=new controller();
    $conn->view_sub();
  }

  if(isset($_POST['asub'])){
    $conn=new controller();
    $conn->asub();
  }
?>
<div class="row">
   <div class="login">
   <form action="" method="post">
    <h1>   Home </h1>
    <input type="submit" name="view_sub" class="btn" value="View Subjects">
	<input type="submit" name="asub" class="btn" value="Add Subjects"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
</div>
</div>
<?php 
   include "footer.php";
?>