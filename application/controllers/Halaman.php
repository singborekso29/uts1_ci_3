<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
{

    public function beranda()
    {
        $this->load->view('halaman/header');
        $this->load->view('halaman/beranda');
        $this->load->view('halaman/footer');
    }

    public function guru()
    {
        $this->load->view('halaman/header');
        $this->load->view('halaman/guru');
        $this->load->view('halaman/footer');
    }

    public function prestasi()
    {
        $this->load->view('halaman/header');
        $this->load->view('halaman/prestasi');
        $this->load->view('halaman/footer');
    }

    public function kegiatan()
    {
        $this->load->view('halaman/header');
        $this->load->view('halaman/kegiatan');
        $this->load->view('halaman/footer');
    }

    public function sarana()
    {
        $this->load->view('halaman/header');
        $this->load->view('halaman/sarana');
        $this->load->view('halaman/footer');
    }

    public function spmb()
    {
        $this->load->view('halaman/header');
        $this->load->view('halaman/spmb');
        $this->load->view('halaman/footer');
    }
}
