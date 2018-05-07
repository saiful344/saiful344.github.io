<?php
require 'function.php';
$id=$_GET["id"];
if( ilang($id) >0){
  echo"
  <script>
  alert('Data berhasil');
  document.location.href='homead.php';
  </script>
  ";
}else{
  echo  "
  <script>
    alert('Data Hilang');
    document.location.href='homead.php';
    </script>
    ";
}
 ?>
