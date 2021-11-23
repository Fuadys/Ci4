<?= $this->extend('layouts/master.php') ?>

<?= $this->section('content') ?>
<div id="content">

    <!-- Topbar -->
   
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">customer</h1>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
                        <br>
                        <a href="<?= base_url('customer') ?>" class="d-sm-flex mb-3"> <button type="button" class="btn btn-warning">Kembali</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th width="80" class="text-center">No</th>
                                        <th>Nama Customer</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
                                        <th>Tanggal pesan</th>
                                        <th>jumlah</th>
                                        <th>harga</th>                                                                               
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $i => $d) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $i + 1 ?></td>
                                            <td><?= $d->nama ?></td>
                                            <td><?= $d->jenis_kelamin ?></td>
                                            <td><?= $d->telepon ?></td>
                                            <td><?= $d->alamat ?></td>
                                            <td><?= $d->tanggal_pemesanan ?></td>
                                            <td><?= $d->jumlah ?></td>
                                            <td><?= $d->Total_harga ?></td>                                                                                        
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>

<?= $this->endSection('') ?>