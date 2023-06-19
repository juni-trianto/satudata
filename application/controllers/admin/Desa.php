<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper(['cookie']);
		$this->akses->cek($this->input->cookie('user_id',true), $this->uri->segment(2));

	}

	public function index()
	{
		$page_data['user_id']	      = $this->input->cookie('user_id',true);

		// echo $page_data['user_id'];
		// die;
        $page_data['page_title']  = 'Desa';
        $page_data['page_folder'] = 'desa';
		$page_data['page_name']	  = 'index_desa';
		$this->load->view('backend/index', $page_data);
	}
}
