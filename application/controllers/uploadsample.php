<?php
	class Uploadsample extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('m_upload');
			//$this->load->library('input');
		}
		public function index()
		{
		$this->load->view('uploadsample/form_upload', array('error'=>''));
		}

		public function proses_upload(){
			$judul = $this->input->post('judul');
			$config['upload_path'] = './assets/upload/image';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '10000';
			$config['max_width'] = '5000';
			$config['max_height'] = '5000';
			$config['overwrite'] = 'TRUE';
			$config['file_name'] = $this->input->post('nama_file');
			$config['remove_spaces'] = 'TRUE';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload()){
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('uploadsample/form_upload', $error);
			}
			else {
			$upload_data = $this->upload->data();
//			$upload_data['judul'] = $judul;
//			$data = array('upload_data' => $upload_data);
//			$this->load->view('uploadsample/view_upload_success', $data);
	
			$config2['image_library'] = 'gd2';
			$config2['source_image'] = $file = $upload_path.''.$upload_data['file_name']; //file sumber 
			$config2['new_image'] = $thumbnail = $upload_path.'thumb/thumb_'.$upload_data['file_name']; //nama file baru
			$config2['create_thumb'] = FALSE;
			$config2['maintain_ratio'] = TRUE; //perbandingan
			$config2['width'] = 200; //lebar file baru
			$config2['height'] = 150; //tinggi file baru
			$this->load->library('image_lib', $config2);
			$this->image_lib->resize();

			$data = array(
			'file'=>$file,
			'thumbnail'=>$thumbnail
			);


			$this->m_upload->simpan($data); //simpan ke dalam database
			$this->session->set_flashdata('success', 'File Berhasil diupload'); //upload berhasil
			redirect('uploadsample/view_upload_success');
			}
		}


}