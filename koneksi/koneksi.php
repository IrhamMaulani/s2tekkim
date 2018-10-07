<?php
try{
<<<<<<< HEAD
    $koneksi = new PDO('mysql:host=localhost;dbname=s2_tekkim', "root", "");
    }catch (PDOException $e){
        die($e-> getMessage());
        exit();
    }

=======
$koneksi = new PDO('mysql:host=localhost;dbname=tekkim',"root","");
}catch (PDOException $e){
    die($e-> getMessage());
    exit();
}
>>>>>>> 08ebc9c96c8534f9f1b8ff38e027f3f616069a21
?>