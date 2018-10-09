<<<<<<< HEAD
<?php session_start();?>
=======

>>>>>>> 5309a52e1fcb6ea996c533354a039c34370b7049
<?php

if(isset($_POST['logout'])){
    require_once('../../koneksi/koneksi.php');
<<<<<<< HEAD

    
    session_destroy();

    echo "<script> location.href='login.php'; </script>"; 
         exit; 
=======
    session_start();
    session_destroy();

    header('location: ../login'); 
    exit; 
>>>>>>> 5309a52e1fcb6ea996c533354a039c34370b7049
}

?>