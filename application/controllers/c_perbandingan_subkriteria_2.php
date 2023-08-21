<?php
    class C_perbandingan_subkriteria_2 extends CI_Controller {
        function __construct(){
            parent::__construct();
            $this->load->model("m_perbandingan_subkriteria_2");
        }
        
        public function perbandingan_subkriteria($id)
        {
        $this->load->view('administrator/element/header');
        $this->load->view('administrator/element/navigation');


        $data['daftar_kriteria'] = $this->m_perbandingan_subkriteria_2->get_daftar_kriteria()->result();
        $data['daftar_subkriteria'] = $this->m_perbandingan_subkriteria_2->select_subkriteria($id)->result();
        $data['perbandingan_subkriteria'] = $this->m_perbandingan_subkriteria_2->select_perbandingan_subkriteria($id)->result();

        $data['jumlahSubkriteria'] = count($data['daftar_subkriteria']);
        $data['id'] = $id;
        
        //======================Menghitung Jumlah Per Kolom=============================
        $jumlah = array();
        foreach ($data['daftar_subkriteria'] as $subkriteria) {
            $jumlah1 = 0;
            foreach ($data['perbandingan_subkriteria'] as $perbandingan) {
                //memfilter kriteria per kolom
                   if($perbandingan->id_subkriteria_2_2 == $subkriteria->id_subkriteria_2){ 
                            $jumlah1 = $jumlah1 + $perbandingan->bobot;
                       }
                } 
                array_push($jumlah, $jumlah1);
         }
         $data['jumlah_per_kolom'] = $jumlah;
         //=============================================================================
         
         
         //===============Menghitung nilai per cell (nilai cell / jumlah)===============
         $arrayVector = array();
         foreach ($data['daftar_subkriteria'] as $subkriteria) {
            $nilai = array();
            $a = 0;
            foreach ($data['perbandingan_subkriteria'] as $perbandingan) {
                if($perbandingan->id_subkriteria_2_1 == $subkriteria->id_subkriteria_2){                          
                  $nilai1 = $perbandingan->bobot / $jumlah[$a];
                  array_push($nilai, $nilai1);
                  $a++;
                  }
            }
            //======================Menghitung nilai vector=============================
            $vector = 0;
            for($i = 0; $i < count($nilai); $i++){
                 $vector = $vector + $nilai[$i];
            } 
                
            $vector = $vector / $data['jumlahSubkriteria'];
            $vector = number_format($vector, 3, '.', '');
            array_push($arrayVector, $vector);
            //==========================================================================
            
         }
         //=============================================================================
         
         
         //===========================Menghitung Nilai Lamda============================
         $lamda = 0;
                for($i = 0; $i < count($arrayVector); $i++){
                      $lamda = $lamda + ($arrayVector[$i] * $jumlah[$i]);  
                   }
         //=============================================================================
         
         
         //==========================Menghitung Nilai CI================================
         $ci = ($lamda - $data['jumlahSubkriteria']) / ($data['jumlahSubkriteria'] - 1);
         $ci = number_format($ci, 3, '.', '');
         //=============================================================================
         
         
         //==========================Menghitung Nilai CR================================
         $cr = $ci / $this->nilaiRI($data['jumlahSubkriteria']);
         $cr = number_format($cr, 3, '.', '');
         //=============================================================================
        
        
        //==================Merubah Nilai Bobot AHP ke Fuzzy============================
        $arrayFuzzy = array();
        foreach($data['perbandingan_subkriteria'] as $nilai_bobot){
            $arrayDalamFuzzy = array();
            
            if($nilai_bobot->bobot == 0.111){
                array_push($arrayDalamFuzzy, 0.111);
                array_push($arrayDalamFuzzy, 0.111);
                array_push($arrayDalamFuzzy, 0.142);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 0.125){
                array_push($arrayDalamFuzzy, 0.111);
                array_push($arrayDalamFuzzy, 0.125);
                array_push($arrayDalamFuzzy, 0.166);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 0.142){
                array_push($arrayDalamFuzzy, 0.111);
                array_push($arrayDalamFuzzy, 0.142);
                array_push($arrayDalamFuzzy, 0.2);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 0.166){
                array_push($arrayDalamFuzzy, 0.125);
                array_push($arrayDalamFuzzy, 0.166);
                array_push($arrayDalamFuzzy, 0.25);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 0.2){
                array_push($arrayDalamFuzzy, 0.142);
                array_push($arrayDalamFuzzy, 0.2);
                array_push($arrayDalamFuzzy, 0.333);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 0.25){
                array_push($arrayDalamFuzzy, 0.166);
                array_push($arrayDalamFuzzy, 0.25);
                array_push($arrayDalamFuzzy, 0.5);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 0.333){
                array_push($arrayDalamFuzzy, 0.2);
                array_push($arrayDalamFuzzy, 0.333);
                array_push($arrayDalamFuzzy, 1);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 0.5){
                array_push($arrayDalamFuzzy, 0.25);
                array_push($arrayDalamFuzzy, 0.5);
                array_push($arrayDalamFuzzy, 1);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 1){
                array_push($arrayDalamFuzzy, 1);
                array_push($arrayDalamFuzzy, 1);
                array_push($arrayDalamFuzzy, 1);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 2){
                array_push($arrayDalamFuzzy, 1);
                array_push($arrayDalamFuzzy, 2);
                array_push($arrayDalamFuzzy, 4);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 3){
                array_push($arrayDalamFuzzy, 1);
                array_push($arrayDalamFuzzy, 3);
                array_push($arrayDalamFuzzy, 5);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 4){
                array_push($arrayDalamFuzzy, 2);
                array_push($arrayDalamFuzzy, 4);
                array_push($arrayDalamFuzzy, 6);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 5){
                array_push($arrayDalamFuzzy, 3);
                array_push($arrayDalamFuzzy, 5);
                array_push($arrayDalamFuzzy, 7);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 6){
                array_push($arrayDalamFuzzy, 4);
                array_push($arrayDalamFuzzy, 6);
                array_push($arrayDalamFuzzy, 8);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 7){
                array_push($arrayDalamFuzzy, 5);
                array_push($arrayDalamFuzzy, 7);
                array_push($arrayDalamFuzzy, 9);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 8){
                array_push($arrayDalamFuzzy, 6);
                array_push($arrayDalamFuzzy, 8);
                array_push($arrayDalamFuzzy, 9);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            } else if($nilai_bobot->bobot == 9){
                array_push($arrayDalamFuzzy, 7);
                array_push($arrayDalamFuzzy, 9);
                array_push($arrayDalamFuzzy, 9);
                array_push($arrayFuzzy, $arrayDalamFuzzy);
                
            }
            
        }
        //=============================================================================
        
        
        //=====================Menghitung Jumlah Baris Fuzzy===========================
        $total1 = 0;
        $total2 = 0;
        $total3 = 0;
        $arrayJumlah = array();
        
        foreach ($data['daftar_subkriteria'] as $subkriteria) {
            $index = 0;
            $jumlah1 = 0;
            $jumlah2 = 0;
            $jumlah3 = 0;
            $arrayDalamJumlah = array();
            
            foreach ($data['perbandingan_subkriteria'] as $perbandingan) {
                if($perbandingan->id_subkriteria_2_1 == $subkriteria->id_subkriteria_2){
                    $jumlah1 = $jumlah1 + $arrayFuzzy[$index][0];
                    $jumlah2 = $jumlah2 + $arrayFuzzy[$index][1];
                    $jumlah3 = $jumlah3 + $arrayFuzzy[$index][2];
                }
                $index++;
            }
            array_push($arrayDalamJumlah, $jumlah1);
            array_push($arrayDalamJumlah, $jumlah2);
            array_push($arrayDalamJumlah, $jumlah3);
            array_push($arrayJumlah, $arrayDalamJumlah);
            
            //Menghitung jumlah total
            $total1 = $total1 + $jumlah1;
            $total2 = $total2 + $jumlah2;
            $total3 = $total3 + $jumlah3;
        }
        //=============================================================================
        
        
        //===========================Menghitung Nilai Si===============================
        $nilai_l = 0;
        $nilai_m = 0;
        $nilai_u = 0;
        $index3 = 0;
        $arraySi = array();
        foreach ($data['daftar_subkriteria'] as $subkriteria) {
            $arrayDalamSi = array();
            foreach ($data['daftar_subkriteria'] as $subkriteria) {
                $nilai_l = $arrayJumlah[$index3][0] / $total1;
                $nilai_m = $arrayJumlah[$index3][1] / $total2;
                $nilai_u = $arrayJumlah[$index3][2] / $total3; 
                
                $nilai_l = number_format($nilai_l, 3, '.', '');
                $nilai_m = number_format($nilai_m, 3, '.', '');
                $nilai_u = number_format($nilai_u, 3, '.', '');
                
                array_push($arrayDalamSi, $nilai_l);
                array_push($arrayDalamSi, $nilai_m);
                array_push($arrayDalamSi, $nilai_u);  
                
            } 
            array_push($arraySi, $arrayDalamSi);
            $index3++;
        }
        //============================================================================
        
        
        //==============================Menghitung bobot fuzzy========================
        $bobot_fuzzy = array();
        $index4 = 0;
        foreach ($data['daftar_subkriteria'] as $subkriteria) {
            
            $l = $arraySi[$index4][0];
            $m = $arraySi[$index4][1];
            $u = $arraySi[$index4][2];
            
            $bobot = ((($u - $l) + ($m - $l)) / 3) + $l;
            $bobot = number_format($bobot, 3, '.', '');
            
            array_push($bobot_fuzzy, $bobot);
            
            $data2['bobot'] = $bobot;
            $this->m_perbandingan_subkriteria_2->update_bobot_subkriteria($id, $subkriteria->id_subkriteria_2, $data2);
            $index4++;
        }
        //============================================================================
        
        $data['bobot_fuzzy']    = $bobot_fuzzy; 
        $data['nilai_si']       = $arraySi;    
        $data['jumlah_fuzzy']   = $arrayJumlah;
        $data['total_fuzzy1']   = $total1;
        $data['total_fuzzy2']   = $total2;
        $data['total_fuzzy3']   = $total3;
        $data['nilai_fuzzy']    = $arrayFuzzy;
        $data['nilai_lamda']    = $lamda;
        $data['nilai_ci']       = $ci;
        $data['nilai_cr']       = $cr;
        $data['nilai_vector']   = $arrayVector;
        
        $this->load->view('administrator/v_data_perbandingan_subkriteria_2', $data);
        $this->load->view('administrator/element/footer');
        }

    public function nilaiRI($jumlah)
    {
       $nilai2;
        if($jumlah == '1'){
            $nilai2 = 0;
        } else if($jumlah == '2'){
            $nilai2 = 0;
        } else if($jumlah == '3'){
            $nilai2 = 0.58;
        } else if($jumlah == '4'){
            $nilai2 = 0.9;
        } else if($jumlah == '5'){
            $nilai2 = 1.12;
        } else if($jumlah == '6'){
            $nilai2 = 1.24;
        } else if($jumlah == '7'){
            $nilai2 = 1.32;
        } else if($jumlah == '8'){
            $nilai2 = 1.41;
        } else if($jumlah== '9'){
            $nilai2 = 1.45;
        } else if($jumlah == '10'){
            $nilai2 = 1.49;
        } else if($jumlah == '11'){
            $nilai2 = 1.51;
        } else if($jumlah == '12'){
            $nilai2 = 1.48;
        } else if($jumlah == '13'){
            $nilai2 = 1.56;
        } else if($jumlah == '14'){
            $nilai2 = 1.57;
        } else if($jumlah == '15'){
            $nilai2 = 1.59;
        }
        
        return $nilai2;
    }
    
    public function nilaiFuzzy($nilai)
    {
       $nilai2;
        if($jumlah == '1'){
            $nilai2 = 0;
        } else if($jumlah == '2'){
            $nilai2 = 0;
        }
        
        return $nilai2;
    }
    
    public function edit_perbandingan_subkriteria($id_kriteria){
        $this->load->view('administrator/element/header');
        $this->load->view('administrator/element/navigation');

        $data['daftar_subkriteria'] = $this->m_perbandingan_subkriteria_2->select_subkriteria($id_kriteria)->result();
        $data['jumlah'] = count($data['daftar_subkriteria']);
        $data['id'] = $id_kriteria;

        $this->load->view('administrator/v_edit_data_perbandingan_subkriteria_2',$data);
        $this->load->view('administrator/element/footer');
    }
    
    public function update_perbandingan_subkriteria($id_kriteria){ 
        // mengupdate bobot relasi
        // i mewakili id subkriteria 1
        // j mewakili id subkriteria 2
        for($i = 1; $i <= 5; $i++){
            for($j = 1; $j <= 5; $j++){
                $data['bobot'] = $this->input->post(''.$i.$j);
                $this->m_perbandingan_subkriteria_2->update_bobot_perbandingan_subkriteria($id_kriteria, $i, $j, $data);
            }          
        }
        redirect('C_perbandingan_subkriteria_2/perbandingan_subkriteria/'.$id_kriteria);
        }    
}