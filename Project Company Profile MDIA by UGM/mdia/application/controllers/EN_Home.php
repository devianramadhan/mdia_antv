<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EN_Home extends CI_Controller {


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

		$data['slide'] = $this->model_slider->tampilslider();

        $data['program_en'] = $this->model_galeri->en_program();
        $data['program2_en'] = $this->model_galeri->en_program2();
        $data['program3_en'] = $this->model_galeri->en_program3();
        $data['program4_en'] = $this->model_galeri->en_program4();
        $data['program5_en'] = $this->model_galeri->en_program5();
        $data['program6_en'] = $this->model_galeri->en_program6();
        $data['penghargaan1_en'] = $this->model_penghargaan->en_ambilberitapenghargaan();
        $data['penghargaan2_en'] = $this->model_penghargaan->en_ambilberitapenghargaan2();
        $data['penghargaan3_en'] = $this->model_penghargaan->en_ambilberitapenghargaan3();


            $this->load->view('EN/index', $data);
		
	   }


}
