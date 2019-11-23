<!DOCTYPE html>
<html lang="en">
<?php $user = $this->session->userdata('login'); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Date picker-->
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap-v2/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- Datatables-->
    <link href="<?= base_url('assets/'); ?>vendor/datatable-serverside/jquery.dataTables.min.css" rel="stylesheet" media="screen">
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script> -->
    <!-- <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script> -->

    <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/bootstrap-v2/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/bootstrap-v2/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/bootstrap-v2/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

    <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/datatable-serverside/jquery-3.3.1.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/datatable-serverside/dataTables.min.js"></script>

    <style type="text/css">
        .dua {
            font-size: 13px;
        }

        .tiga {
            font-size: 14px;
        }

        .empat {
            font-size: 17px;
        }

        .placeholder_color::-webkit-input-placeholder {
            color: #D4D5DB;
        }
    </style>

</head>
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="sidebar-brand-text mx-3">e-Form </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('DashboardAdmin') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>DASHBOARD</span></a>
        </li>


        <?php
        $menu = $this->menu;

        foreach ($menu as $key => $value) { ?>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse<?= $key; ?>" aria-expanded="true" aria-controls="collapse<?= $key; ?>">
                    <i class="<?php echo $value['icon']; ?>"></i>
                    <span><?php echo $value['menu']; ?></span>
                </a>
                <div id="collapse<?= $key; ?>" class="collapse" aria-labelledby="heading<?= $key; ?>" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php
                            foreach ($value['submenu'] as $key1 => $value1) { ?>
                            <a class="collapse-item" href="<?= site_url($value1['url']); ?>"><i class="fas fa-fw fa-caret-right"></i><?php echo $value1['sub_menu'] ?></a>
                        <?php }
                            ?>
                    </div>
                </div>
            </li>

        <?php }
        ?>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama_lengkap']; ?></span>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                        </a>

                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile Saya
                            </a>

                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Pengaturan
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Log Out
                            </a>
                        </div>
                    </li>
                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Logout Modal-->

            <!-- content -->
            <?php echo $content; ?>

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-right">
                        <span>Copyright &copy; e-Form <?= date('Y') ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalLabel">Anda yakin untuk logout?</h6>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body tiga">Klik <strong>"Logout"</strong> dibawah ini untuk megakhiri session anda.</div>
                        <div class="modal-footer">
                            <a class="btn btn-secondary btn-icon-split dua" data-dismiss="modal">
                                <span class="icon text-white">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>
                                <span class="text text-white">Cancel</span>
                            </a>
                            <a href="<?= site_url('login/logout') ?>" class="btn btn-danger btn-icon-split dua">
                                <span class="icon text-white-50">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>
                                <span class="text">Log out</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Bootstrap core JavaScript-->

    </body>

</html>