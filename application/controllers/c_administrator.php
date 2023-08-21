<?php
	class C_administrator extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model("m_administrator");
		}
		public function data_administrator(){
			$data['query'] = $this->m_administrator->get_data_administrator();
			$data['query2'] = $this->m_administrator->get_data_log();
			$this->load->view('administrator/element/header');
			$this->load->view('administrator/element/navigation');
			$this->load->view('administrator/v_data_administrator',$data);
			$this->load->view('administrator/element/footer');
		}
		public function simpan(){
			$id_administrator = $this->input->post('id_administrator');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $telepon = $this->input->post('telepon');
		
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'alamat' => $alamat,
			'telepon' => $telepon
			);
		$this->m_administrator->update($id_administrator,$data);
		redirect('c_administrator/data_administrator');
		}
		public function edit($id){
			$data['query'] = $this->m_administrator->edit($id);
			$this->load->view('administrator/element/header');
			$this->load->view('administrator/element/navigation');
			$this->load->view('administrator/v_update_data_administrator',$data);
			$this->load->view('administrator/element/footer');
		}
	}