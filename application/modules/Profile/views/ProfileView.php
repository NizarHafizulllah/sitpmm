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
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-user-cog"></i> Profile</h5>
                        </div>

                        <div class="text-right">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white"></i> Edit Profile</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="form-group row mb-1">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <label class="col-sm-1 col-form-label text-center">:</label>
                            <input type="text" class="col-sm-6 form-control placeholder_color tiga" id="nik" placeholder="NIK" name="nik" value="">
                        </div>

                        <div class="form-group row mb-1">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <label class="col-sm-1 col-form-label text-center">:</label>
                            <input type="text" class="col-sm-6 form-control placeholder_color tiga" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="">
                        </div>

                        <div class="form-group row mb-1">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <label class="col-sm-1 col-form-label text-center">:</label>
                            <input type="text" class="col-sm-6 form-control placeholder_color tiga" id="jenis_kelamin" placeholder="Jenis Kelamin" name="jenis_kelamin" value="">
                        </div>

                        <div class="form-group row mb-1">
                            <label class="col-sm-3 col-form-label">Divisi</label>
                            <label class="col-sm-1 col-form-label text-center">:</label>
                            <input type="text" class="col-sm-6 form-control placeholder_color tiga" id="divisi" placeholder="Divisi" name="divisi" value="">
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <label class="col-sm-1 col-form-label text-center">:</label>
                            <textarea class="col-sm-6 form-control placeholder_color tiga" rows="3" id="alamat" name="alamat" placeholder="Alamat" value=""></textarea>
                        </div>

                        <div class="form-group row mb-1">
                            <label class="col-sm-3 col-form-label">No. Telepon</label>
                            <label class="col-sm-1 col-form-label text-center">:</label>
                            <input type="text" class="col-sm-6 form-control placeholder_color tiga" id="no_telepon" placeholder="No. Telepon" name="no_telepon" value="">
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
                            <h5 class="m-0 font-weight-bold text-secondary text-right"><i class="fas fa-user-lock"></i> Akses Aplikasi</h5>
                        </div>

                        <div class="text-right">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white"></i> Edit Akses</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="form-group row mb-1">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <label class="col-sm-1 col-form-label text-center">:</label>
                            <input type="text" class="col-sm-6 form-control placeholder_color tiga" id="username" placeholder="Username" name="username" value="">
                        </div>

                        <div class="form-group row mb-1">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <label class="col-sm-1 col-form-label text-center">:</label>
                            <input type="text" class="col-sm-6 form-control placeholder_color tiga" id="password" placeholder="Password" name="password" value="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End of Main Content -->