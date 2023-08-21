<?php
	class C_utama_user extends CI_Controller {
		function __construct(){
			parent::__construct();
		}
		public function halaman_utama_user(){
			$this->load->view('user/element/header');
			$this->load->view('user/element/navigation');
			$this->load->view('user/element/slider');
			$this->load->view('user/v_halaman_utama_user');
			$this->load->view('user/element/footer');
		}
		public function rekomendasi_topik_skripsi(){
			$this->load->view('user/element/header');
			$this->load->view('user/element/navigation');
			$this->load->view('user/v_rekomendasi_topik_skripsi');
			$this->load->view('user/element/footer');
		}
		public function input_rekomendasi_topik_skripsi(){
			$this->load->view('user/element/header');
			$this->load->view('user/element/navigation');			
			$this->load->view('user/v_input_rekomendasi_topik_skripsi');
			$this->load->view('user/element/footer');
		}
		public function statistik(){
			$this->load->view('user/element/header');
			$this->load->view('user/element/navigation');
			$this->load->view('user/v_statistik');
			$this->load->view('user/element/footer');
		}
		public function about_us(){
			$this->load->view('user/element/header');
			$this->load->view('user/element/navigation');
			$this->load->view('user/v_about_us');
			$this->load->view('user/element/footer');
		}
		public function login(){
			$this->load->view('administrator/v_login');
		}
}