<?php session_start();?>
<<<<<<< HEAD
=======
<?php if(isset($_SESSION['username'])): ?>
>>>>>>> 5309a52e1fcb6ea996c533354a039c34370b7049

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../layout/head.php');?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php require_once('../layout/header-mobile.php');?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
        <?php require_once('../layout/sidebar.php');?>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
            <?php require_once('../layout/header-desktop.php');?>   
            <?php require_once('../layout/js.php');?>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   

</body>

</html>
<!-- end document-->

<?php else: ?>
<?php header ('location: ../login ')?>
<?php endif ?>