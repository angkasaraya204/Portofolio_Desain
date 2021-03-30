<?php
include "../koneksi.php";
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $desk = $_POST['desk'];

    $sql = "UPDATE project SET judul='$judul', gambar='$gambar', deskripsi='$desk' WHERE id='$id' ";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: project.php');
    }
    else {
        echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

    }
}