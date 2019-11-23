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

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <div class="text-left">
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-bell"></i> Notifikasi</h5>
                        </div>
                    </div>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"></h1>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Menunggu!</strong> Proses di teliti oleh dewan pimpinan.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Disetujui!</strong> oleh dewan pimpinan.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ditolak!</strong> Karena ada proses pekerjaan yang belum selesai.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
            </div>
        </div>
    </div>

    </div>
    <!-- End of Main Content -->