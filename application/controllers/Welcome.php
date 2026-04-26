<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('halaman/header');
		$this->load->view('halaman/beranda');
		$this->load->view('halaman/guru');
		$this->load->view('halaman/kegiatan');
		$this->load->view('halaman/prestasi');
		$this->load->view('halaman/sarana');
		$this->load->view('halaman/spmb');
		$this->load->view('halaman/footer');
	}
}
