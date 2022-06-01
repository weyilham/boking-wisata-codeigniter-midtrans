<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('paket_model');
        $this->load->model('kategori_model');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Data Paket';

        $data['paket'] = $this->paket_model->getPaket();

        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('paket/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){
      $data['judul'] = 'Tambah Paket';

      $data['kategori'] = $this->db->get('tb_kategori')->result_array();

      // var_dump($_FILES);

      $this->form_validation->set_rules('jenis_kategori', 'Nama Paket', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('harga', 'Harga', 'required|trim', ['required' => 'Data tidak boleh kosong']);

      if ($this->form_validation->run() == false) {
        // code...
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('paket/tambah', $data);
        $this->load->view('template/footer');
      }else {

        // var_dump($_POST);
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
          // code...
          $gambar = $this->input->post('gambar');

        } else {
          $config['upload_path'] = './assets/img/paket/';
          $config['allowed_types'] = 'jpg|jpeg|png';
          $config['max_size'] = '2048';

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('gambar')) {
            echo "Gambar gagal diupload";

          } else {


            $gambar = $this->upload->data('file_name');
          }
        }

        $data = [
          'id_kategori' => $this->input->post('kategori'),
          'jenis_kategori' => $this->input->post('jenis_kategori'),
          'fasilitas' => $this->input->post('fasilitas'),
          'kapasitas' => $this->input->post('kapasitas'),
          'harga' => $this->input->post('harga'),
          'gambar' => $gambar
        ];

        $this->paket_model->tambahPaket($data);

        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
           Data Berhasil ditambahkan
        </div>
        ');
        redirect('paket/index');

      }
    }

    public function edit($id = null){
      $data['judul'] = 'Edit Paket';

      $data['kategori'] = $this->kategori_model->getKategori();
      $data['paket'] = $this->paket_model->getPaketById($id);



      // var_dump($data['paket']);die;

      $this->form_validation->set_rules('jenis_kategori', 'Nama Paket', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|trim', ['required' => 'Data tidak boleh kosong']);
      $this->form_validation->set_rules('harga', 'Harga', 'required|trim', ['required' => 'Data tidak boleh kosong']);

      if ($this->form_validation->run() == false) {
        // code...
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('paket/edit', $data);
        $this->load->view('template/footer');
      }else {

        $id = $this->input->post('id_detail_kategori');
        $id_kategori = $this->input->post('kategori');
        $jenis_paket = $this->input->post('jenis_kategori');
        $fasilitas = $this->input->post('fasilitas');
        $kapasitas = $this->input->post('kapasitas');
        $harga = $this->input->post('harga');


        //cek jika ada gambar yang diupload
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size']     = '2048';
          $config['upload_path'] = './assets/img/paket/';

          $this->load->library('upload', $config);

          if ( $this->upload->do_upload('gambar') ) {

            $old_image = $data['paket']['gambar'];

            if ($old_image != 'default.jpg') {
              unlink(FCPATH . '/assets/img/paket/' . $old_image);
            }

            $new_image = $this->upload->data('file_name');
            $this->db->set('gambar', $new_image);

          }else {
              echo $this->upload->display_errors();
          }
        }
        $this->db->set('harga', $harga);
        $this->db->set('kapasitas', $kapasitas);
        $this->db->set('fasilitas', $fasilitas);
        $this->db->set('jenis_kategori', $jenis_paket);
        $this->db->set('id_kategori', $id_kategori);
        $this->db->where('id_detail_kategori', $id);
        $this->db->update('tb_detail_kategori');

        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
          Data Berhasil Diubah!
        </div>
        ');
        redirect('paket/index');




      }
    }

    public function delete($id = null){
      $this->paket_model->delete($id);


      $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
         Data Berhasil dihapus
      </div>
      ');
      redirect('paket/index');
    }


  }
