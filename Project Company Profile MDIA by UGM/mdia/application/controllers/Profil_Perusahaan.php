<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_Perusahaan extends CI_Controller {

	function index(){
        

	$data['ikhtisar'] = $this->model_dokumen->dokumenikhtisar();
        $data['anggaran'] = $this->model_dokumen->dokumenanggaran();
        $data['kerjadekom'] = $this->model_dokumen->dokumendekom();
        $data['kerjadirek'] = $this->model_dokumen->dokumendirek();
        $data['etik'] = $this->model_dokumen->dokumenetik();
        $data['kaudit'] = $this->model_dokumen->dokumenaudit();
        $data['nominasi'] = $this->model_dokumen->dokumennominasi();
        $data['uaudit'] = $this->model_dokumen->dokumenuaudit();
        $data['wbs'] = $this->model_dokumen->dokumenwbs();
        $data['pemsaham'] = $this->model_dokumen->dokumensaham();

       
        $data['head'] = $this->model_menu->menuutamaaktif();
        $data['submenu1'] = $this->model_menu->submenuaktif1();
        $data['subsubmenu'] = $this->model_menu->subsubmenuaktif();
        $data['dokumen'] = $this->model_menu->dokumen();

        
        $data['gambarprofil'] = $this->model_halaman->ambilgambarprofil();
        $data['judulprofil'] = $this->model_halaman->ambiljudulprofil();
        $data['isiprofil'] = $this->model_halaman->ambilisiprofil();
        

	$this->load->view('profil_perusahaan',$data);

	}



 
}