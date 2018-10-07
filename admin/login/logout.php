<?php session_start();?>
<?php

if(isset($_POST['logout'])){
    require_once('../../koneksi/koneksi.php');

    
    session_destroy();

    echo "<script> location.href='login.php'; </script>"; 
         exit; 
}

?>