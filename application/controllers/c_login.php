<?php
	class C_login extends CI_Controller {
		function __construct(){
			parent::__construct();
        	$this->load->model('m_login');
		}
		
		public function halaman_login()
		{
            $this->load->view('administrator/v_login');	
		}


		public function login()
		{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $temp_account = $this->m_login->cek_user($username, $password)->row();
        
        // check account
        $num_account = count($temp_account);
        if ($num_account > 0){
                $array_items = array(
                'id_administrator' => $temp_account->id_administrator,
                'username' => $temp_account->username,
                'logged_in' => true
                );
                
                $this->session->set_userdata($array_items);
                
            	redirect('c_utama/halaman_utama_administrator');
            }
        else {
            $this->session->set_flashdata('notification', 'Username atau Password salah');
            redirect('c_login/halaman_login');
        }
        }
    
	    public function logout(){
	        $this->session->sess_destroy();
	        redirect('c_login/halaman_login');     
	    }
	}