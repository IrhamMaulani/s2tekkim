<?php

if(isset($_POST['logout'])){
    require_once('../../koneksi/koneksi.php');
    session_start();
    session_destroy();

    header('location: ../login'); 
    exit; 
}

?>