<?php

class Paket_model extends CI_Model
{

  public function getPaket(){
    $this->db->select('*');
    $this->db->from('tb_detail_kategori');
    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_detail_kategori.id_kategori');
    $query = $this->db->get();

    return $query->result_array();
  }

  public function getPaket1(){
    $this->db->select('*');
    $this->db->from('tb_detail_kategori');
    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_detail_kategori.id_kategori');
    $this->db->where('tb_detail_kategori.id_kategori', 1);
    $query = $this->db->get();

    return $query->result_array();
  }

  public function getPaket2(){
    $this->db->select('*');
    $this->db->from('tb_detail_kategori');
    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_detail_kategori.id_kategori');
    $this->db->where('tb_detail_kategori.id_kategori', 2);
    $query = $this->db->get();

    return $query->result_array();
  }

  public function getPaketById($id){
    $this->db->select('*');
    $this->db->from('tb_detail_kategori');
    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_detail_kategori.id_kategori');
    $this->db->where('tb_detail_kategori.id_detail_kategori', $id);
    $query = $this->db->get();

    return $query->row_array();
  }

  public function find($id){
    $this->db->select('*');
    $this->db->from('tb_detail_kategori');
    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_detail_kategori.id_kategori');
    $this->db->where('tb_detail_kategori.id_detail_kategori', $id);
    $query = $this->db->get();

    return $query->row();
  }

  public function tambahPaket($data){
    return $this->db->insert('tb_detail_kategori', $data);
  }

  public function delete($id){
    $this->db->where('id_detail_kategori', $id);
    return $this->db->delete('tb_detail_kategori');
  }

}
