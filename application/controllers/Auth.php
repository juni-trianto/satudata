<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
      redirect('auth/login');
	}
    
    public function login()
	{
        $this->load->helper(['form', 'cookie']);
        $this->load->library('form_validation');
        delete_cookie('user_id');
        if(isset($_POST['submit']))
        {
            $username = htmlspecialchars($this->input->post('username', true));
            $password = htmlspecialchars($this->input->post('password', true));

            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');

            if ($this->form_validation->run() != FALSE)
            {
                $get_user = $this->db->get_where('users',['username' => $username])->row_array();
                if($get_user['id'] != null)
                {
                     $verify = password_verify($password, $get_user['password']);
                    if($verify)
                    {
                        if($get_user['active'] == 1)
                        {
                            $this->db->where('id', $get_user['id']);
                            $this->db->update('users', ['last_login' => date('Y-m-d H:i:s')] );

                              $cookie= array(
                                'name'   => 'user_id',
                                'value'  => $get_user['id'],
                                'expire' => '360000',
                            );
                            $this->input->set_cookie($cookie);

                            redirect('admin/dashboard');

                        }else{
                          $this->session->set_flashdata('error','Akun anda tidak aktif!');
                          redirect('auth/login');
                        }

                    }else{
                         $this->session->set_flashdata('error','Password yang anda masukan salah!');
                         redirect('auth/login');
                    }

                }else{
                    $this->session->set_flashdata('error','username tidak ditemukan!');
                    redirect('auth/login');

                }


            }else{
              $page_data['page_title']    = 'Login';
              $this->load->view('auth/login', $page_data);
            }

        }else{
            $page_data['page_title']    = 'Login';
            $this->load->view('auth/login', $page_data);
        }

      
	}


    public function logout()
    {
        $this->load->helper(['form', 'cookie']);

        delete_cookie('user_id');
         redirect('auth/login');

    }
}
