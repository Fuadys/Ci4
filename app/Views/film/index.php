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
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Film</h6>
                        <a href="<?= base_url('film/tambah') ?>" class="d-sm-flex mb-3"> <button type="button" class="btn btn-primary">Tambah Customer</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th width="80" class="text-center">No</th>
                                        <th>Judul Film</th>
                                        <th>Genre</th>
                                        <th>Kategori</th>
                                        <th>Tayang</th>
                                        <th>Durasi</th>
                                        <th width="130" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $i => $d) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $i + 1 ?></td>
                                            <td><?= $d['judul'] ?></td>
                                            <td><?= $d['genre'] ?></td>
                                            <td><?= $d['kategori'] ?></td>
                                            <td><?= $d['tayang'] ?></td>
                                            <td><?= $d['durasi'] ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('film/edit/' . $d['id']) ?>" class="btn btn-warning">Edit</a>
                                                <a href="<?= base_url('film/delete/' . $d['id']) ?>" class="btn btn-danger">Delete</a>                                            
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