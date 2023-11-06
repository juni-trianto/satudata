<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator extends CI_Controller {

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
			$data['uuid']                  =$this->uuid->v4(); 
            $data['kategori_indikator_id'] = $this->input->post('kategori_indikator_id', true);
            $data['urusan_id']             = $this->input->post('urusan_id', true);
            $data['kode_organisasi']       = $this->input->post('kode_organisasi', true);
            $data['indikator']             = $this->input->post('indikator', true);
            $data['satuan']                = $this->input->post('satuan', true);
            $data['kode_urusan']           = $this->input->post('kode_urusan', true);
            $data['user_id']               = $this->input->cookie('user_id',true);
            $data['tampil']                = 'Tidak';
            $data['jumlah_data']           = 0;
            $data['created_at']            = date('Y-m-d H:i:s') ;
            $data['updated_at']            = date('Y-m-d H:i:s') ;
            $this->db->insert('m_indikator', $data);

            // METADATA
            $indikator_id                      = $this->db->select('id')->get_where('m_indikator',['uuid' => $data['uuid'] ])->row_array();
            $organisasi                        = $this->db->select('no_telp, email')->get_where('m_organisasi',['kode_organisasi' => $data['kode_organisasi'] ])->row_array();
            $metadata['indikator_id']          = $indikator_id['id'];
            $metadata['dataset_dibuat']        = $data['created_at'];
            $metadata['dataset_diperbarui']    = $data['updated_at'];
            $metadata['kategori_indikator_id'] = $data['kategori_indikator_id'];
            $metadata['urusan_id']             = $data['urusan_id'];
            $metadata['kode_organisasi']       = $data['kode_organisasi'];
            $metadata['kontak_produsen']       = $organisasi['no_telp'];
            $metadata['email_produsen']        = $organisasi['email'];
            $metadata['created_at']            = date('Y-m-d H:i:s');
            $metadata['updated_at']            = date('Y-m-d H:i:s');
            $this->db->insert('m_metadata', $metadata);
            $this->session->set_flashdata('success','Indikator berhasil ditambahkan');

			redirect('admin/indikator/');   

		}else{

			$page_data['organisasi']  =$this->user->get_organisasi($this->input->cookie('user_id',true));
			$page_data['page_title']  = 'Indikator Organisasi '.$page_data['organisasi']['organisasi'] ;
			$page_data['page_folder'] = 'indikator';
			$page_data['page_name']	  = 'index_indikator';
			$page_data['indikator']   = $this->db->select('z.*, a.kategori, b.urusan')->join('m_kategori_indikator a','a.id=z.kategori_indikator_id')->join('m_urusan b', 'b.id=z.urusan_id')->get_where('m_indikator z',['z.deleted_at' => null, 'z.kode_organisasi' => $page_data['organisasi']['kode_organisasi'] ]);
			$this->load->view('backend/index', $page_data);
		}

	}
	
	public function indikator_update()
    {
        if(isset($_POST['submit']))
        {
            $data['kategori_indikator_id'] = $this->input->post('kategori_indikator_id', true);
            $data['urusan_id']             = $this->input->post('urusan_id', true);
            $data['kode_organisasi']       = $this->input->post('kode_organisasi', true);
            $data['indikator']             = $this->input->post('indikator', true);
            $data['satuan']                = $this->input->post('satuan', true);
            $data['kode_urusan']           = $this->input->post('kode_urusan', true);
            $data['user_id']               = $this->input->cookie('user_id',true);
            $data['tampil']                = 'Tidak';
            $data['jumlah_data']           = 0;
            $data['updated_at']            = date('Y-m-d H:i:s') ;

            $this->db->where('id', $this->input->post('id', true));
            $this->db->update('m_indikator', $data);

            // METADATA
            $organisasi                        = $this->db->select('no_telp, email')->get_where('m_organisasi',['kode_organisasi' => $data['kode_organisasi'] ])->row_array();
            $metadata['dataset_diperbarui']    = $data['updated_at'];
            $metadata['kategori_indikator_id'] = $data['kategori_indikator_id'];
            $metadata['urusan_id']             = $data['urusan_id'];
            $metadata['kode_organisasi']       = $data['kode_organisasi'];
            $metadata['kontak_produsen']       = $organisasi['no_telp'];
            $metadata['email_produsen']        = $organisasi['email'];
            $metadata['updated_at']            = date('Y-m-d H:i:s');

            $this->db->where('indikator_id', $this->input->post('id', true) );
            $this->db->update('m_metadata', $metadata);
            $this->session->set_flashdata('success','Indikator berhasil diupdate');

			redirect('admin/indikator/');   

        }
    }

	public function indikator_delete($uuid)
	{
		$organisasi                        = $this->db->select('kode_organisasi')->get_where('m_indikator',['uuid' => $uuid ])->row_array();
        if($organisasi != null)
        {
            $this->db->where('uuid', $uuid);
            $this->db->update('m_indikator', ['deleted_at' =>  date('Y-m-d H:i:s')]);
            $this->session->set_flashdata('success','Indikator berhasil dihapus');
    
            redirect('admin/indikator/');
        }
	}


}
