<?php
require 'function.php';
$id=$_GET["id"];
if( hapus($id) >0){
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
 ?>
