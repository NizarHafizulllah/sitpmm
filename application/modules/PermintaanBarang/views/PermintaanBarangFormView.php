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
                            <h5 class="m-0 font-weight-bold text-secondary text-right empat"><i class="fas fa-file"></i> Tambah Barang</h5>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('administrator/barang'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo-alt fa-sm text-white"></i> Kembali</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <form class="tiga" action="" method="post">
                            <div class="form-group row">
                                <label for="nip" class="col-sm-2 col-form-label">No. Permintaan Barang</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly class="form-control placeholder_color tiga" id="kode_barang" placeholder="No. Permintaan Barang" name="kode_barang">
                                    <?= form_error('kode_barang', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control placeholder_color tiga" id="kategori" name="kategori" placeholder="Kategori">
                                    <?= form_error('kategori', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="col-sm-1 ml-0">
                                    <a href="<?= base_url('administrator/barang'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm text-white"></i></a>
                                    <a href="<?= base_url('administrator/barang'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-undo-alt fa-sm text-white"></i></a>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Merk</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control placeholder_color tiga " id="merk" placeholder="Merk" name="merk">
                                    <?= form_error('merk', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="col-md-1">
                                    <a href="<?= base_url('administrator/barang'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm text-white"></i></a>
                                    <a href="<?= base_url('administrator/barang'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-undo-alt fa-sm text-white"></i></a>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Supplier / Penjual</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control placeholder_color tiga" id="supplier" name="supplier" placeholder="Supplier">
                                    <?= form_error('supplier', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="col-sm-1 ml-0">
                                    <a href="<?= base_url('administrator/barang'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm text-white"></i></a>
                                    <a href="<?= base_url('administrator/barang'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-undo-alt fa-sm text-white"></i></a>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_ktp" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control placeholder_color tiga" rows="3" id="keterangan" name="keterangan" placeholder="Nama Barang"></textarea>
                                    <?= form_error('nama_barang', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Satuan</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control placeholder_color tiga" id="harga" name="harga" placeholder="Harga Satuan">
                                    <?= form_error('harga', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <label for="inputEmail3" class="col-sm-1 col-form-label"> Qty</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control placeholder_color tiga" id="qty" name="qty" placeholder="Qty">
                                    <?= form_error('qty', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat_tinggal" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control placeholder_color tiga" rows="3" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                    <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary btn-sm tiga"><i class="fas fa-plus fa-sm text-white"></i> Tambah Data</button>
                                </div>
                            </div>

                            <table class="table table-hover table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0" id="tabledata">
                                <thead class="tiga text-center table-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">QTY</th>
                                        <th scope="col">Harga Satuan</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                
                            </table>

                            <div class="">

                                <button type="button" id="btnSimpan" class="btn btn-sm btn-info"><i class="fas fa-print fa-sm text-white"></i> Simpan</button>

                                <a href="<?= base_url('PermintaanBarang/kembali'); ?>" class="btn btn-sm btn-success"><i class="fas fa-file-excel fa-sm text-white"></i> Export Excel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php 
    $this->load->view($this->controller.'FormViewJs');
    ?>