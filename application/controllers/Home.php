<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $page_data['page_title'] = 'Lowongan Kerja Jawa Tengah';
        $page_data['page_folder'] = 'home';
        $page_data['page_name'] = 'index_home';
		$this->load->view('frontend/index', $page_data);
	}
}
