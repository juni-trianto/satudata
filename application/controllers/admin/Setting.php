<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->helper(['form', 'cookie']);
		$this->akses->cek($this->input->cookie('user_id',true), $this->uri->segment(2));

	}
	public function index()
	{	
    

        if(isset($_POST['submit']))
        {
            foreach($this->db->get('setting')->result_array() as $row): 
                $this->db->where('id', $row['id']);
                $this->db->update('setting', ['value' => $this->input->post($row['key']) ]);
            endforeach;
              $this->session->set_flashdata('success', 'data berhasil diupdate');
            redirect('admin/setting');

        }else{
            $page_data['page_title']  = 'Setting Aplikasi';
            $page_data['page_folder'] = 'setting';
            $page_data['page_name']	  = 'index_setting';
            $page_data['page_sub_name']	  = 'setting';
            $this->load->view('backend/index', $page_data);
        }

    }

    public function setting_add()
    {
        if(isset($_POST['submit']))
        {
            $data['key']   = $this->input->post('key', true);
            $data['value'] = $this->input->post('value', true);

            $this->db->insert('setting', $data);
            $this->session->set_flashdata('success', 'data berhasil disimpan');
            redirect('admin/setting');
        }
    }


    public function gallery_add()
    {
         if(isset($_POST['submit']))
        {
            $config['upload_path']          = './assets/gallery/';
            $config['allowed_types']        = 'jpg|jpeg|png|svg';
            $config['max_size']             = 20000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = $this->upload->display_errors();

                var_dump($error);
                // $this->session->set_flashdata('error', $error);
                // redirect('admin/gallery');
            } else {
                $namafile = $this->upload->data()['file_name'];
                $arr_file         = explode('.', $namafile);
                $extension        = end($arr_file);

                $update_data['gallery'] = $namafile;
                $this->db->insert('gallery', $update_data);
            $this->session->set_flashdata('success', 'data berhasil disimpan');
                redirect('admin/setting/gallery');

            }
        }
    }

    public function gallery()
	{	
    
        $page_data['page_title']  = 'Gallery';
        $page_data['page_folder'] = 'setting';
        $page_data['page_name']	  = 'index_setting';
        $page_data['page_sub_name']	  = 'gallery';
        $this->load->view('backend/index', $page_data);
    }

    
}
