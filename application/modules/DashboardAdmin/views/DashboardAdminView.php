<?php $user = $this->session->userdata('login'); ?>
<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <div class="text-left">
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-tachometer-alt"></i> Dashboard</h5>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="alert alert-secondary" role="alert">
                            <h6 class="alert-heading">Selamat datang <strong><?= $user['nama_lengkap']; ?></strong>!</h6>
                            <p class="mb-0 tiga">Aplikasi e-Form (Electronic Formulir) PT. Tigapilar Maju Mandiri.</p>

                            <hr>
                            <p class="mb-0 tiga">Anda login sebagai <strong><?= $user['nama_role'] ?></strong>!</p>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-bottom-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="tiga font-weight-bold text-warning text-uppercase mb-1">JUMLAH PEGAWAI</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-5x text-gray-300 rotate-n-15"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn-sm btn-warning btn-block text-center">Klik disini</i></a>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-bottom-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="tiga font-weight-bold text-success text-uppercase mb-1">JUMLAH USER</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-5x text-gray-300 rotate-n-15"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn-sm btn-success btn-block text-center">Klik disini</i></a>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-bottom-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="tiga font-weight-bold text-info text-uppercase mb-1">JUMLAH DATA CUTI PEGAWAI</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-5x text-gray-300 rotate-n-15"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn-sm btn-info btn-block text-center">Klik disini</i></a>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-bottom-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="tiga font-weight-bold text-primary text-uppercase mb-1">JUMLAH DATA BARANG</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-5x text-gray-300 rotate-n-15"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn-sm btn-primary btn-block text-center">Klik disini</i></a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- End of Main Content -->