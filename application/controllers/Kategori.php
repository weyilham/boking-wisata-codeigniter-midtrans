<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
        is_logged_in();
    }

    public function index(){
      $data['judul'] = 'Daftar Kategori';
      $data['kategori'] = $this->kategori_model->getKategori();

      $this->load->view('template/header');
      $this->load->view('template/topbar');
      $this->load->view('template/sidebar');
      $this->load->view('kategori/index', $data);
      $this->load->view('template/footer');
    }

    public function tambah(){
      $data['judul'] = 'Tambah Kategori';

      $this->form_validation->set_rules('nm_kategori', 'Nama Kategori', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      if ($this->form_validation->run() == false) {
        // code...
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('kategori/tambah', $data);
        $this->load->view('template/footer');
      }else {
        $data = [
          'nm_kategori' => $this->input->post('nm_kategori')
        ];

        $this->kategori_model->tambah($data);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          Data Berhasil ditambahkan!
        </div>
        ');
        redirect('kategori/index');

      }
    }

    public function delete($id = null){

      $this->db->where('id_kategori', $id);
      $this->db->delete('tb_kategori');

      $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
        Data Berhasil dihapus!
      </div>
      ');
      redirect('kategori/index');
    }

    public function edit($id = null){
      $data['judul'] = 'Edit Kategori';
      $data['kategori'] = $this->kategori_model->getKategoriById($id);

      // var_dump($data['kategori']);die;
      $this->form_validation->set_rules('nm_kategori', 'Nama Kategori', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      if ($this->form_validation->run() == false) {
        // code...
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('kategori/edit', $data);
        $this->load->view('template/footer');
      }else {

        $id = $this->input->post('id_kategori');
        $nm_kategori = $this->input->post('nm_kategori');



        $this->kategori_model->edit($id, $nm_kategori);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          Data Berhasil ditambahkan!
        </div>
        ');
        redirect('kategori/index');

      }
    }


}
