<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $valid = $this->form_validation;

        $valid->set_rules('username', 'Username', 'required');
        $valid->set_rules('password', 'Password', 'required');

        if ($valid->run() == TRUE) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // ✅ cukup 2 parameter
            $this->simple_login->login($username, $password);
        }

        $this->load->view('account/v_login');
    }

    public function logout()
    {
        $this->simple_login->logout();
    }
}
