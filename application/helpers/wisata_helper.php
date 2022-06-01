<?php

function is_logged_in(){

  $ci = get_instance();
  if (!$ci->session->userdata('email')) {
    redirect('home/login');
  }else {
    $role = $ci->session->userdata('role');
            //untuk mengambil nama url di awal kontroler
    // $menu = $ci->uri->segment(1);
    //
    //             //tampilkan data user menu dimana menu nya = $menu
    // $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
    // $menu_id = $queryMenu['id'];

    $userAccess = $ci->db->get_where('tb_pelanggan', ['role' => $role]);

    if ($userAccess->num_rows() > 1) {
      redirect('home/blocked');
    }


  }
}





 ?>
