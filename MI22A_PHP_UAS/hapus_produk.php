<?php
    /**
    * NIM : 2257401085
    * Nama : Lisa Amanda
    * Kelas : MI22A
    */
?>

<?php  
    session_start();
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM produk WHERE id = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['success'] = "Barang Berhasil dihapus";
        header('location: produk.php');

    } else {
        $_SESSION['error'] = "Barang Gagal dihapus";
        header('location: produk.php');
    }
?>