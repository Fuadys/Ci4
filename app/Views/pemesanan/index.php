<?= $this->extend('layouts/master.php') ?>

<?= $this->section('content') ?>
<div id="content">

    <!-- Topbar -->
    <?= $this->include('layouts/navbar.php') ?>
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Pemesanan</h1>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan</h6>
                        <a href="<?= base_url('pemesanan/tambah') ?>" class="d-sm-flex mb-3"> <button type="button" class="btn btn-primary">Tambah Customer</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th width="80" class="text-center">No</th>
                                        <th>Tanggal_pemesanan</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                        <th>ID Film</th>
                                        <th>ID Customer</th>
                                        <th width="130" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $i => $d) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $i + 1 ?></td>
                                            <td><?= $d['tanggal_pemesanan'] ?></td>
                                            <td><?= $d['jumlah'] ?></td>
                                            <td><?= $d['Total_harga'] ?></td>
                                            <td><?= $d['id_film'] ?></td>
                                            <td><?= $d['id_customer'] ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('pemesanan/edit/' . $d['id']) ?>" class="btn btn-warning">Edit</a>
                                                <a href="<?= base_url('pemesanan/delete/' . $d['id']) ?>" class="btn btn-danger">Delete</a>                                            
                                            </td>
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