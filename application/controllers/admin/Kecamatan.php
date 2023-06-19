<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper(['cookie']);
		if($this->input->cookie('user_id',true) == null)
		{
			$this->session->set_flashdata('error','Hai kawan. Login Dulu yah');
			redirect("/");
		}

	}

	public function index()
	{
		$page_data['user_id']	      = $this->input->cookie('user_id',true);

		// echo $page_data['user_id'];
		// die;
        $page_data['page_title']  = 'Kecamatan';
        $page_data['page_folder'] = 'kecamatan';
		$page_data['page_name']	  = 'index_kecamatan';
		$this->load->view('backend/index', $page_data);
	}
}
