<?php
$koneksi = mysqli_connect("localhost","root","","rental");
if (mysqli_connect_error()) {
  echo "Gagal Koneksi Database".mysqli_connect_error();
}
 ?>
