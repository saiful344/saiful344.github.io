<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location:login/login.php");
  exit;
}
require 'function.php';
//ambildat urldecode
$id=$_GET["id"];
//query id
$warga= query("SELECT*FROM data WHERE id =$id")[0];

if (isset($_POST["submit"])) {

    if( ubah($_POST)>0){
      echo"
      <script>
      alert('Data berhasil diubah');
      document.location.href='utama.php';
      </script>
      ";
    }else{
      echo  "
      <script>
        alert('Data gagal diubah');
        document.location.href='utama.php';
        </script>
        ";
    }
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Ubah data</title>

     <!-- Bootstrap -->
     <link rel="stylesheet" href="css/utama.css">
     <link href="css/bootstrap.min.css" rel="stylesheet">


     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
   </head>
    <div id="isi">
      <div class="dalam">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
        <form  class="" action="" method="post" enctype="multipart/form-data">
          <ul>
    <h1>ubah Data Warga</h1>
    <form class="" action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?=$warga["id"];?>">
      <input type="hidden" name="gambarlama" value="<?=$warga["gambar"];?>">
      <ul>
        <li>
          <label for="nik">NIK</label>
          <input type="text" name="nik" class="form-control" id="nik" required
          value="<?=$warga ["nik"];?>">
        </li>
        <li>
          <label for="nama">Nama:</label>
          <input type="text" name="nama" class="form-control"  id="nama"
          value="<?=$warga ["nama"];?>">
        </li>
        <li>
          <label for="ttl">Ttl:</label>
          <input type="text" name="ttl" class="form-control"  id="ttl"
          value="<?=$warga ["ttl"];?>">
        </li>
        <li>
          <label for="alamat">Alamat:</label>
          <input type="text" name="alamat" class="form-control" id="alamat"
          value="<?=$warga ["alamat"];?>">
        </li>
        <li>
          <button type="submit" name="submit">ubah</button>
        </li>
      </ul>
                  </form>
            </div>
              </div >
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <script src="js/hasil.js"></script>
          </script>

          </body>
        </html>
