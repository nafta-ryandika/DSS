<?php
	class C_rekomendasi_topik_skripsi extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model("m_rekomendasi_topik_skripsi");
		}

		function simpan(){
			$data['id_topik_skripsi']		= $this->input->post('id_topik_skripsi');
	      	$data['nilai_1']				= $this->input->post('nilai_1');
        	$data['nilai_2']				= $this->input->post('nilai_2');
        	$data['nilai_3']				= $this->input->post('nilai_3');
        	$data['nilai_4']				= $this->input->post('nilai_4');
        	$data['nilai_5']				= $this->input->post('nilai_5');
	        $data['minat']					= $this->input->post('minat');
	        $data['kendala']				= $this->input->post('kendala');
	        $data['rekomendasi_dosen']		= $this->input->post('rekomendasi_dosen');
	        $data['ketersediaan_referensi']	= $this->input->post('ketersediaan_referensi');
	        $data['penjurusan']				= $this->input->post('penjurusan');

	        $this->m_rekomendasi_topik_skripsi->simpan($data);
	        redirect('c_utama_user/rekomendasi_topik_skripsi');
		}

		public function rangking()
		{
		    $this->load->view('user/element/header');
			$this->load->view('user/element/navigation');
	        
	        $data['daftar_rekomendasi_topik_skripsi'] = $this->m_rekomendasi_topik_skripsi->get_daftar_rekomendasi_topik_skripsi()->result();
	        $data['daftar_kriteria'] = $this->m_rekomendasi_topik_skripsi->get_daftar_kriteria()->result();
	        
	        //==================================Mengambil hasil bobot perhitungan=============================================
	        $bobot_nilai_mata_kuliah		= $this->m_rekomendasi_topik_skripsi->select_bobot_kriteria(1)->row();
	        $bobot_minat     				= $this->m_rekomendasi_topik_skripsi->select_bobot_kriteria(2)->row();
	        $bobot_kendala					= $this->m_rekomendasi_topik_skripsi->select_bobot_kriteria(3)->row();
	        $bobot_rekomendasi_dosen		= $this->m_rekomendasi_topik_skripsi->select_bobot_kriteria(4)->row();
	        $bobot_ketersediaan_referensi	= $this->m_rekomendasi_topik_skripsi->select_bobot_kriteria(5)->row();
	        $bobot_penjurusan				= $this->m_rekomendasi_topik_skripsi->select_bobot_kriteria(6)->row();
	        //================================================================================================================
	        
	        
	        //=============================Mengkalikan bobot dengan nilai masing2 mahasiswa===================================
	        foreach($data['daftar_rekomendasi_topik_skripsi'] as $rekomendasi){
	        	$topik_skripsi 								= $rekomendasi->id_topik_skripsi;
	        	if ($topik_skripsi == 1) {
	        		$get_1 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(1)->row();
		       		$bobot_1 = $get_1->bobot;
		       		$get_2 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(2)->row();
		       		$bobot_2 = $get_2->bobot;
		       		$get_3 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(3)->row();
		       		$bobot_3 = $get_3->bobot;
		       		$get_4 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(4)->row();
		       		$bobot_4 = $get_4->bobot;
		       		$bobot_5 = 0;
	        	}
	        	elseif ($topik_skripsi == 2) {
	        		$get_1 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(5)->row();
		       		$bobot_1 = $get_1->bobot;
		       		$get_2 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(6)->row();
		       		$bobot_2 = $get_2->bobot;
		       		$get_3 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(7)->row();
		       		$bobot_3 = $get_3->bobot;
		       		$get_4 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(8)->row();
		       		$bobot_4 = $get_4->bobot;
		       		$get_5 =$this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(9)->row();
		       		$bobot_5 = $get_5->bobot;
	        	}
	        	elseif ($topik_skripsi == 3) {
	        		$get_1 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(10)->row();
		       		$bobot_1 = $get_1->bobot;
		       		$get_2 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(11)->row();
		       		$bobot_2 = $get_2->bobot;
		       		$get_3 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(12)->row();
		       		$bobot_3 = $get_3->bobot;
		       		$bobot_4 = 0;
		       		$bobot_5 = 0;
	        	}
	        	elseif ($topik_skripsi == 4) {
	        		$get_1 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(13)->row();
		       		$bobot_1 = $get_1->bobot;
		       		$get_2 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(14)->row();
		       		$bobot_2 = $get_2->bobot;
		       		$get_3 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(15)->row();
		       		$bobot_3 = $get_3->bobot;
		       		$bobot_4 = 0;
		       		$bobot_5 = 0;
	        	}
	        	elseif ($topik_skripsi == 5) {
	        		$get_1 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(16)->row();
		       		$bobot_1 = 0;
		       		$bobot_2 = 0;
		       		$bobot_3 = 0;
		       		$bobot_4 = 0;
		       		$bobot_5 = 0;
	        	}
	        	else{
	        		$get_1 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(17)->row();
		       		$bobot_1 = $get_1->bobot;
		       		$get_2 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(18)->row();
		       		$bobot_2 = $get_2->bobot;
		       		$get_3 =  $this->m_rekomendasi_topik_skripsi->get_bobot_subkriteria(19)->row();
		       		$bobot_3 = $get_3->bobot;
		       		$bobot_4 = 0;
		       		$bobot_5 = 0;
	        	}

	            $rekomendasi->nilai_1						= ($this->cek_nilai_1($rekomendasi->nilai_1)) * $bobot_nilai_mata_kuliah->bobot *$bobot_1;
	            $rekomendasi->nilai_2						= ($this->cek_nilai_2($rekomendasi->nilai_2)) * $bobot_nilai_mata_kuliah->bobot *$bobot_2;
	            $rekomendasi->nilai_3						= ($this->cek_nilai_3($rekomendasi->nilai_3)) * $bobot_nilai_mata_kuliah->bobot *
	            	$bobot_3;
	            $rekomendasi->nilai_4						= ($this->cek_nilai_4($rekomendasi->nilai_4)) * $bobot_nilai_mata_kuliah->bobot * $bobot_4;
	            $rekomendasi->nilai_5						= ($this->cek_nilai_5($rekomendasi->nilai_5)) * $bobot_nilai_mata_kuliah->bobot;

	            $rekomendasi->minat          				= ($this->cek_minat($rekomendasi->minat)) * $bobot_minat->bobot;
	            $rekomendasi->kendala  						= ($this->cek_kendala($rekomendasi->kendala)) * $bobot_kendala->bobot;
	            $rekomendasi->rekomendasi_dosen 			= ($this->cek_rekomendasi_dosen($rekomendasi->rekomendasi_dosen)) * $bobot_rekomendasi_dosen->bobot;
	            $rekomendasi->ketersediaan_referensi		= ($this->cek_ketersediaan_referensi($rekomendasi->ketersediaan_referensi)) * $bobot_ketersediaan_referensi->bobot;
	            $rekomendasi->bobot_penjurusan  			= ($this->cek_penjurusan($rekomendasi->penjurusan)) * $bobot_penjurusan->bobot;
	            


	            $data2['score'] = $rekomendasi->nilai_1 + $rekomendasi->nilai_2 + $rekomendasi->minat + $rekomendasi->nilai_3 + $rekomendasi->nilai_4 + $rekomendasi->nilai_5 + $rekomendasi->kendala + $rekomendasi->rekomendasi_dosen + $rekomendasi->ketersediaan_referensi + $rekomendasi->bobot_penjurusan;
	            //Mengupdate score tiap topik skripsi
	            $this->m_rekomendasi_topik_skripsi->update_rekomendasi_topik_skripsi($rekomendasi->id_rekomendasi_topik_skripsi, $data2);
	        }
	        //=================================================================================================================
	        
	        $data['daftar_rekomendasi_topik_skripsi']     = $this->m_rekomendasi_topik_skripsi->get_daftar_ranking()->result();
	        //=================================================================================================================
	        
	        //=======================================Mngurutkan berdasarkan nilai tertinggi====================================
	        $data['daftar_perbandingan_kriteria']    = $this->m_rekomendasi_topik_skripsi->get_daftar_perbandingan_kriteria()->result();
	        //=================================================================================================================
	        
			$this->load->view('user/v_rangking', $data);
	        $this->load->view('user/element/footer');
		}
	    
	    public function cek_nilai_1($nilai_1)
		{
		   if($nilai_1 == "A"){
		   	   $get = $this->m_rekomendasi_topik_skripsi->get_bobot(1)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_1 == "B"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(2)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_1 == "C"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(3)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_1 == "D"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(4)->row();
		       $nilai = $get->bobot;
		   } else{
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(5)->row();
		       $nilai = $get->bobot;
		   }
	       return $nilai;
		}
		public function cek_nilai_2($nilai_2)
		{
		   if($nilai_2 == "A"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(1)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_2 == "B"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(2)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_2 == "C"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(3)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_2 == "D"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(4)->row();
		       $nilai = $get->bobot;
		   } else{
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(5)->row();
		       $nilai = $get->bobot;
		   }
	       return $nilai;
		}
		public function cek_nilai_3($nilai_3)
		{
		   if($nilai_3 == "A"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(1)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_3 == "B"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(2)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_3 == "C"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(3)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_3 == "D"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(4)->row();
		       $nilai = $get->bobot;
		   } else{
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(5)->row();
		       $nilai = $get->bobot;
		   }
	       return $nilai;
		}
		public function cek_nilai_4($nilai_4)
		{
		   if($nilai_4 == "A"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(1)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_4 == "B"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(2)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_4 == "C"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(3)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_4 == "D"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(4)->row();
		       $nilai = $get->bobot;
		   } else{
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(5)->row();
		       $nilai = $get->bobot;
		   }
	       return $nilai;
		}
		public function cek_nilai_5($nilai_5)
		{
		   if($nilai_5 == "A"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(1)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_5 == "B"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(2)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_5 == "C"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(3)->row();
		       $nilai = $get->bobot;
		   } else if($nilai_5 == "D"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(4)->row();
		       $nilai = $get->bobot;
		   } else{
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(5)->row();
		       $nilai = $get->bobot;
		   }
	       return $nilai;
		}
	    
	    public function cek_minat($minat)
		{
		   if($minat == "Sangat Banyak"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(6)->row();
		       $nilai = $get->bobot;
		   } else if($minat == "Banyak"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(7)->row();
		       $nilai = $get->bobot;
		   } else if($minat == "Cukup"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(8)->row();
		       $nilai = $get->bobot;
		   } else if($minat == "Sedikit"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(9)->row();
		       $nilai = $get->bobot;
		   } else{
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(10)->row();
		       $nilai = $get->bobot;
		   }
	       return $nilai;
		}
	    
	    public function cek_kendala($kendala)
		{
		   if($kendala == "Sangat Banyak"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(11)->row();
		       $nilai = $get->bobot;
		   } else if($kendala == "Banyak"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(12)->row();
		       $nilai = $get->bobot;
		   } else if($kendala == "Cukup"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(13)->row();
		       $nilai = $get->bobot;
		   } else if($kendala == "Sedikit"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(14)->row();
		       $nilai = $get->bobot;
		   } else {
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(15)->row();
		       $nilai = $get->bobot;
		   }
	       return $nilai;
		}
	    
	    public function cek_rekomendasi_dosen($rekomendasi_dosen)
		{
		   if($rekomendasi_dosen == "Ada"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(16)->row();
		       $nilai = $get->bobot;
		   } else{
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(17)->row();
		       $nilai = $get->bobot;
	       }
	       return $nilai;
		}

		public function cek_ketersediaan_referensi($ketersediaan_referensi)
		{
		   if($ketersediaan_referensi == "Sangat Banyak"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(18)->row();
		       $nilai = $get->bobot;
		   } else if($ketersediaan_referensi == "Banyak"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(19)->row();
		       $nilai = $get->bobot;
		   } else if($ketersediaan_referensi == "Cukup"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(20)->row();
		       $nilai = $get->bobot;
		   } else if($ketersediaan_referensi == "Sedikit"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(21)->row();
		       $nilai = $get->bobot;
		   } else{
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(22)->row();
		       $nilai = $get->bobot;
		   }
	       return $nilai;
		}

		public function cek_penjurusan($penjurusan)
		{
		   if($penjurusan == "Sesuai"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(23)->row();
		       $nilai = $get->bobot;
		   } else if($penjurusan == "Tidak Sesuai"){
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(24)->row();
		       $nilai = $get->bobot;
		   } else{
		       $get = $this->m_rekomendasi_topik_skripsi->get_bobot(25)->row();
		       $nilai = $get->bobot;
		   }
	       return $nilai;
		}
		public function selesai(){
			$data['query'] = $this->m_rekomendasi_topik_skripsi->selesai();
			$this->load->view('user/element/header');
			$this->load->view('user/element/navigation');
			$this->load->view('user/element/slider');
			$this->load->view('user/v_halaman_utama_user');
			$this->load->view('user/element/footer');
		}
}