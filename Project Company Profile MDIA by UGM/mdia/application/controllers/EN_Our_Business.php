<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EN_Our_Business extends CI_Controller {


    public function index()
	   {
	   		$data['gambarbisnis2'] = $this->model_halaman->en_ambilgambarbisnis();
        	$data['judulbisnis2'] = $this->model_halaman->en_ambiljudulbisnis();
        	$data['isibisnis2'] = $this->model_halaman->en_ambilisibisnis();
        	$data['transbisnis2'] = $this->model_galeri->en_ambiltransbisnis();

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
        
            $this->load->view('EN/our-business',$data);
	   }

    

}
