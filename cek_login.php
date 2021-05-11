<?php 
session_start();

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	if ($data['level']=="pelanggan") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pelanggan";

		header("location:pelanggan/index.html");

	}else if ($data['level']=="teknisi") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "teknisi";

		header("location:teknisi/index.html");

	}else if ($data['level']=="cs") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "cs";
		header("location:cs/index.html");
		
	}else if ($data['level']=="kasir") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "kasir";
		header("location:kasir/index.html");
		
	}else if ($data['level']=="manajer") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "manajer";
		header("location:manajer/index.html");

	}else if ($data['level']=="owner") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "owner";
		header("location:owner/index.html");


	}else{

		header("location:index.php?pesan=gagal");


	}

}else{
	header("location:index.php?pesan=gagal");
}



?>