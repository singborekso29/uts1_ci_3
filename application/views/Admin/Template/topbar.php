<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            <?= $this->session->userdata('username'); ?>
                        </span>
                        <img class="img-profile rounded-circle"
                            src="<?= base_url('assets/lte/img/undraw_profile.svg'); ?>">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow">
                        <a class="dropdown-item" href="<?= site_url('login/logout'); ?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>