<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location:login/login.php");
  exit;
}
require 'function.php';
$data = query("SELECT * FROM data");

if(isset($_POST["cari"])){
  $data = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>program</title>
    <link rel="stylesheet" href="css/utama.css">
    </head>
      <body>
        <div class="gg">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a class="active" href="utama.php">Data KK</a></li>
            <li><a href="lain/user.php">Surat keperluan</a></li>
            <li><a href="#">Cari data</a></li>
          </ul>
        </div>
     <nav>
        <ul>
          <ul style="float:right;list-style-type:none;">
            <li> <a href="login/logout.php">Log out</a></li>
            <li><a href="#login">Profil</a></li>
         </ul>
       </nav>
<div id="tabel">
        <h1>Data Warga Terdaftar|</h1>
          <a href="tambah.php" style="color:red;">Tambah data Warga</a>
            <br></br>
              <form class="jjl" action="" method="post">
                <input type="text" name="keyword" value=""  size="40" autofocus placeholder="Masukan Pencarian.." autocomplete="off">
                <button type="submit" name="cari">Search</button>
              </form>
              <br>
              <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                  <th>id</th>
                  <th>Nama</th>
                  <th>nik</th>
                  <th>ttl</th>
                  <th>Alamat</th>
                  <th>gambar</th>
                  <th>Tindakan</th>
                </tr>
                <?php $i = 1;?>
                <?php foreach ($data as $row):?>
                  <tr>
                    <td><?= $i;?></td>
                    <td><?=$row ["nama"];?></td>
                    <td><?=$row ["nik"];?></td>
                    <td><?=$row ["ttl"];?></td>
                    <td><?=$row ["alamat"];?></td>
                    <td><img src="<?=$row["gambar"];?>" alt="profil"  width="40px"></td>
                    <td>
                      <a href="ubah.php?id=<?=$row["id"];?>">Ubah</a> |
                      <a href="hapus.php?id=<?=$row["id"];?>"onclick="return confirm('yakin?');">hapus</a>
                    </td>
                  </tr>
                  <?php $i++;  ?>
                <?php endforeach;?>
              </table>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </body>
          </html>
