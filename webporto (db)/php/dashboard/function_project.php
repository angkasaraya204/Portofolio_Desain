<?php
include "../koneksi.php";
if($_GET['act'] == 'tambahpro'){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $desk = $_POST['desk'];
    $gambar = $_POST['gambar'];

    //query
    //query
    $query =  mysqli_query($connect, "INSERT INTO project VALUES('$id', '$judul' , '$desk' , '$gambar')");

    if ($query) {
        # code redicet setelah insert ke index
        header("location: ./project.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($connect);
    }
}