<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->user_model->getUser();
        $data['judul'] = 'Daftar User';

        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {

      $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tb_user.email]',
      ['is_unique' => 'Email ini sudah terdaftar!']);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
        'matches' => 'Password Tidak Cokok!',
        'min_length' => 'Password terlalu pendek!'
      ]);
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]', [
        'matches' => 'Password Tidak Cokok!',
        'min_length' => 'Password terlalu pendek!'
      ]);

      if ($this->form_validation->run() == false) {
        // code...
        $data['user'] = $this->user_model->getUser();
        $data['judul'] = 'Tambah User';

        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('user/tambah', $data);
        $this->load->view('template/footer');
      }else {
        $data = [
          'nama' => $this->input->post('nama'),
          'email' => $this->input->post('email'),
          'password' => $this->input->post('password1'),
          'gambar' => 'default.jpg',
          'role' => 1
        ];

        $this->user_model->addUser($data);

        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          Data <strong>Berhasil!</strong>ditambahkan
        </div>
        ');

        redirect('user/index');

      }
    }
    public function edit($id = NULL)
    {
        $data['user'] = $this->user_model->getUserById($id);
        $data['judul'] = 'Edit User';



        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Data tidak boleh kosong']);
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required|trim', ['required' => 'Data tidak boleh kosong']);

        if ($this->form_validation->run() == false) {
          // code...
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('user/edit', $data);
        $this->load->view('template/footer');
      }else {
        // code...

        $nama = $this->input->post('nama');
        $id_user = $this->input->post('id_user');



        //cek jika ada gambar yang diupload
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
          // code...
          $gambar = $this->input->post('gambar');

        } else {
          $config['upload_path'] = './assets/img/';
          $config['allowed_types'] = 'jpg|jpeg|png';
          $config['max_size'] = '2048';

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('gambar')) {
            echo "Gambar gagal diupload";

          } else {
            $old_image = $data['user']['gambar'];

            if ($old_image != 'default.jpg') {
              unlink(FCPATH . '/assets/img/profile/' . $old_image);
            }

            $gambar = $this->upload->data('file_name');
          }
        }

        $this->db->set('gambar', $gambar);
        $this->db->set('nama', $nama);
        $this->db->where('id_user', $id_user);
        $this->db->update('tb_user');

        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          Your profile has been updated!
        </div>
        ');
        redirect('user/index');


      }
    }

    public function delete($id = NULL){
      $this->user_model->delete($id);

      $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
        Data Berhasil Dihapus!
      </div>
      ');
      redirect('user/index');

    }
}
