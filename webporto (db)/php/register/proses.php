<?php 
include "../koneksi.php"; 

$email = addslashes(strip_tags($_POST['email'])); 
$user = addslashes(strip_tags($_POST['user'])); 
$sandi = addslashes(strip_tags($_POST['sandi'])); 
$nama = addslashes(strip_tags($_POST['nama'])); 
$gambar = addslashes(strip_tags($_POST['gambar']));
$stats = addslashes(strip_tags($_POST['stats']));
$quotes = addslashes(strip_tags($_POST['quotes']));
$last = date('Y-m-d');

if ($user&&$sandi&&$nama) { 
    if (strlen($user) > 15){
        echo "<script>alert('Username Melebihi 15 Karakter!');</script>";
} else {
    //password harus 6-25 karakter
    if (strlen($sandi) > 10){
        echo "<script>alert('Password Melebihi 10 Karakter!');</script>";
    }
    else {
    //untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($sandi){
            $sql_get = "SELECT * FROM tb_user WHERE username = '$user'";
            $query = mysqli_query($connect, $sql_get);
            $row = mysqli_fetch_array($query);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($row == 0) {
                $sandi = md5($sandi);
                $sql_insert = "INSERT INTO tb_user VALUES ('',  '$user', '$email', '$sandi', '$nama', '$gambar', '$quotes', '$last', '$stats')";
                $query2 = mysqli_query($connect, $sql_insert);
                echo "<script>alert('Pendaftaran Berhasil.');</script>";
            }
            else {
                echo "Username sudah terdaftar";
            }
        }   else {
            echo "Password yang kamu masukan tidak sama!";
            }
        }
    }
} else {
echo "Tolong penuhi form pendaftaran!";
}
?>