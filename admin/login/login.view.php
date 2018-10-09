<?session_start();
$head='Login';
?>

<?php if(isset($_SESSION['username']) && isset($_SESSION['password']) ):?>
<?php  echo "<script> location.href='../'; </script>"; 
         exit; ?>
         <?else:?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../layout/head.php');?>
    
    
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="../assets/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <?php if(isset($_GET['pesan'])){
                            $pesan = $_GET['pesan'];
                            echo '<div class="alert alert-danger"><strong>'.$pesan.'</strong></div>';
                        }
                        ?>
                        <div class="login-form">
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

   <?php require_once('../layout/js.php');?>
</body>
</html>

<<<<<<< HEAD:admin/login/login.view.php
<?php endif?>
=======
>>>>>>> 5309a52e1fcb6ea996c533354a039c34370b7049:admin/login/index.php
<!-- end document-->