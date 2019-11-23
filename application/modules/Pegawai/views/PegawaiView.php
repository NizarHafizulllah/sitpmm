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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-users"></i> Master Pegawai</h5>
                        </div>

                        <div class="text-right">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white"></i> Tambah Data</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="table-responsive tiga">
                            <table class="table table-hover table-striped table-bordered table-sm" id="dataTable" width="160%" cellspacing="0">
                                <thead class="tiga text-center table-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Divisi</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="dua text-center">

                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">TPMM100386</td>
                                        <td class="align-middle">ADHITYA</td>
                                        <td class="align-middle">IT</td>
                                        <td class="align-middle">Laki - laki</td>
                                        <td class="text-center align-middle" width="160px">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLong" title="Detail data"><i class="fas fa-folder-open fa-sm text-white"></i></button>
                                            <button type="button" class="btn btn-warning btn-sm" title="Edit data"><i class="fas fa-edit fa-sm text-white"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" title="Hapus data"><i class="fas fa-trash-alt fa-sm text-white"></i></button>
                                        </td>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="tiga" action="" method="post">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control placeholder_color tiga" id="nik" placeholder="NIK" name="nik" value="<?= set_value('nip'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control placeholder_color tiga" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Divisi</label>
                                <div class="col-sm-4">
                                    <span class="field">
                                        <select name="agama" id="agama" class="form-control placeholder_color tiga">
                                            <option value="">- Pilih -</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-4">
                                    <span class="field">
                                        <select name="jenis_kelamin" class="form-control placeholder_color tiga" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">- Pilih -</option>
                                            <option value="Laki - laki">Laki - laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </span>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control placeholder_color tiga" rows="3" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. Telepon</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control placeholder_color tiga" id="no_telepon" name="no_telepon" placeholder="No. Telepon" value="<?= set_value('no_telepon'); ?>">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-7">
                                    <button type="submit" class="btn btn-primary btn-sm tiga"><i class="fas fa-paper-plane fa-sm text-white"></i> Simpan Data</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>






    <!-- End of Main Content -->