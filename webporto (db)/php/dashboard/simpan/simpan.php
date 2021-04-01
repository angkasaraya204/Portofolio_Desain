<?php
include "../koneksi.php";
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $user = $_POST['user'];
    $emailadd = $_POST['emailadd'];
    $sandi = md5($_POST['sandi']);
    $lngkp = $_POST['lngkp'];
    $gambar = $_POST['gambar'];
    $quotes = $_POST['quotes'];

    $sql = "UPDATE tb_user SET username='$user', emailadd='$emailadd', katasandi='$sandi', namalngkp='$lngkp', gambar='$gambar', quotes='$quotes' WHERE id='$id' ";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: profile.php');
    }
    else {
        echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

    }
}