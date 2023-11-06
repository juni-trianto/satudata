<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        $this->load->helper(['cookie']);
		// $this->akses->cek($this->input->cookie('user_id',true), $this->uri->segment(2));


	}
	public function index()
	{	
        if(isset($_POST['submit']))
        {
           $password =   password_hash($this->input->post('password', true), PASSWORD_DEFAULT);

           $insertdata['kode_organisasi'] = $this->input->post('kode_organisasi', true);
           $insertdata['nama_lengkap'] = $this->input->post('nama_lengkap', true);
           $insertdata['no_hp'] = $this->input->post('no_hp', true);
           $insertdata['email'] = $this->input->post('email', true);
           $insertdata['username'] = $this->input->post('username', true);
           $insertdata['password'] = $password;
           $insertdata['active'] = $this->input->post('active', true);
           $insertdata['created_at'] = date('Y-m-d H:i:s');
           

           	$this->db->insert('users',$insertdata);

			$this->session->set_flashdata('success','User berhasil ditambahkan');
			redirect('admin/user');
        }else{
              $page_data['page_title']  = 'Manajemen User';
                $page_data['page_folder'] = 'user';
                $page_data['page_name']	  = 'index_user';
                $this->load->view('backend/index', $page_data);
        }
      
	}


    public function update()
    {
          if(isset($_POST['submit']))
        {
            if($this->input->post('password', true) != null)
            {
                $password =   password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
                $insertdata['password'] = $password;
            }

           $insertdata['kode_organisasi'] = $this->input->post('kode_organisasi', true);
           $insertdata['nama_lengkap'] = $this->input->post('nama_lengkap', true);
           $insertdata['no_hp'] = $this->input->post('no_hp', true);
           $insertdata['email'] = $this->input->post('email', true);
           $insertdata['username'] = $this->input->post('username', true);
           $insertdata['active'] = $this->input->post('active', true);
           $insertdata['updated_at'] = date('Y-m-d H:i:s');

           $this->db->where('id', $this->input->post('id', true));
           	$this->db->update('users',$insertdata);

			$this->session->set_flashdata('success','User berhasil diupdate');

			redirect('admin/user');
        }else{
             echo'failed';
        }
    }



     public function menu()
    {
        $user_id = $this->input->post('id', true);
        $this->db->where('user_id', $user_id);
        $this->db->delete('user_menu');
        foreach($this->input->post('menu_id', true) as $menu)
        {
            $insertdata['user_id'] = $user_id;
            $insertdata['menu_id'] = $menu;
            $this->db->insert('user_menu', $insertdata);
        }

         $this->session->set_flashdata('success', 'Hak Akses menu berhasil di ubah!');
            redirect('admin/user');
    }

}
