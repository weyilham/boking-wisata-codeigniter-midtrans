<?php

class Kategori_model extends CI_Model
{

  public function getKategori(){
      return $this->db->get('tb_kategori')->result_array();
  }

  public function getKategoriById($id){
    return $this->db->get_where('tb_kategori', array('id_kategori' => $id ))->row_array();

  }

  public function tambah($data){
    return $this->db->insert('tb_kategori', $data);
  }

  public function edit($id, $nm_kategori){
    $this->db->set('nm_kategori', $nm_kategori);
    $this->db->where('id_kategori', $id);
    $this->db->update('tb_kategori');
  }



}
