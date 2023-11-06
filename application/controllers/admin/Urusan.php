<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urusan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper(['cookie']);
        $this->load->library(['uuid']);
		$this->akses->cek($this->input->cookie('user_id',true), $this->uri->segment(2));

	}

	public function index()
	{
        if(isset($_POST['submit']))
        {
            $data['uuid']         = $this->uuid->v4(); 
            $data['urusan']       = $this->input->post('urusan', true);
            $data['slug_urusan']  =  url_title($data['urusan'] . '-'.date('ymdhis') , 'dash', true);
            $data['user_id']      =$this->input->cookie('user_id',true);
            $data['created_at']   = date('Y-m-d H:i:s');
            $this->db->insert('m_urusan', $data);
            $this->session->set_flashdata('success','Data urusan berhasil ditambahkan');

			redirect('admin/urusan');
        }else{
            $page_data['page_title']  = 'Data Urusan';
            $page_data['page_folder'] = 'urusan';
            $page_data['page_name']	  = 'index_urusan';
            $this->load->view('backend/index', $page_data);
        }
	}

    public function update()
    { 
        $data['urusan']       = $this->input->post('urusan', true);
        $data['slug_urusan']  =  url_title($data['urusan'] . '-'.date('ymdhis') , 'dash', true);
        $data['user_id']      =$this->input->cookie('user_id',true);
        $data['updated_at']   = date('Y-m-d H:i:s');

        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('m_urusan', $data);
        $this->session->set_flashdata('success','Data urusan berhasil diupdate');

        redirect('admin/urusan');
    }

    public function delete($id)
    {
        $this->db->where('uuid', $id);
        $this->db->update('m_urusan', ['deleted_at' =>  date('Y-m-d H:i:s')]);
        $this->session->set_flashdata('success','Data urusan berhasil dihapus');

        redirect('admin/urusan');

    }


}
