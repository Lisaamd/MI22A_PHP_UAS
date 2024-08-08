<?php
    /**
    * NIM : 2257401085
    * Nama : Lisa Amanda
    * Kelas : MI22A
    */
?>

<?php 
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM kategori WHERE nama_kategori = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location: kategori.php');

    } else {
        echo "Gagal Hapus Barang";
    }
?>