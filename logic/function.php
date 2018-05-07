<?php
$conn=mysqli_connect("localhost","root","","program");



function query($query){
  global $conn;
  $result =mysqli_query($conn,$query);
  $rows=[];
  while($row = mysqli_fetch_assoc($result)){
    $rows[]=$row;
  }
    return $rows;
}
function tambah($data){
  global $conn;
  $nik=htmlspecialchars($data["nik"]);
  $nama=htmlspecialchars($data["nama"]);
  $alamat=htmlspecialchars($data["alamat"]);
  $ttl=htmlspecialchars($data["ttl"]);
  // upload Gambar
  $gambar= upload();
  if(!$gambar){
    return false;
  }
  $query="INSERT INTO data
  VALUES
  ('','$nik','$nama','$alamat','$ttl','$gambar')
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}


function upload(){
  $namafile=$_FILES['gambar']['name'];
  $ukuranfile=$_FILES['gambar']['size'];
  $error=$_FILES['gambar']['error'];
  $tmpname=$_FILES['gambar']['tmp_name'];

  //cek gambar apakah tidak ada gambar yng di upload
  if ($error === 4) {
    echo"<script>
            alert('pilih gambar');
          </script>";
        return false;
  }

    $ekstensigmbrvalid=['jpg','jpeg','png'];
    $ekstensigambar=explode('.',$namafile);
    $ekstensigambar=strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar,$ekstensigmbrvalid)) {
      echo "<script>
          alert('Ini bukan tipe Valid');
          </script>";
          return false;
    }
    // sek $ukuranfile
    if($ukuranfile>1000000000000){
      "<script>
          alert('gambar teralu besar');
          </script>";
          return false;
    }
    $namafilebaru=upload();
    $namafilebaru .='.';
    $namafilebaru .=$ekstensigambar;

    move_uploaded_file($tmpname,'img/'.$namafile);
    return $namafilebaru;


}

function hapus($id){
  global $conn;
  mysqli_query($conn,"DELETE FROM data WHERE id=$id");
  return mysqli_affected_rows($conn);
}
function ubah($data){
  global $conn;
  $id=$data["id"];
  $nik=htmlspecialchars($data["nik"]);
  $nama=htmlspecialchars($data["nama"]);
  $alamat=htmlspecialchars($data["alamat"]);
  $ttl=htmlspecialchars($data["ttl"]);

  $gambarlama=htmlspecialchars($data["gambarlama"]);

  if($_FILES['gambar']['error'] === 4){
    $gambar=$gambarlama;
  }else{
      $gambar=upload();
  }


  $query="UPDATE data SET
  nik='$nik',
  nama='$nama',
  alamat='$alamat',
  ttl='$ttl',
  gambar='$gambar'
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
?>
