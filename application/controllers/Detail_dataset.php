<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_dataset extends CI_Controller {

	public function index()
	{
        $page_data['page_title'] = 'Satudata Kabupaten Pemalang';
        $page_data['page_folder'] = 'dataset';
        $page_data['page_name'] = 'detail_dataset';
		$this->load->view('frontend/index', $page_data);
	}
}
