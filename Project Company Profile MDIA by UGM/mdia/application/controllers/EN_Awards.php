<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EN_Awards extends CI_Controller {


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


        
        $data['gambarpenghargaan_en'] = $this->model_halaman->en_ambilpenghargaan2();
        $data['judulpenghargaan_en'] = $this->model_halaman->en_ambilpenghargaan2();
        $data['pengser_en'] = $this->model_penghargaan->tahun_penghargaan();
        $data['peng_en'] = $this->model_penghargaan->en_ambilpenghargaan();
        $data['ser_en'] = $this->model_penghargaan->en_ambilsertifikasi();
            $this->load->view('EN/awards',$data);
	   }

    

}
