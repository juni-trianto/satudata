<?php

class User_model extends Ci_Model{

    public function get($user_id)
    {
        return $this->db->get_where('users',['id' => $user_id])->row();
    }

    public function get_organisasi($user_id)
    {
        return $this->db->join('m_organisasi a','a.kode_organisasi=z.kode_organisasi')->get_where('users z',['z.id' => $user_id])->row_array();
    }

  
}   