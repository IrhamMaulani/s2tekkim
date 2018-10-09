<?php
require('../../koneksi/koneksi.php');

if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $statement = $koneksi->prepare(
        "SELECT * FROM admins WHERE username=:username AND pass=:pass"
    );

    $statement->bindParam("username",$username);
    $statement->bindParam("pass",$password);
    $statement->execute();
    $count = $statement->fetchColumn();

    if($count==1){
        session_start();
        $_SESSION['username'] = $username;
        header('location: ../home');
    }
    else{
        header('location: index.php?pesan=Username atau Password salah!');
    }


}
?>
