<?php
require 'function.php';
//simpan Kode
if (isset($_POST["submit"])) {
    if(artikel($_POST)>0){
      echo"
      <script>
      alert('Artikel Berhasil dikirim');
      document.location.href='homead.php';
      </script>
      ";
    }else{
      echo  "
      <script>
        alert('Artikel gagal dikirim');
        document.location.href='homead.php';
        </script>
        ";
    }
}
$surat2= query("SELECT * FROM artikel");
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
    <link rel="stylesheet" href="css/utama.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">


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
            <li><a  class="active" href="homead.php">Home</a></li>
            <li><a  href="admin.php">Penerimaan Surat</a></li>
            <li><a href="terima.php">Terima komentar</a></li>
          </ul>
        </div>
        <nav>
            <ul style="float:right;list-style-type:none;">
              <li> <a href="login/logout.php">Log out</a></li>
            </ul>
        </nav>
      <div id="isi">
        <div class="dalam">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
          <form  class="" action="" method="post" enctype="multipart/form-data">
            <ul>
              <div class="form-group">
                <label for="pesan">Judul:</label>
                <input type="text" class="form-control" name="judul" id="judul" rows="8">
               <label for="pesan">Artikel:</label>
               <textarea class="form-control" name="artikel" id="pesan" rows="8" placeholder="Apa keperluan anda....."></textarea>
             </div>
                 <button type="submit" name="submit">Kirim</button>
            <br></br>
        <table border="1" cellpadding="10" cellspacing="0">
          <tr>
            <th style="  text-align:center;
              padding: 8px;width:10px;">No</th>
            <th style="  text-align:center;
              padding: 8px;">Judul</th>
            <th style="  text-align: center;
              padding: 8px;">Artikel</th>
              <th style="  text-align: center;
              padding: 8px;">Hapus</th>
          </tr>
          <?php $i = 1;?>
          <?php foreach ($surat2 as $row):?>
            <tr>
              <td style="  text-align: left;
                padding: 8px;"><?= $i;?></td>
              <td style="  text-align: left;
                padding: 8px;"><?=$row ["judul"];?></td>
                <td style="  text-align: left;
                  padding: 8px;"><?=$row ["artikel"];?></td>
                    <td style="  text-align: center;
                      padding: 8px;"> <a href="hapus2.php?id=<?=$row["id"];?>" class="btn btn-primary" onclick="return confirm('yakin?');">Hapus</a></td>
            </tr>
            <?php $i++;  ?>
          <?php endforeach;?>
        </table>
        </ul>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hasil.js"></script>
  </script>
  </body>
</html>
