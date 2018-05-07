
<?php
session_start();
if (isset($_SESSION["login"])) {
  header("Location:..//lain/index2.php");
  exit;
require("../function.php");
if (isset($_POST["login"])) {
  $username=$_POST["username"];
  $password=$_POST["password"];

  $result=mysqli_query($conn,"SELECT * FROM admin WHERE username ='$username'");

  //cek username
  if(mysqli_num_rows($result) === 1){
    //cek password
    $row=mysqli_fetch_assoc($result);
      $password=$_POST["password"];{
      //sesion
      $_SESSION["login"]=true;
      header("Location:../homead.php");
      exit;
    }
  }
  $error=true;
}
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login laman</title>
    <link rel="stylesheet" href="..//css/tambah.css">
  </head>
  <body>
    <img src="hhh/pp.png" alt="phjkl" >
    <div class="jj">
    <h1>Halaman login</h1>
    <?php if (isset($error)): ?>
      <p style="color:red; font-style:italic;">username/password salah</p>
    <?php endif; ?>
    <form class="" action="" method="post">
      <ul>
        <li>
          <label for="username">Username :</label>
          <input type="text" name="username" id="username" value="">
          <label for="password">password :</label>
          <input type="password" name="password" id="password" value="">
          <button type="submit" name="login">Login</button><br></br>
          <li><a href="admin.php">Sign up</a>|<a href="login.php">User</a></li>
        </li>
      </ul>
    </form>
  </div>
</body>
</html>.
