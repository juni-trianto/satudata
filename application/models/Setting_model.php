<?php

class Setting_model extends Ci_Model{

    public function get_name($key)
    {
       return $this->db->select('value')->get_where('setting',['key' => $key])->row()->value;
    }

  
}