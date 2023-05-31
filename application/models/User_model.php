<?php

class User_model extends Ci_Model{

    public function get($user_id)
    {
        return $this->db->get_where('users',['id' => $user_id])->row();
    }

  
}