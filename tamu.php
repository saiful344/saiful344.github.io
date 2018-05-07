<?php
require 'function.php';
//simpan Kode
if (isset($_POST["submit"])) {
    if(ttd($_POST)>0){
      echo"
      <script>
      alert('Surat Berhasil dikirim');
      document.location.href='admin.php';
      </script>
      ";
    }else{
      echo  "
      <script>
        alert('Surat gagal dikirim');
        document.location.href='user.php';
        </script>
        ";
    }
}
//ambildat urldecode
$id=$_GET["id"];
//query id
$surat2= query("SELECT*FROM surat WHERE id =$id")[0];
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
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">Data KK</a></li>
            <li><a href="#">Surat keperluan</a></li>
            <li><a href="#">Cari data</a></li>
          </ul>
        </div>
        <nav>
            <ul style="float:right;list-style-type:none;">
              <li> <a href="login/logout.php">Log out</a></li>
              <li><a href="#login">Profil</a></li>
            </ul>
          </nav>
      <div id="isi">
        <div class="dalam">
        <h1>PEMERINTAH KABUPATEN BANJARNEGARA</h1>
        <h2>KECAMATAN SIGALUH</h2>
        <div class="garis"></div>
        <p>No.kode Desa:33 04 07 2004</p>
        <h3>SURAT PENGANTAR</h3>
        <div class="yth">
        <p>Kepada:<br>
        Yth.Kepala Desa Tunggoro<br>
          Di-Kantor Desa Tunggoro</p>
          </div>
          <p>Yang bertanda tangan dibawah ini pwngurus/Kepala Desa TUNGGORO menerangkan dengan sebenarnya bahwa:</p>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">

          <form  class="" action="" method="post" enctype="multipart/form-data">
            <ul>
              <li>
                  <label for="nama">Nama:</label>
                  <label><?=$surat2 ["nama"];?></label>
              </li>
             <li>
                  <label for="nik">No KTP/NIK/NO.KK:</label>
                  <label><?=$surat2 ["nik"];?></label>
              </li>
              <li>
                   <label for="ttl">Tanggal Lahir:</label>
                   <label><?=$surat2 ["ttl"];?></label>
               </li>
               <li>
                    <label for="gender">Jenis Kelamin:</label>
                    <label><?=$surat2 ["gender"];?></label>
               </li>
                <li>
                  <label for="setatus">Setatus:</label>
                  <label><?=$surat2 ["setatus"];?></label>
                </li>
                 <li>
                      <label for="pekerjaan">Pekerjaan:</label>
                      <label><?=$surat2 ["pekerjaan"];?></label>
                 </li>
                 <li>
                   <label for="alamat">Alamat:</label>
                   <label><?=$surat2 ["alamat"];?><label>
                 </li>
                 <div class="form-group">
                  <label for="pesan">Keperluan:</label>
                 <label><?=$surat2 ["pesan"];?></label>
                </div>
                  <li>
                     <label for="kode">Pemohon<br>
                     <label><?=$surat2 ["kode"];?></label>
                   </li>
                   <li>
                       <label for="kodepusat">Masukan Kode Surat:</label>
                       <input type="text" name="kodepusat" class="form-control" id="kodepusat">
                   </li>
                   <button type="submit" name="submit">Kirim Kode</button>
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
