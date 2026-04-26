<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

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
                            <h1 class="h4 text-gray-900 mb-4">Daftar Akun</h1>
                        </div>

                        <!-- FORM REGISTER -->
                        <?= form_open('register'); ?>

                        <div class="form-group">
                            <input type="text" name="name"
                                class="form-control form-control-user"
                                placeholder="Nama Lengkap"
                                value="<?= set_value('name'); ?>">
                            <small class="text-danger"><?= form_error('name'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="text" name="username"
                                class="form-control form-control-user"
                                placeholder="Username"
                                value="<?= set_value('username'); ?>">
                            <small class="text-danger"><?= form_error('username'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email"
                                class="form-control form-control-user"
                                placeholder="Email"
                                value="<?= set_value('email'); ?>">
                            <small class="text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password"
                                class="form-control form-control-user"
                                placeholder="Password">
                            <small class="text-danger"><?= form_error('password'); ?></small>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password_conf"
                                class="form-control form-control-user"
                                placeholder="Konfirmasi Password">
                            <small class="text-danger"><?= form_error('password_conf'); ?></small>
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Daftar
                        </button>

                        <?= form_close(); ?>

                        <hr>

                        <div class="text-center">
                            <a href="<?= site_url('login'); ?>" class="small">
                                Sudah punya akun? Login di sini
                            </a>
                        </div>

                        <div class="text-center">
                            <a href="<?= site_url('halaman/beranda'); ?>" class="small">
                                Kembali ke Beranda
                            </a>
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