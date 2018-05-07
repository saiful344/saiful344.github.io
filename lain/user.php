<?php
require '../function.php';
if (isset($_POST["submit"])) {
    if(surat2($_POST)>0){
      echo"
      <script>
      alert('Surat Berhasil dikirim');
      document.location.href='user.php';
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
    <link rel="stylesheet" href="..//css/utama.css">

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
                  <input type="text" name="nama" class="form-control" id="nama">
              </li>
             <li>
                  <label for="nik">No KTP/NIK/NO.KK:</label>
                  <input type="text" name="nik" class="form-control" id="nik">
              </li>
              <li>
                   <label for="ttl">Tanggal Lahir:</label>
                   <input type="date" name="ttl" class="form-control" id="ttl">
               </li>
               <li>
                    <label for="gender">Jenis Kelamin:</label>
                    <select class="form-control" name="gender">
                        <option>pilih--</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </li>
                <li>
                  <label for="setatus">Setatus:</label>
                <select class="form-control" name="setatus">
                    <option>pilih--</option>
                    <option>Kawin</option>
                    <option>Tidak Kawin</option>
                </select>
                </li>
                 <li>
                      <label for="pekerjaan">Pekerjaan:</label>
                      <input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
                 </li>
                 <li>
                   <label for="alamat">Alamat:</label>
                   <input type="text" name="alamat" class="form-control" id="alamat">
                 </li>
                 <div class="form-group">
                  <label for="pesan">Keperluan:</label>
                  <textarea class="form-control" name="pesan" id="pesan" rows="8" placeholder="Apa keperluan anda....."></textarea>
                </div>
                  <li>
                     <label for="kode">Pemohon<br>
                     <input type="text" name="kode"  class="form-control" placeholder="Masukan kode..." id="kode">
                   </li>
                <button type="submit" name="submit">Kirim</button>
            </ul>
          </form>
        </div>
        <div class="dua">
          <h4>Mengetahui<br>
          Kepala desa Tunggoro</h4><br>
           <div class="kode">
              Menunggu Kode.......
           </div>
          <p>NAKIYAH</p>
        </div>
      </div >
      <p>Demikian Surat pengantar ini disampaikan untuk menjadikan periksa guna semestinya.</p>

    </body>
  </html>
