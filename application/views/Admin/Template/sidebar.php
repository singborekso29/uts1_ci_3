<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('dashboard'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Menu</div>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('halaman/guru'); ?>">
            <i class="fas fa-users"></i>
            <span>Data Guru</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('halaman/prestasi'); ?>">
            <i class="fas fa-trophy"></i>
            <span>Prestasi</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('login/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

</ul>