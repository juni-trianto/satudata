<?php

class Hak_akses_model extends Ci_Model{

    public function cek($user_id, $param2)
    {
           $sub_menu_id = $this->db->select('id')->get_where('m_menu',['controller' => $param2 ])->row_array();
            $cek = $this->db->select('id')->get_where('user_menu',['user_id' => $user_id, 'menu_id' =>$sub_menu_id['id']])->num_rows();
            if($cek > 0)
            {
              return 1;
            }else{
            //  return 0;
             redirect('admin/dashboard');

            }
    }

 
}