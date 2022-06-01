<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panel_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');


    }

    public function index(){


      $this->load->view('panel_admin/login');

    }

    public function login(){
      if ($this->session->userdata('email')) {
        redirect('user');
      }
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == false ) {
        $data['judul'] = 'Login';

        $this->load->view('panel_admin/index');
        }else {
            $this->_login();
          }
    }

    private function _login(){
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      //lakukan query menggunakan query builder CI
      $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

      //jika usernya ada
      if ($user) {
          // cek password nya
          if ( $password == $user['password'] ) {
            $data = [
              'email' => $user['email'],
              'role' => $user['role']
            ];

            $this->session->set_userdata($data);
            if ( $user['role'] == 1 ) {

              redirect('admin/index');
            }elseif ( $user['role'] == 3 ){
              redirect('admin/index');
            }

          }else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">
              Password anda Salah!</div>');
              redirect('panel_admin');
          }

      }else {
        $this->session->set_flashdata('message', '
        <div class="alert alert-danger" role="alert">
          Email Belum Terdaftar!</div>');
          redirect('panel_admin');
      }

    }

    public function edit_password(){

      $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['judul'] = 'Edit Password';

      $this->form_validation->set_rules('password_lama', 'Password lama', 'required|trim');
      $this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|min_length[3]|matches[password2]');
      $this->form_validation->set_rules('password2', 'Konfirmasi Password Baru', 'required|trim|min_length[3]|matches[password1]');
      // var_dump($_POST);die;
      if ($this->form_validation->run() == false) {
        // code...
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('panel_admin/edit_password', $data);
        $this->load->view('template/footer');
      }else {
        $current_passowrd = $this->input->post('password_lama');
        $new_password = $this->input->post('password1');

        if ($current_passowrd !== $data['user']['password']) {
          $this->session->set_flashdata('message', '
          <div class="alert alert-danger" role="alert">
            Password baru Tidak boleh sama!
          </div>
          ');
          redirect('panel_admin/edit_password');
        }else {
          if ($current_passowrd == $new_password) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">
              Password baru tidak boleh sama dengan password lama!
            </div>
            ');
            redirect('panel_admin/edit_password');
          }else {
            //password sudah ok


            $this->db->set('password', $new_password);
            $this->db->where('email', $this->session->userdata('email'));
            $this->db->update('tb_user');

            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
              Password berhasil diubah!
            </div>
            ');
            redirect('panel_admin/edit_password');
          }
        }
      }
    }


  }
