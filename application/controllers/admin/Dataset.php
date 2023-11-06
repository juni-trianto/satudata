<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataset extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper(['cookie']);
        $this->load->library(['uuid']);
		$this->akses->cek($this->input->cookie('user_id',true), $this->uri->segment(2));

	}

	public function index()
	{
        $page_data['page_title']  = 'Dataset Organisasi';
        $page_data['page_folder'] = 'dataset';
        $page_data['page_name']	  = 'index_dataset';
        $this->load->view('backend/index', $page_data);
	}


}
