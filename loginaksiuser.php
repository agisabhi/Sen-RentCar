<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * from pelanggan where email='$username' and password='$password'") or die(mysqli_error());
$cek = mysqli_num_rows($query);
echo "$username";
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status']   = "login";
	header('location:user/index.php');
}else{
	echo "<script> alert('Email dan Password Salah')";
  include 'loginuser.php';
}

?>
