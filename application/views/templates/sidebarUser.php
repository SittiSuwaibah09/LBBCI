<!-- Sidebar -->
<ul style="background-color: #008B8B;background-image: linear-gradient(180deg,#008B8B 10%,#008B8B 100%);" class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/index'); ?>">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LBBCI</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/index'); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/profile'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>My Profile</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/editprofile'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Program
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-book"></i>
            <span>Program Les</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Program Kursus:</h6>
                <a class="collapse-item" href="<?= base_url('user/lesprivate'); ?>">Private</a>
                <a class="collapse-item" href="<?= base_url('user/lesreguler'); ?>">Reguler</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/daftarles'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Register Les</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Tentor
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/editprofile'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Daftar Tentor</span></a>
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