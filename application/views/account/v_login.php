<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- CSS -->
    <link href="<?= base_url('assets/lte/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/lte/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">

                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                        </div>

                        <!-- NOTIFIKASI -->
                        <?php
                        if ($this->session->flashdata('sukses')) {
                            echo '<div class="alert alert-success">' . $this->session->flashdata('sukses') . '</div>';
                        }
                        ?>

                        <!-- FORM LOGIN CI -->
                        <?= form_open('login'); ?>

                        <div class="form-group">
                            <input type="text" name="username"
                                class="form-control form-control-user"
                                placeholder="Username"
                                value="<?= set_value('username'); ?>">
                            <small class="text-danger"><?= form_error('username'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password"
                                class="form-control form-control-user"
                                placeholder="Password">
                            <small class="text-danger"><?= form_error('password'); ?></small>
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Login
                        </button>

                        <?= form_close(); ?>

                        <hr>
                        <div class="text-center">
                            <a href="<?= site_url('register'); ?>" class="small">
                                Belum punya akun? Daftar di sini
                            </a>
                            <div class="text-center">
                                <a href="<?= site_url('halaman/beranda'); ?>" class="small">
                                    Kembali ke Beranda
                                </a>
                            </div>
                            <hr>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/lte/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lte/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lte/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lte/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>