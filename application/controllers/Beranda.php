<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function index()
    {
        $this->load->view('header');
        $this->load->view('content');
        $this->load->view('footer');
    }
}
