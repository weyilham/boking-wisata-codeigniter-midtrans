<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index(){
      $data['judul'] = 'Laporan Penjualan';

      $this->load->view('template/header');
      $this->load->view('template/topbar', $data);
      $this->load->view('template/sidebar');
      $this->load->view('laporan', $data);
      $this->load->view('template/footer');
    }
    public function cetakLaporan(){
      $this->load->library('dompdf_gen');
      //$data['pesanan'] = $this->db->where('id_pesanan', $id_pesanan)->limit(1)->get('tb_pesanan')->row();

      $bulan = $this->input->post('bulan');
      $tahun = $this->input->post('tahun');

      $data['query'] = $this->db->query("SELECT `tb_pesanan`.`order_id`, `tb_pelanggan`.`nama_pelanggan`, `tb_pesanan`.`tgl_pesan`,
                       `tb_pesanan`.`bank`, `tb_pesanan`.`total_bayar`
                FROM tb_pesanan
                JOIN tb_pelanggan ON `tb_pesanan`.`id_pelanggan` = `tb_pelanggan`.`id_pelanggan`
                WHERE year(tgl_pesan) = $tahun AND MONTH(tgl_pesan) = $bulan")->result_array();

              // var_dump($data['query']);die;
              $data['bulan'] = $bulan;
              $data['tahun'] = $tahun;
              $this->load->view('laporanpenjualan', $data);
              $paper_size = 'A4';
              $orientation = 'potrait';
              $html = $this->output->get_output();

              $this->dompdf->set_paper($paper_size, $orientation);

              $this->dompdf->load_html($html);
              $this->dompdf->render();
              $this->dompdf->stream("laporanpenjualan.pdf", array('Attachment' => 1));

    }

  }
