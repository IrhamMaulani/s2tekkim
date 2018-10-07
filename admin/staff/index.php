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
                            <h2>Staff</h2>
                                <div class="overview-wrap float-right" data-toggle="modal" data-target="#tambahStaff">
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Tambah Staff</button>
                                        
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
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Detail</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1610817110001</td>
                                                <td>Achmad Mujaddid Islami</td>
                                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#detailStaff">Detail</button></td>
                                                <td><button class="btn btn-warning" data-toggle="modal" data-target="#tambahStaff">Update</button></td>
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
