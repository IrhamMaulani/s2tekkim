<?php

require_once('../../koneksi/koneksi.php');
require('login.view.php');

if(isset($_POST['username']) && isset($_POST['password']) ){

    $userName = $_POST['username'];
    $password = $_POST['password'];

    $dataKueri = $koneksi->prepare("SELECT COUNT('username') FROM  admins where username = :userName AND pass = :password");

    

    $dataKueri->bindParam(":userName",$userName);
    $dataKueri->bindParam(":password",$password);
    
    $dataKueri->execute();

    $count = $dataKueri->fetchColumn();

    if($count == 1){

        echo '$("#pesanLogin").html("Anda Berhasil Login");';
        $_SESSION['username'] = $userName;
        $_SESSION['password'] = $password;
        /* header("Location: ../"); /* Redirect browser */
        /* exit();  */
         echo "<script> location.href='../'; </script>"; 
         exit; 

    }
    else{

    /* echo '<script>
    
   
    $("#pesanLogin").html("Password Error");
    </script>'; */
    header('location: login.php?error=User Name and Password do not Match!');
     exit();

    }
}


?>