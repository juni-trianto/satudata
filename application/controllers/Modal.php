<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {
	
	public function index()
	{
		
	}
	
	function popup($page_folder = '', $page_name = '' , $param2 = '' , $param3 = '')
	{
        $this->load->helper(['cookie']);
		$page_data['user_id']	      = $this->input->cookie('user_id',true);
		if($page_data['user_id'] != null)
		{

			$this->load->helper('form');
			$page_data['param2']		=	$param2;
			$page_data['param3']		=	$param3;
			$this->load->view( 'backend/pages/'.$page_folder.'/'.$page_name.'.php' ,$page_data);
		}else{
			redirect('auth');
		}

	
	}
	

}