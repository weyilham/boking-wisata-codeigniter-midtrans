<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

        is_logged_in();
    }
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
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        $data['user'] = $this->db->get_where('tb_user', array('email' => $this->session->userdata('email')))->row_array();
        $data['judul'] = 'Dashboard';
        
        $this->load->view('template/header');
        $this->load->view('template/topbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('Admin/index', $data);
        $this->load->view('template/footer');
    }
}
