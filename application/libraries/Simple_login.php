<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simple_login
{
    var $CI = NULL;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function login($username, $password)
    {
        // cek ke database
        $query = $this->CI->db->get_where('users', [
            'username' => $username,
            'password' => md5($password)
        ]);

        if ($query->num_rows() == 1) {

            $user = $query->row();

            // ✅ set session lengkap
            $this->CI->session->set_userdata([
                'id'       => $user->id_user,
                'username' => $user->username,
                'status'   => 'login'
            ]);

            // ✅ langsung ke dashboard admin
            redirect('dashboard');
        } else {

            $this->CI->session->set_flashdata(
                'sukses',
                'Username atau password salah!'
            );

            redirect('login');
        }
    }

    // 🔒 proteksi halaman
    public function cek_login()
    {
        if ($this->CI->session->userdata('status') != 'login') {
            $this->CI->session->set_flashdata('sukses', 'Anda belum login');
            redirect('login');
        }
    }

    // 🔓 logout
    public function logout()
    {
        $this->CI->session->sess_destroy();
        $this->CI->session->set_flashdata('sukses', 'Berhasil logout');
        redirect('welcome');
    }
}
