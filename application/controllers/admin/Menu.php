<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper(['cookie']);
		// $this->akses->cek($this->input->cookie('user_id',true), $this->uri->segment(2));


	}
	public function index()
	{
		$page_data['user_id']	      = $this->input->cookie('user_id',true);
		if(isset($_POST['submit']))
		{
			$insertdata['menu']		  = $this->input->post('menu', true);
			$insertdata['controller'] = $this->input->post('controller', true);
			$insertdata['link']       = $this->input->post('link', true);
			$insertdata['icon'] 	  = $this->input->post('icon', true);
			$insertdata['jenis']      = $this->input->post('jenis', true);
			$insertdata['created_at'] = date('Y-m-d H:i:s');
			$this->db->insert('m_menu',$insertdata);

			$this->session->set_flashdata('success','Menu berhasil ditambahkan');

			redirect('admin/menu');

		}else{
   		$page_data['page_title']  = 'Manajemen Menu';
        $page_data['page_folder'] = 'menu';
		$page_data['page_name']	  = 'index_menu';
		$this->load->view('backend/index', $page_data);
		}
     
	}

	public function update()
	{
		$page_data['user_id']	      = $this->input->cookie('user_id',true);
		if(isset($_POST['submit']))
		{
			$insertdata['menu']		  = $this->input->post('menu', true);
			$insertdata['controller'] = $this->input->post('controller', true);
			$insertdata['link']       = $this->input->post('link', true);
			$insertdata['icon'] 	  = $this->input->post('icon', true);
			$insertdata['jenis']      = $this->input->post('jenis', true);
			$insertdata['updated_at'] = date('Y-m-d H:i:s');

			$this->db->where('id', $this->input->post('id', true));
			$this->db->update('m_menu',$insertdata);

			$this->session->set_flashdata('success','Menu berhasil diupdate');

			redirect('admin/menu');

		}else{
   		echo 'failed';
		}
	}


	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->update('m_menu',['deleted_at' => date('Y-m-d H:i:s') ]);
			$this->session->set_flashdata('success','Menu berhasil diHapus');

        redirect('admin/menu');

	}
}
