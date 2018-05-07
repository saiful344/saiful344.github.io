<?php
$conn=mysqli_connect("localhost","root","","program");

function query($query){
  global $conn;
  $result=mysqli_query($conn,$query);
  $rows=[];
  while($row = mysqli_fetch_assoc($result)){
    $rows[]=$row;
  }
    return $rows;
}
function tambah($data){
  global $conn;
  $nama=htmlspecialchars($data["nama"]);
  $nik=htmlspecialchars($data["nik"]);
  $alamat=htmlspecialchars($data["alamat"]);
  $ttl=htmlspecialchars($data["ttl"]);
  $query="INSERT INTO data
  VALUES
  ('','$nama','$nik','$alamat','$ttl',)
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
function hapus($id){
  global $conn;
  mysqli_query($conn,"DELETE FROM data WHERE id=$id");
  return mysqli_affected_rows($conn);
}
function ilang($id){
  global $conn;
  mysqli_query($conn,"DELETE FROM artikel WHERE id=$id");
  return mysqli_affected_rows($conn);
}
function ubah($data){
  global $conn;
  $id=$data["id"];
  $nik=htmlspecialchars($data["nik"]);
  $nama=htmlspecialchars($data["nama"]);
  $alamat=htmlspecialchars($data["alamat"]);
  $ttl=htmlspecialchars($data["ttl"]);
  $query="UPDATE data SET
  nik='$nik',
  nama='$nama',
  alamat='$alamat',
  ttl='$ttl',
  WHERE id=$id";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}



function cari($keyword){
    $query ="SELECT * FROM data
           WHERE
         nama LIKE '%$keyword%' OR
         nik LIKE '%$keyword%' OR
         alamat LIKE '%$keyword%'
         ";
         return query($query);
}


function registrasi($data){
  global$conn;
  $username=strtolower(stripslashes($data["username"]));
  $password=mysqli_real_escape_string($conn ,$data["password"]);
  $password2=mysqli_real_escape_string($conn ,$data["password2"]);
  //cek username ada
  $result=mysqli_query($conn,"SELECT username FROM login WHERE username='$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah ada')
          </script>";
          return false;
  }
  //konfirmasi
  if ($password !== $password2) {
    echo "<script>
            alert('konfirmasi tidak sesuai')
          </script>";
          return false;
  }
  //encripsi password2
  $password=password_hash($password,PASSWORD_DEFAULT);
  //tambah
  mysqli_query($conn,"INSERT INTO login VALUES('','$username','$password')");
  return mysqli_affected_rows($conn);
  }
function surat2($surat2){
    global $conn;
    $nama=htmlspecialchars($surat2["nama"]);
    $nik=htmlspecialchars($surat2["nik"]);
    $ttl=htmlspecialchars($surat2["ttl"]);
    $gender=htmlspecialchars($surat2["gender"]);
    $setatus=htmlspecialchars($surat2["setatus"]);
    $alamat=htmlspecialchars($surat2["alamat"]);
    $pekerjaan=htmlspecialchars($surat2["pekerjaan"]);
    $pesan=htmlspecialchars($surat2["pesan"]);
    $kode=htmlspecialchars($surat2["kode"]);
    $query="INSERT INTO surat VALUES('','$nama','$nik','$ttl','$gender','$setatus','$pekerjaan','$alamat','$pesan','$kode')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
  }
  function kode($surat2){
      global $conn;
      $id=$data["id"];
      $nama=htmlspecialchars($surat2["nama"]);
      $nik=htmlspecialchars($surat2["nik"]);
      $ttl=htmlspecialchars($surat2["ttl"]);
      $gender=htmlspecialchars($surat2["gender"]);
      $setatus=htmlspecialchars($surat2["setatus"]);
      $pekerjaan=htmlspecialchars($surat2["pekerjaan"]);
      $alamat=htmlspecialchars($surat2["alamat"]);
      $pesan=htmlspecialchars($surat2["pesan"]);
      $kode=htmlspecialchars($surat2["kode"]);
    }
  function ttd($surat2){
     global $conn;
     $kodepusat=htmlspecialchars($surat2["kodepusat"]);
     $query="INSERT INTO kodepusat VALUES('','$kodepusat')";
     mysqli_query($conn,$query);
     return mysqli_affected_rows($conn);
   }
   function admin($admin){
     global$conn;
     $username=strtolower(stripslashes($admin["username"]));
     $password=mysqli_real_escape_string($conn ,$admin["password"]);
     $password2=mysqli_real_escape_string($conn ,$admin["password2"]);
     //cek username ada
     $result=mysqli_query($conn,"SELECT username FROM admin WHERE username='$username'");

     if (mysqli_fetch_assoc($result)) {
       echo "<script>
               alert('username sudah ada')
             </script>";
             return false;
     }
     //konfirmasi
     if ($password !== $password2) {
       echo "<script>
               alert('konfirmasi tidak sesuai')
             </script>";
             return false;
     }
     //encripsi password2
     $password=password_hash($password,PASSWORD_DEFAULT);
     //tambah
     mysqli_query($conn,"INSERT INTO admin VALUES('','$username','$password')");
     return mysqli_affected_rows($conn);
     }
     function kontak($komentar){
     global $conn;
     $nama=htmlspecialchars($komentar["nama"]);
     $email=htmlspecialchars($komentar["email"]);
     $pesan=htmlspecialchars($komentar["pesan"]);
     $query="INSERT INTO komentar VALUES ('','$nama','$email','$pesan') ";
     mysqli_query($conn,$query);
     return mysqli_affected_rows($conn);
   }
   function artikel($isi){
   global $conn;
   $judul=htmlspecialchars($isi["judul"]);
   $pesan=htmlspecialchars($isi["artikel"]);
   $query="INSERT INTO artikel VALUES ('','$judul','$pesan') ";
   mysqli_query($conn,$query);
   return mysqli_affected_rows($conn);
 }
?>
