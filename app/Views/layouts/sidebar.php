<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="<?= base_url('images/logots.jpg') ?>" alt="logo-tiga-serangkai" class="img-fluid w-75">
        </div>
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">Tiga Serangkai </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('customer') ?>">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Customer</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pemesanan') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Pemesanan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('film') ?>">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Film</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('level') ?>">
            <i class="fas fa-fw fa-snowflake-o"></i>
            <span>Level</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('detaillevel') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Detail Level</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('jeniscuti') ?>">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Jenis Cuti</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>