<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rsrp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper(['cookie']);
          $this->load->library('uuid');
		$this->akses->cek($this->input->cookie('user_id',true), $this->uri->segment(2));


	}
	public function index()
	{
		$page_data['user_id']	      = $this->input->cookie('user_id',true);

		if(isset($_POST['submit']))
		{
            $insertdata['uuid']             = $this->uuid->v4();
			$insertdata['start']      = $this->input->post('start', true);
			$insertdata['finish']     = $this->input->post('finish', true);
			$insertdata['color']      = $this->input->post('color', true);
			$insertdata['information']= $this->input->post('information', true);
			$insertdata['created_at'] = date('Y-m-d H:i:s');
			$this->db->insert('m_rsrp',$insertdata);

			$this->session->set_flashdata('success','Menu berhasil ditambahkan');

			redirect('admin/rsrp');

		}else{
   		$page_data['page_title']  = 'RSRP';
        $page_data['page_folder'] = 'rsrp';
		$page_data['page_name']	  = 'index_rsrp';
		$this->load->view('backend/index', $page_data);
		}
     
	}

	public function update()
	{
		$page_data['user_id']	      = $this->input->cookie('user_id',true);
		if(isset($_POST['submit']))
		{
			$insertdata['start']      = $this->input->post('start', true);
			$insertdata['finish']     = $this->input->post('finish', true);
			$insertdata['color']      = $this->input->post('color', true);
			$insertdata['information']= $this->input->post('information', true);
			$insertdata['updated_at'] = date('Y-m-d H:i:s');

			$this->db->where('id', $this->input->post('id', true));
			$this->db->update('m_rsrp',$insertdata);

			$this->session->set_flashdata('success','Menu berhasil diupdate');

			redirect('admin/rsrp');

		}else{
   		echo 'failed';
		}
	}


	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->update('m_rsrp',['deleted_at' => date('Y-m-d H:i:s') ]);
			$this->session->set_flashdata('success','Menu berhasil diHapus');

        redirect('admin/rsrp');

	}
}
