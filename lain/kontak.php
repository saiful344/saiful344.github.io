<?php

require '../function.php';
if (isset($_POST["submit"])) {
    if(kontak($_POST)>0){
      echo"
      <script>
      alert('Surat Berhasil dikirim');
      document.location.href='user.php';
      </script>
      ";
    }else{
      echo  "
      <scrip
        alert('Surat gagal dikirim');
        document.location.href='user.php';
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
    <title>Suratku</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="..//css/utama.css">    <link rel="stylesheet" href="..//css/utama.css"

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="gg">
      <ul>
        <li><a class="active" href="index2.php">Home</a></li>
        <li><a href="user.php">Surat Pengantar</a></li>
        <li><a href="kontak.php">Komentar</a></li>

      </ul>
    </div>
    <nav>
        <ul style="float:right;list-style-type:none;">
          <li> <a href="..//login/login.php">Log out</a></li>
        </ul>
      </nav>
      <div id="isi">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
          <form  class="" action="" method="post" enctype="multipart/form-data">
            <ul>
              <li>
                  <label for="nama">Nama:</label>
                  <input type="text" name="nama" class="form-control" id="nama">
              </li>
             <li>
                  <label for="email">E-mail:</label>
                  <input type="text" name="email" class="form-control" id="email">
              </li>
                 <div class="form-group">
                  <label for="pesan">Keperluan:</label>
                  <textarea class="form-control" name="pesan" id="pesan" rows="8" placeholder="Apa keperluan anda....."></textarea>
                </div>
                <button type="submit" name="submit">Kirim</button>
            </ul>
          </form>
        </div>
      </div >
    </body>
  </html>
