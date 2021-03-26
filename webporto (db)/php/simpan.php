<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
    $emailadd = $_POST['emailadd'];
    $komen = $_POST['komen'];

    $sql = "INSERT INTO `komentar` (`emailadd`, `komen`) VALUES ('$emailadd', '$komen')";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: index.php');
    } else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>