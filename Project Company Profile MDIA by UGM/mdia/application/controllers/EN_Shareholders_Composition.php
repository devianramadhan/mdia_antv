<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EN_Shareholders_Composition extends CI_Controller {


    public function index()
	   {

	   	$data['head_en'] = $this->model_menu->en_menuutamaaktif();
        $data['submenu1_en'] = $this->model_menu->en_submenuaktif1();
        $data['subsubmenu_en'] = $this->model_menu->en_subsubmenuaktif();
        $data['dokumen_en'] = $this->model_menu->en_dokumen();


        $data['ikhtisar_en'] = $this->model_dokumen->en_dokumenikhtisar();
        $data['anggaran_en'] = $this->model_dokumen->en_dokumenanggaran();
        $data['kerjadekom_en'] = $this->model_dokumen->en_dokumendekom();
        $data['kerjadirek_en'] = $this->model_dokumen->en_dokumendirek();
        $data['etik_en'] = $this->model_dokumen->en_dokumenetik();
        $data['kaudit_en'] = $this->model_dokumen->en_dokumenaudit();
        $data['nominasi_en'] = $this->model_dokumen->en_dokumennominasi();
        $data['uaudit_en'] = $this->model_dokumen->en_dokumenuaudit();
        $data['wbs_en'] = $this->model_dokumen->en_dokumenwbs();
        $data['pemsaham_en'] = $this->model_dokumen->en_dokumensaham();
        
	   	$data['gambarpemsaham'] = $this->model_halaman->en_ambilpemsah();
    	$data['judulpemsaham'] = $this->model_halaman->en_ambilpemsah();
    	$data['gambar'] = $this->model_galeri->en_pemegang_saham()->row_array();
        $this->load->view('EN/shareholders-composition',$data);
	   }

    

}
