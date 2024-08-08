<?php
    /**
    * NIM : 2257401085
    * Nama : Lisa Amanda
    * Kelas : MI22A
    */
?>

<?php
    
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>