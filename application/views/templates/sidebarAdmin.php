<!-- Sidebar -->
<ul style="background-color: #808000;background-image: linear-gradient(180deg,#6B8E23 10%,#6B8E23 100%);" class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LBBCI</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/index'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Management Data
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Menu/index'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Cek data Peserta</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Menu/dataadmin'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Cek data Admin</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Menu/gettentor'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Cek data Tentor</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Insert Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Menu/index'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Insert data Admin</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/daftartentor'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Insert data Tentor</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->