

  <?php
  include "header.php";
  include_once "../controllers/controller.php";
  include('../config/connection.php');
  $conn = new PDO($dsn, $username, $password, $options);
  if(isset($_POST['view_mark'])){
    $conn=new controller();
    $conn->view_markl();
  }

  if(isset($_POST['amark'])){
    $conn=new controller();
    $conn->amark();
  }
?>
<div class="row">
   <div class="login">
   <form action="" method="post">
    <h1>   Home </h1>
    <input type="submit" name="view_mark" class="btn" value="View Marks">
	<input type="submit" name="amark" class="btn" value="Add Mark"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
</div>
</div>
<?php 
   include "footer.php";
?>