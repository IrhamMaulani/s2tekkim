<?php session_start();?>
<?php if(isset($_SESSION['username'])): ?>
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
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Artikel</h2>
                                <div class="overview-wrap float-right">
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#tambahArtikel">
                                        <i class="zmdi zmdi-plus"></i>Tambah Artikel</button>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Judul</th>
                                                <th>Detail</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Irham & Wiwi: Sekawanan Elang</td>
                                                <td><button class="btn btn-info" data-toggle="modal" data-target="#detailArtikel">Detail</button></td>
                                                <td><button class="btn btn-warning" data-toggle="modal" data-target="#tambahArtikel">Update</button></td>
                                                <td><button class="btn btn-danger">Delete</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    
   <?php require_once('../layout/modal.php');?>
   <?php require_once('../layout/js.php');?>

</body>

</html>
<!-- end document-->


<?php else: ?>
<?php header ('location: ../login ')?>
<?php endif ?>