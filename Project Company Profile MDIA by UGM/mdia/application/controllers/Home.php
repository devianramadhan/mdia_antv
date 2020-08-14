<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


 public function __construct(){
    parent::__construct();
    $this->load->library('template');
  }

public function index()
	{
		//$data['konten']="";
        $data['head'] = $this->model_menu->menuutamaaktif();
        $data['submenu1'] = $this->model_menu->submenuaktif1();
        $data['subsubmenu'] = $this->model_menu->subsubmenuaktif();
        $data['dokumen'] = $this->model_menu->dokumen();


		$data['slide'] = $this->model_slider->tampilslider();

        $data['program'] = $this->model_galeri->program();
        $data['program2'] = $this->model_galeri->program2();
        $data['program3'] = $this->model_galeri->program3();
        $data['program4'] = $this->model_galeri->program4();
        $data['program5'] = $this->model_galeri->program5();
        $data['program6'] = $this->model_galeri->program6();
        $data['penghargaan1'] = $this->model_penghargaan->ambilberitapenghargaan();
        $data['penghargaan2'] = $this->model_penghargaan->ambilberitapenghargaan2();
        $data['penghargaan3'] = $this->model_penghargaan->ambilberitapenghargaan3();


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
        $this->load->view('halaman_utama',$data);
		
	}



// in controller
public function bootstrap1()
{
    $config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';     
    $config["parent_tag_open"]       = '<li class="dropdown-submenu">';
    $config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>'; 
    $config["children_tag_open"]     = '<ul class="dropdown-menu">';
    $config["item_divider"]          = "<li class='divider'></li>";

    $this->multi_menu->initialize($config);
    $this->load->view("head");
}

}
