<?php
include "../koneksi.php";
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $desk = $_POST['desk'];

    $sql = "UPDATE about SET deskripsi='$desk' WHERE id='$id' ";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: about.php');
    }
    else {
        echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

    }
}