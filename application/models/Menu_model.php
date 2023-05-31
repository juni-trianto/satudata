<?php

class Menu_model extends Ci_Model{

    public function get_menu($user_id)
    {
        $query = $this->db->select('a.*')
                          ->join('m_menu a', 'a.id=z.menu_id')
                          ->get_where('user_menu z',['z.user_id' => $user_id])->result_array();
        return $query;
    }

  
}