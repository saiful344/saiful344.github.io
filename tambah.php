<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location:login/login.php");
  exit;
}
require 'function.php';
if (isset($_POST["submit"])) {
    if(tambah($_POST)>0){
      echo"
      <script>
      alert('Data berhasil');
      document.location.href='utama.php';
      </script>
      ";
    }else{
      echo  "
      <script>
        alert('Data gagal ditambah');
        document.location.href='utama.php';
        </script>
        ";
    }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah data Warga</title>
  <body>

      <div class="pp">
        <img src="4.png" class="avatar">
        <h1>Tambah Data Warga</h1>
      <form class="" action="" method="post" enctype="multipart/form-data">
        <ul>
          <li>
            <label for="nik">NIK:</label><br>
            <input type="text" name="nik" id="nik" required><br>
          </li>
          <li>
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" id="nama">
          </li>
          <li>
            <label for="ttl">Ttl:</label><br>
            <input type="text" name="ttl" id="ttl">
          </li>
          <li>
            <label for="alamat">Alamat:</label><br>
            <input type="text" name="alamat" id="alamat">
          </li>
            <button type="submit" name="submit">Tambah</button>

        </ul>
      </form>
    </div>
  </body>
</html>
