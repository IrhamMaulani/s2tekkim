<?php
try{
    $koneksi = new PDO('mysql:host=localhost;dbname=s2_tekkim', "root", "");
    }catch (PDOException $e){
        die($e-> getMessage());
        exit();
    }

?>