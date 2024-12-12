<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function register() {
        $this->load->view('auth/layout/header');
        $this->load->view('auth/register');
        $this->load->view('auth/layout/footer');
    }

    public function create() {
        $role_id = '01';
        $tahun = date('Y');
        $bulan = date('m');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->User_model->createUser($role_id, $tahun, $bulan, $nama_lengkap, $username, $email, $password);
        redirect('login');
    }
}

/* End of file Auth.php and path \application\controllers\Auth.php */
