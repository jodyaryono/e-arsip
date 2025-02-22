<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("admin/komponen/header.php") ?>
    <title>Sistem Arsip</title>

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">
    <!--  -->
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="<?php echo site_url('dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ARCHIVE</div>
            </a>

            <?php $this->load->view("admin/komponen/menu.php") ?>
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

                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>



                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">LSP Informatika</span>

                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->




                    <!-- Begin Page Content -->
                    <div class="container-fluid">



                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart -->
                            <div class="col-xl-12 col-lg-12">
                                <div class="card shadow mb-6">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">About Project</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="tengah">
                                        <h2 class="aktif">Welcome to E-Arsip</h2><br>
                                        <h4 class="aktif1">ADMIN</h4>
                                        <center><span class="badge badge-primary">
                                                <h5 class="aktif2">by LSP Informatika</h5>
                                            </span>


                                            <!-- kalender -->
                                            <div class="pull-right">
                                                <div id="kalender"></div>
                                            </div>
                                            <br>
                                            <br>
                                            <img src='/foto/rak.jpeg'>
                                            <style>
                                            body {

                                                background-image: url(foto/rak.jpeg);
                                                background-size: cover;

                                            }


                                            .tengah {
                                                padding: 10px;




                                                position: relative;
                                                margin: auto;
                                                min-height: 500px;
                                            }

                                            .satu .jelas1 {
                                                color: black;
                                                margin-top: 300px;
                                                text-align: center;


                                            }

                                            .dua .jelas2 {
                                                color: black;
                                                margin-top: 300px;
                                                text-align: center;

                                            }

                                            .tiga .jelas3 {
                                                color: black;
                                                margin-top: 300px;
                                                text-align: center;

                                            }

                                            .tengah-items {

                                                display: -webkit-box;
                                                display: -ms-flexbox;
                                                display: flex;
                                                -webkit-box-pack: center;
                                                -ms-flex-pack: center;
                                                justify-content: center;
                                                -webkit-box-align: center;
                                                -ms-flex-align: center;
                                                align-items: center;
                                                margin-top: 70px;


                                            }

                                            @media only screen and (max-width:800px) {
                                                .tengah-items {
                                                    -webkit-box-orient: vertical;
                                                    -webkit-box-direction: normal;
                                                    -ms-flex-direction: column;
                                                    flex-direction: column;
                                                }

                                                .tengah-items p {
                                                    margin-top: 0 !important;
                                                    color: white !important;
                                                }

                                                .tengah-items>div {
                                                    margin-right: 0 !important;
                                                }
                                            }

                                            .aktif {
                                                text-align: center;
                                                font-size: 40px;
                                            }

                                            .aktif1 {
                                                text-align: center;
                                                font-size: 20px;
                                            }

                                            .aktif2 {
                                                text-align: center;
                                                font-size: 15px;
                                            }

                                            .tengah-items>div {
                                                margin-right: 90px;
                                                border-radius: 50%;
                                                display: -webkit-box;
                                                display: -ms-flexbox;
                                                display: flex;
                                                -webkit-box-pack: center;
                                                -ms-flex-pack: center;
                                                justify-content: center;
                                                -webkit-box-align: center;
                                                -ms-flex-align: center;
                                                align-items: center;
                                                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
                                            }

                                            .tengah-items>div:nth-child(3) {
                                                margin-right: 0;
                                            }

                                            .satu {
                                                background-color: grey;
                                                width: 200px;
                                                height: 200px;
                                                background-image: url(foto/laptop.jpg);
                                                background-size: cover;
                                                background-position: center;
                                            }

                                            .dua {
                                                background-color: #eaeaea;
                                                width: 200px;
                                                height: 200px;
                                                background-image: url(foto/seken.jpg);
                                                background-size: cover;
                                                background-position: center;
                                            }

                                            .tiga {
                                                background-color: grey;
                                                width: 200px;
                                                height: 200px;
                                                background-image: url(foto/service.jpg);
                                                background-size: cover;
                                                background-position: center;
                                            }
                                            }
                                            </style>

                                            <style type="text/css">


                                            </style>

                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="chart-area">
                                                    <canvas id="myAreaChart"></canvas>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <!-- /.container-fluid -->

                            </div>
                            <!-- End of Main Content -->

                            <!-- Footer -->

                            <!-- End of Footer -->

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current
                                    session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit"
                                        class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $this->load->view("admin/komponen/javascript.php") ?>
</body>

</html>