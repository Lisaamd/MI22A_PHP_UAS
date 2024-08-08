<?php
    /**
    * NIM : 2257401085
    * Nama : Lisa Amanda
    * Kelas : MI22A
    */
?>

<?php
 
    session_start();
    if (!isset($_SESSION['user'])){
        $_SESSION['error'] = "Login Dahulu";
        header('location: login.php');
    }

?>