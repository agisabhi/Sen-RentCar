<?php
include '../koneksi.php';
$nama_pelanggan = $_POST['nama_pelanggan'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$nik = $_POST['nik'];
$email   = $_POST['email'];
$password	= $_POST['password'];
$password1  = $_POST['password1'];

if ($_POST['submit']) {
  $ekstensi_boleh 	= array('png','jpg');
		$gambar_produk		= $_FILES['foto_ktp']['name'];
		$x 			= explode('.', $gambar_produk);
		$ekstensi	= strtolower(end($x));
		$ukuran		= $_FILES['foto_ktp']['size'];
		$file_tmp	= $_FILES['foto_ktp']['tmp_name'];
  if($password==$password1){
    if(in_array($ekstensi, $ekstensi_boleh) === true){
        if ($ukuran < 1044070) {
      move_uploaded_file($file_tmp, '../gambar/'.$gambar_produk);
      $query = mysqli_query($koneksi, "insert into pelanggan values ('','$nama_pelanggan','$pekerjaan','$alamat','$nik','$gambar_produk','$email','$password')")or die(mysqli_error());

    }else {
      echo "<script> alert('Ukuran File Max : 1 MB'); </script>";
      include 'daftaruser.php';
    }

  }else {
    echo "<script> alert('Ekstensi harus JPG atau PNG');</script>";
    include '../index.php';
  }

}else {
  echo "<script> alert('password tidak sama'); </script>";
  include 'daftaruser.php';
}
}
if ($query) {
  header('location:../index.php?pesan=daftar');
}





?>
