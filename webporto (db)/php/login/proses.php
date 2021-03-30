<?php 
session_start();
include '../koneksi.php';

// menangkap data yang dikirim dari form
$user = $_POST['user'];
$sandi = md5($_POST['sandi']);

$result = mysqli_query($connect,"SELECT * FROM tb_user WHERE username='$user' and katasandi='$sandi'");
$cek = mysqli_num_rows($result);

if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	$_SESSION['username'] = $user;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id_login'] = $data['id'];
    header("location: ../index.php");
} else {
	header("location: index.php?pesan=gagal_login_data_tidak_ditemukan");
}
?>