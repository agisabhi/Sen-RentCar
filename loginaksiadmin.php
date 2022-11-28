<?php
include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * from admin where user='$username' and pass='$password'") or die(mysqli_error());
$cek = mysqli_num_rows($query);
echo "$username";
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status']   = "login";
	header('location:admin/forms.php?pesan=login');
}else{
	echo "<script> alert('Email dan Password Salah')";
  include 'loginadmin.php';
}

?>
