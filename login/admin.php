<?php
require '../function.php';

if (isset($_POST["register"]) ){


     if(admin($_POST) > 0 ){
       echo "<script>
                alert('Data baru telah ditambahkan');
                </script>";
        header("location:logad.php");
     }	else {
       echo mysqli_error($conn);
     }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="..//css/tambah.css">
    <style>
    label{
      display: block;
    }
    ul{
      list-style: none;
    }
    </style>
  </head>
  <body>
    <div class="jj">

    <h1>Halaman Registrasi</h1>
    <form class="" action="" method="post">
      <ul>
        <li>
          <label for="username">Username :</label>
          <input type="text" name="username" id="username" value="">
        </li>
        <li>
          <label for="password">password :</label>
          <input type="password" name="password" id="password" value="">
        </li>
        <li>
          <label for="password2">konfirmasi password :</label>
          <input type="password" name="password2" id="password2" value="">
        </li>
        <li>
          <button type="submit" name="register">Registrasi</button>
        </li>
        <li>
          <a href="logad.php">Login</a>
        </li>
      </ul>


    </form>

  </div>
  </body>
</html>
