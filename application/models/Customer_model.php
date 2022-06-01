<?php

class Customer_model extends CI_Model
{

  public function getCustomer(){
      return $this->db->get('tb_pelanggan')->result_array();
  }

  public function getCustomerById($id){
      return $this->db->get_where('tb_pelanggan', array('id_pelanggan' => $id ))->row_array();
  }

}
