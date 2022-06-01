<?php

class User_model extends CI_Model
{

  public function getUserById($id)
  {
      return $this->db->get_where('tb_user', array('id_user' => $id) )->row_array();
  }
    public function getUser()
    {
        return $this->db->get('tb_user')->result_array();
    }
    public function addUser($data){
      return $this->db->insert('tb_user', $data);
    }
    public function delete($id){
      $this->db->where('id_user', $id);
      return $this->db->delete('tb_user');
    }
}
