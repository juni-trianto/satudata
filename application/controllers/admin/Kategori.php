<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
            $data['kategori']       = $this->input->post('kategori', true);
            $data['slug_kategori']  =  url_title($data['kategori'] . '-'.date('ymdhis') , 'dash', true);
            $data['user_id']      =$this->input->cookie('user_id',true);
            $data['created_at']   = date('Y-m-d H:i:s');
            $this->db->insert('m_kategori_indikator', $data);
            $this->session->set_flashdata('success','Data Kategori berhasil ditambahkan');

			redirect('admin/kategori');
        }else{
            $page_data['page_title']  = 'Data Kategori Indikator';
            $page_data['page_folder'] = 'kategori';
            $page_data['page_name']	  = 'index_kategori';
            $this->load->view('backend/index', $page_data);
        }
	}

    public function update()
    { 
        $data['kategori']       = $this->input->post('kategori', true);
        $data['slug_kategori']  =  url_title($data['kategori'] . '-'.date('ymdhis') , 'dash', true);
        $data['user_id']      =$this->input->cookie('user_id',true);
        $data['updated_at']   = date('Y-m-d H:i:s');

        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('m_kategori_indikator', $data);
        $this->session->set_flashdata('success','Data Kategori berhasil diupdate');

        redirect('admin/kategori');
    }

    public function delete($id)
    {
        $this->db->where('uuid', $id);
        $this->db->update('m_kategori_indikator', ['deleted_at' =>  date('Y-m-d H:i:s')]);
        $this->session->set_flashdata('success','Data Kategori berhasil dihapus');

        redirect('admin/kategori');

    }


}
