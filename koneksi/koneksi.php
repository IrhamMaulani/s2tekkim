<?php
try{
<<<<<<< HEAD
    $koneksi = new PDO('mysql:host=localhost;dbname=s2_tekkim', "root", "");
    }catch (PDOException $e){
        die($e-> getMessage());
        exit();
    }

=======
$koneksi = new PDO('mysql:host=localhost;dbname=s2_tekkim',"root","");
}catch (PDOException $e){
    die($e-> getMessage());
    exit();
}
>>>>>>> 5309a52e1fcb6ea996c533354a039c34370b7049
?>