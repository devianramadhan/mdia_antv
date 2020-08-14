<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Administrator extends CI_Controller {

public function __construct(){
    parent::__construct();
  }

	function index(){
			$username = $this->input->post('a');
			$password = md5($this->input->post('b'));
			$cek = $this->model_users->cek_login($username,$password);
		    $row = $cek->row_array();
		    $total = $cek->num_rows();
		if (isset($_POST['submit'])){
			if ($total > 0){
				$this->session->set_userdata('upload_image_file_manager',true);
				$this->session->set_userdata(array('username'=>$row['username'],
								   'level'=>$row['level']));
				redirect('administrator/home');
			}else{
				$data['title'] = 'Administrator &rsaquo; Log In';
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Pastikan Username dan Password Benar...</div>');
        		$this->load->view('administrator/view_login',$data);	
			}
		}else{
			if ($this->session->level != ''){
				redirect('administrator/home');
			}else{
				$data['title'] = 'Administrator &rsaquo; Log In';
				$this->load->view('administrator/view_login',$data);
			}
		}
	}	

	function home(){
		cek_session_admin();
		$this->load->view('administrator/template');
	}
	
	// Controller Menu Utama

	function menuutama(){
		cek_session_admin();
		$data['record'] = $this->model_menu->menuutama();
		$this->load->view('administrator/mod_menu/view_menu2',$data);
	}

	function tambah_menuutama(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_menu->menuutama_tambah();
			$this->model_menu->en_menuutama_tambah();
			redirect('administrator/menuutama');
		}else{
			$this->load->view('administrator/mod_menu/view_menu_tambah2');
		}
	}

	function edit_menuutama(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_menu->menuutama_update();
			$this->model_menu->en_menuutama_update();
			redirect('administrator/menuutama');
		}else{
			$data['menu1'] = $this->model_menu->menuutama_edit($id)->row_array();
			$data['menu2'] = $this->model_menu->en_menuutama_edit($id)->row_array();
			$this->load->view('administrator/mod_menu/view_menu_edit2',$data);
		}
	}


	function delete_menuutama(){
		$id = $this->uri->segment(3);
		$this->model_menu->menuutama_delete($id);
		$this->model_menu->en_menuutama_delete($id);
		redirect('administrator/menuutama');
	}

	// Controller Sub Menu

	function submenu(){
		cek_session_admin();
		$data['record'] = $this->model_menu->submenu();
		$this->load->view('administrator/mod_submenu/view_submenu2',$data);
	}

	function tambah_submenu(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_menu->submenu_tambah();
			$this->model_menu->en_submenu_tambah();
			redirect('administrator/submenu');
		}else{
			$data['utama'] = $this->model_menu->cek_menuutama();
			$data['utama_en'] = $this->model_menu->en_cek_menuutama();
			$this->load->view('administrator/mod_submenu/view_submenu_tambah2',$data);
		}
	}

	function edit_submenu(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_menu->submenu_update();
			$this->model_menu->en_submenu_update();
			redirect('administrator/submenu');
		}else{
			$data['ambil'] = $this->model_menu->submenu_edit($id)->row_array();
			$data['utama'] = $this->model_menu->cek_menuutama();
			$data['ambil_en'] = $this->model_menu->en_submenu_edit($id)->row_array();
			$data['utama_en'] = $this->model_menu->en_cek_menuutama();
			$this->load->view('administrator/mod_submenu/view_submenu_edit2',$data);
		}
	}

	function delete_submenu(){
		$id = $this->uri->segment(3);
		$this->model_menu->submenu_delete($id);
		$this->model_menu->en_submenu_delete($id);
		redirect('administrator/submenu');
	}
	
	// Controller Sub Sub Menu

	function subsubmenu(){
		cek_session_admin();
		$data['record'] = $this->model_menu->subsubmenu();
		$this->load->view('administrator/mod_subsubmenu/view_subsubmenu',$data);
	}

	function tambah_subsubmenu(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_menu->subsubmenu_tambah();
			$this->model_menu->en_subsubmenu_tambah();
			redirect('administrator/subsubmenu');
		}else{
			
			$data['submenu'] = $this->model_menu->cek_submenu();
			$data['submenu_en'] = $this->model_menu->en_cek_submenu();
			$this->load->view('administrator/mod_subsubmenu/view_subsubmenu_tambah',$data);
		}
	}

	function edit_subsubmenu(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_menu->subsubmenu_update();
			$this->model_menu->en_subsubmenu_update();
			redirect('administrator/subsubmenu');
		}else{
			$data['taroh'] = $this->model_menu->subsubmenu_edit($id)->row_array();
			$data['submenu'] = $this->model_menu->cek_submenu();
			$data['taroh_en'] = $this->model_menu->en_subsubmenu_edit($id)->row_array();
			$data['submenu_en'] = $this->model_menu->en_cek_submenu();
			$this->load->view('administrator/mod_subsubmenu/view_subsubmenu_edit',$data);
		}
	}

	function delete_subsubmenu(){
		$id = $this->uri->segment(3);
		$this->model_menu->subsubmenu_delete($id);
		$this->model_menu->en_subsubmenu_delete($id);
		redirect('administrator/subsubmenu');
	}

	// Controller Modul Halaman Statis

	function halamanbaru(){
		cek_session_admin();
		$data['record'] = $this->model_halaman->halamanstatis();
		$data['record2'] = $this->model_halaman->en_halamanstatis();
		$this->load->view('administrator/mod_halaman/view_halaman2',$data);
	}

	function tambah_halamanbaru(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_halaman->halamanstatis_tambah();
			$this->model_halaman->en_halamanstatis_tambah();
			redirect('administrator/halamanbaru');
		}else{
			$this->load->view('administrator/mod_halaman/view_halaman_tambah3');
		}
	}

	function edit_halamanbaru(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_halaman->halamanstatis_update();
			$this->model_halaman->en_halamanstatis_update();
			redirect('administrator/halamanbaru');
		}else{
			$data['hal_statis'] = $this->model_halaman->halamanstatis_edit($id)->row_array();
			$data['hal_statis2'] = $this->model_halaman->en_halamanstatis_edit($id)->row_array();
			$this->load->view('administrator/mod_halaman/view_halaman_edit2',$data);
		}
	}

	function delete_halamanbaru(){
		$id = $this->uri->segment(3);
		$this->model_halaman->halamanstatis_delete($id);
		$this->model_halaman->en_halamanstatis_delete($id);
		redirect('administrator/halamanbaru');
	}


	// Controller Modul List Berita

	function berita(){
		cek_session_admin();
		$data['record'] = $this->model_berita->list_berita();
		$this->load->view('administrator/mod_berita/view_berita2',$data);
	}

	function tambah_berita(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_berita->list_berita_tambah();
			$this->model_berita->en_list_berita_tambah();
			redirect('administrator/berita');
		}else{
			$data['katber'] = $this->model_berita->kategori_berita();
			$data['usber'] = $this->model_users->users();
			$data['katber2'] = $this->model_berita->en_kategori_berita();
			$data['usber2'] = $this->model_users->users();
			$this->load->view('administrator/mod_berita/view_berita_tambah2',$data);
		}
	}


	function edit_berita(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_berita->list_berita_update();
			$this->model_berita->en_list_berita_update();
			redirect('administrator/berita');
		}else{
			$data['katber'] = $this->model_berita->kategori_berita();
			$data['berita'] = $this->model_berita->list_berita_edit($id)->row_array();
			$data['usber'] = $this->model_users->users();
			$data['katber2'] = $this->model_berita->en_kategori_berita();
			$data['berita2'] = $this->model_berita->en_list_berita_edit($id)->row_array();
			$data['usber2'] = $this->model_users->users();
			$this->load->view('administrator/mod_berita/view_berita_edit2',$data);
		}
	}

	function delete_berita(){
		$id = $this->uri->segment(3);
		$this->model_berita->list_berita_delete($id);
		$this->model_berita->en_list_berita_delete($id);
		redirect('administrator/berita');
	}


	// Controller Modul Dokumen

	function dokumen(){
		cek_session_admin();
		$data['dokumen'] = $this->model_dokumen->list_dokumen();
		$this->load->view('administrator/mod_dokumen/view_dokumen',$data);
	}

	function tambah_dokumen(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_dokumen->list_dokumen_tambah();
			$this->model_dokumen->en_list_dokumen_tambah();
			redirect('administrator/dokumen');
		}else{
			$data['dokumen'] = $this->model_dokumen->kategori_dokumen();
			$data['dokumen_en'] = $this->model_dokumen->en_kategori_dokumen();
			$data['usdok'] = $this->model_users->users();
			$this->load->view('administrator/mod_dokumen/view_dokumen_tambah',$data);
		}
	}

	function edit_dokumen(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_dokumen->list_dokumen_update();
			$this->model_dokumen->en_list_dokumen_update();
			redirect('administrator/dokumen');
		}else{
			$data['katdok'] = $this->model_dokumen->kategori_dokumen();
			$data['katdok_en'] = $this->model_dokumen->en_kategori_dokumen();
			$data['dok'] = $this->model_dokumen->list_dokumen_edit($id)->row_array();
			$data['dok_en'] = $this->model_dokumen->en_list_dokumen_edit($id)->row_array();
			$data['usber'] = $this->model_users->users();
			$this->load->view('administrator/mod_dokumen/view_dokumen_edit',$data);
		}
	}

	function delete_dokumen(){
		$id = $this->uri->segment(3);
		$this->model_dokumen->list_dokumen_delete($id);
		redirect('administrator/dokumen');
	}
	
	// Controller Modul Kategori Dokumen

	function kategoridokumen(){
		cek_session_admin();
		$data['record'] = $this->model_dokumen->kategori_dokumen();
		$this->load->view('administrator/mod_kategoridokumen/view_kategoridokumen',$data);
	}

	function tambah_kategoridokumen(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_dokumen->kategori_dokumen_tambah();
			$this->model_dokumen->en_kategori_dokumen_tambah();
			redirect('administrator/kategoridokumen');
		}else{
			$this->load->view('administrator/mod_kategoridokumen/view_kategoridokumen_tambah');
		}
	}

	function edit_kategoridokumen(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_dokumen->kategori_dokumen_update();
			$this->model_dokumen->en_kategori_dokumen_update();
			redirect('administrator/kategoridokumen');
		}else{
			$data['dokumen'] = $this->model_dokumen->kategori_dokumen_edit($id)->row_array();
			$data['dokumen_en'] = $this->model_dokumen->en_kategori_dokumen_edit($id)->row_array();
			$this->load->view('administrator/mod_kategoridokumen/view_kategoridokumen_edit',$data);
		}
	}

	function delete_kategoridokumen(){
		$id = $this->uri->segment(3);
		$this->model_dokumen->kategori_dokumen_delete($id);
		$this->model_dokumen->en_kategori_dokumen_delete($id);
		redirect('administrator/kategoridokumen');
	}


	// Controller Modul Kategori Berita

	function kategoriberita(){
		cek_session_admin();
		$data['record'] = $this->model_berita->kategori_berita();
		$this->load->view('administrator/mod_kategori/view_kategori2',$data);
	}

	function tambah_kategoriberita(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_berita->kategori_berita_tambah();
			$this->model_berita->en_kategori_berita_tambah();
			redirect('administrator/kategoriberita');
		}else{
			$this->load->view('administrator/mod_kategori/view_kategori_tambah2');
		}
	}

	function edit_kategoriberita(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_berita->kategori_berita_update();
			$this->model_berita->en_kategori_berita_update();

			redirect('administrator/kategoriberita');
		}else{
			$data['katber'] = $this->model_berita->kategori_berita_edit($id)->row_array();
			$data['katber_en'] = $this->model_berita->en_kategori_berita_edit($id)->row_array();
			$this->load->view('administrator/mod_kategori/view_kategori_edit2',$data);
		}
	}

	function delete_kategoriberita(){
		$id = $this->uri->segment(3);
		$this->model_berita->kategori_berita_delete($id);
		$this->model_berita->en_kategori_berita_delete($id);
		redirect('administrator/kategoriberita');
	}

// Controller Modul Slider

	function slider(){
		cek_session_admin();
		$data['record'] = $this->model_slider->slider();
		
		$this->load->view('administrator/mod_slider/view_slider2',$data);
	}

	function tambah_slider(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_slider->slider_tambah();
			
			redirect('administrator/slider');
		}else{
			$this->load->view('administrator/mod_slider/view_slider_tambah');
		}
	}


	function edit_slider(){
	cek_session_admin();
	$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_slider->slider_update();
			
			redirect('administrator/slider');
		}else{
			$data['slider'] = $this->model_slider->slider_edit($id)->row_array();
			
			$this->load->view('administrator/mod_slider/view_slider_edit2',$data);
		}
	}

	function delete_slider(){
		$id = $this->uri->segment(3);
		$this->model_slider->slider_delete($id);
		
		redirect('administrator/slider');
	}
	
	// Controller Modul User

	function manajemenuser(){
		cek_session_admin();
		$data['record'] = $this->model_users->users();
		
		$this->load->view('administrator/mod_users/view_users2',$data);
		
		
	}

	function tambah_manajemenuser(){
		cek_session_admin();
		$id = $this->session->username;
		if (isset($_POST['submit'])){
			$this->model_users->users_tambah();
			redirect('administrator/manajemenuser');
		}else{
			$data['rows'] = $this->model_users->users_edit($id)->row_array();
			$this->load->view('administrator/mod_users/view_users_tambah2',$data);
		}
	}

	function edit_manajemenuser(){
		cek_session_admin();
		$id = $this->uri->segment(3);

		if (isset($_POST['submit'])){
			$this->model_users->users_update();
			redirect('administrator/manajemenuser');
		}else{
			$data['user'] = $this->model_users->users_edit($id)->row_array();
			$this->load->view('administrator/mod_users/view_users_edit2',$data);
		}
	}

	function delete_manajemenuser(){
		$id = $this->uri->segment(3);
		$this->model_users->users_delete($id);
		redirect('administrator/manajemenuser');
	}


	function logout(){
		$this->session->sess_destroy();
		redirect('administrator');
	}


	// Controller Modul Album

	function album(){
		cek_session_admin();
		$data['album'] = $this->model_galeri->album();
		$this->load->view('administrator/mod_album/view_album2',$data);
	}

	function tambah_album(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_galeri->album_tambah();
			$this->model_galeri->en_album_tambah();
			redirect('administrator/album');
		}else{
			$this->load->view('administrator/mod_album/view_album_tambah2');
		}
	}

	function edit_album(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_galeri->album_update();
			$this->model_galeri->en_album_update();
			redirect('administrator/album');
		}else{
			$data['album'] = $this->model_galeri->album_edit($id)->row_array();
			$data['album_en'] = $this->model_galeri->en_album_edit($id)->row_array();
			$this->load->view('administrator/mod_album/view_album_edit2',$data);
		}
	}

	function delete_album(){
		$id = $this->uri->segment(3);
		$this->model_galeri->album_delete($id);
		redirect('administrator/album');
	}


	// Controller Modul Galeri

	function galeri(){
		cek_session_admin();
		$data['gbr'] = $this->model_galeri->galeri();
		$data['gambar'] = $this->model_galeri->album();
		$this->load->view('administrator/mod_galeri/view_galeri2',$data);
	}

	function tambah_galeri(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_galeri->galeri_tambah();
			$this->model_galeri->en_galeri_tambah();
			redirect('administrator/galeri');
		}else{
			$data['gambar'] = $this->model_galeri->album();
			$data['gambar2'] = $this->model_galeri->en_album();
			$this->load->view('administrator/mod_galeri/view_galeri_tambah2',$data);
		}
	}

	function edit_galeri(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_galeri->galeri_update();
			$this->model_galeri->en_galeri_update();
			redirect('administrator/galeri');
		}else{
			$data['select_album'] = $this->model_galeri->album();
			$data['galeri'] = $this->model_galeri->galeri_edit($id)->row_array();
			$data['select_album2'] = $this->model_galeri->en_album();
			$data['galeri2'] = $this->model_galeri->en_galeri_edit($id)->row_array();
			$this->load->view('administrator/mod_galeri/view_galeri_edit2',$data);
		}
	}

	function delete_galeri(){
		$id = $this->uri->segment(3);
		$this->model_galeri->galeri_delete($id);
		$this->model_galeri->en_galeri_delete($id);
		redirect('administrator/galeri');
	}


	// Controller Tahun Penghargaan
	function tahun_penghargaan(){
		cek_session_admin();
		$data['tahun'] = $this->model_penghargaan->tahun_penghargaan();
		$this->load->view('administrator/mod_thnpenghargaan/view_thn',$data);
	}

	function tambah_tahun(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_penghargaan->tahun_penghargaan_tambah();
			
			redirect('administrator/tahun_penghargaan');
		}else{
			$data['tahun'] = $this->model_penghargaan->tahun_penghargaan();
			
			$this->load->view('administrator/mod_thnpenghargaan/view_thn_tambah',$data);
		}
	}

	function delete_tahun(){
		$id = $this->uri->segment(3);
		$this->model_penghargaan->tahun_penghargaan_delete($id);
		redirect('administrator/tahun_penghargaan');
	}

	// Controller Berita Penghargaan dan Sertifikasi
	function berita_penghargaan(){
		cek_session_admin();
		$data['record'] = $this->model_penghargaan->berita_penghargaan();
		$this->load->view('administrator/mod_berita_penghargaan/view_penghargaan',$data);
	}

	function tambah_penghargaan(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_penghargaan->berita_penghargaan_tambah();
			$this->model_penghargaan->en_berita_penghargaan_tambah();
			redirect('administrator/berita_penghargaan');
		}else{
			$data['thn'] = $this->model_penghargaan->tahun_penghargaan();
			$this->load->view('administrator/mod_berita_penghargaan/view_penghargaan_tambah',$data);
		}
	}

	function edit_penghargaan(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_penghargaan->berita_penghargaan_update();
			$this->model_penghargaan->en_berita_penghargaan_update();
			redirect('administrator/berita_penghargaan');
		}else{
			$data['tahun'] = $this->model_penghargaan->tahun_penghargaan();
			$data['penghargaan'] = $this->model_penghargaan->berita_penghargaan_edit($id)->row_array();
			$data['penghargaan_en'] = $this->model_penghargaan->en_berita_penghargaan_edit($id)->row_array();
			$this->load->view('administrator/mod_berita_penghargaan/view_penghargaan_edit',$data);
		}
	}

	function delete_penghargaan(){
		$id = $this->uri->segment(3);
		$this->model_penghargaan->berita_penghargaan_delete($id);
		$this->model_penghargaan->en_berita_penghargaan_delete($id);
		redirect('administrator/berita_penghargaan');
	}


	// Controller Judul Tanggung Jawab Sosial
	function jdl_tanggungjwb(){
		cek_session_admin();
		$data['jdl'] = $this->model_tanggungjwb->jdl_tanggungjwb();

		$this->load->view('administrator/mod_jdl_tanggungjwb/view_jdl',$data);
	}

	function tambah_jdl_tanggungjwb(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_tanggungjwb->jdl_tanggungjwb_tambah();
			$this->model_tanggungjwb->en_jdl_tanggungjwb_tambah();
			redirect('administrator/jdl_tanggungjwb');
		}else{
			$data['jdl'] = $this->model_tanggungjwb->jdl_tanggungjwb();
			$data['jdl_en'] = $this->model_tanggungjwb->en_jdl_tanggungjwb();
			$this->load->view('administrator/mod_jdl_tanggungjwb/view_jdl_tambah',$data);
		}
	}

	function edit_jdl_tanggungjwb(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_tanggungjwb->jdl_tanggungjwb_update();
			$this->model_tanggungjwb->en_jdl_tanggungjwb_update();
			redirect('administrator/jdl_tanggungjwb');
		}else{
			$data['jdl'] = $this->model_tanggungjwb->jdl_tanggungjwb_edit($id)->row_array();
			$data['ambil'] = $this->model_tanggungjwb->jdl_tanggungjwb();
			$data['jdl_en'] = $this->model_tanggungjwb->en_jdl_tanggungjwb_edit($id)->row_array();
			$this->load->view('administrator/mod_jdl_tanggungjwb/view_jdl_edit',$data);
		}
	}

	function delete_jdl_tanggungjwb(){
		$id = $this->uri->segment(3);
		$this->model_tanggungjwb->jdl_tanggungjwb_delete($id);
		$this->model_tanggungjwb->en_jdl_tanggungjwb_delete($id);
		redirect('administrator/jdl_tanggungjwb');
	}
	
	// Controller Berita Tanggung Jawab Sosial
	function berita_tanggungjwb(){
		cek_session_admin();
		$data['berita'] = $this->model_tanggungjwb->berita_tanggungjwb();

		$this->load->view('administrator/mod_berita_tanggungjwb/view_tanggungjwb',$data);
	}

	function tambah_berita_tanggungjwb(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_tanggungjwb->berita_tanggungjwb_tambah();
			$this->model_tanggungjwb->en_berita_tanggungjwb_tambah();
			redirect('administrator/berita_tanggungjwb');
		}else{
			$data['jdl'] = $this->model_tanggungjwb->jdl_tanggungjwb();
			$data['berita'] = $this->model_tanggungjwb->berita_tanggungjwb();

			$data['jdl_en'] = $this->model_tanggungjwb->en_jdl_tanggungjwb();
			$data['berita_en'] = $this->model_tanggungjwb->en_berita_tanggungjwb();
			$this->load->view('administrator/mod_berita_tanggungjwb/view_tanggungjwb_tambah',$data);
		}
	}

	function edit_berita_tanggungjwb(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_tanggungjwb->berita_tanggungjwb_update();
			$this->model_tanggungjwb->en_berita_tanggungjwb_update();
			redirect('administrator/berita_tanggungjwb');
		}else{
			$data['jdl'] = $this->model_tanggungjwb->jdl_tanggungjwb();
			$data['brt'] = $this->model_tanggungjwb->berita_tanggungjwb_edit($id)->row_array();

			$data['jdl_en'] = $this->model_tanggungjwb->en_jdl_tanggungjwb();
			$data['brt_en'] = $this->model_tanggungjwb->en_berita_tanggungjwb_edit($id)->row_array();
			$this->load->view('administrator/mod_berita_tanggungjwb/view_tanggungjwb_edit',$data);
		}
	}

	function delete_berita_tanggungjwb(){
		$id = $this->uri->segment(3);
		$this->model_tanggungjwb->berita_tanggungjwb_delete($id);
		$this->model_tanggungjwb->en_berita_tanggungjwb_delete($id);
		redirect('administrator/berita_tanggungjwb');
	}


	// RUPS
	function jdl_rups(){
		cek_session_admin();
		$data['jdl_rups'] = $this->model_rups->jdl_rups();
		$data['jdl_rups_en'] = $this->model_rups->en_jdl_rups();

		$this->load->view('administrator/mod_jdl_rups/view_jdl_rups',$data);
	}

	function tambah_jdl_rups(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_rups->jdl_rups_tambah();
			$this->model_rups->en_jdl_rups_tambah();
			redirect('administrator/jdl_rups');
		}else{
			$data['jdl'] = $this->model_rups->jdl_rups();
			$data['jdl_en'] = $this->model_rups->en_jdl_rups();
			$this->load->view('administrator/mod_jdl_rups/view_jdl_rups_tambah',$data);
		}
	}

	function edit_jdl_rups(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_rups->jdl_rups_update();
			$this->model_rups->en_jdl_rups_update();
			redirect('administrator/jdl_rups');
		}else{
			$data['jdl_rups'] = $this->model_rups->jdl_rups_edit($id)->row_array();
			$data['jdl_rups_en'] = $this->model_rups->en_jdl_rups_edit($id)->row_array();
			$this->load->view('administrator/mod_jdl_rups/view_jdl_rups_edit',$data);
		}
	}

	function delete_jdl_rups(){
		$id = $this->uri->segment(3);
		$this->model_rups->jdl_rups_delete($id);
		$this->model_rups->en_jdl_rups_delete($id);
		redirect('administrator/jdl_rups');
	}


	function berita_rups(){
		cek_session_admin();
		$data['berita'] = $this->model_rups->berita_rups();

		$this->load->view('administrator/mod_berita_rups/view_rups',$data);
	}

	function tambah_berita_rups(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_rups->berita_rups_tambah();
			$this->model_rups->en_berita_rups_tambah();
			redirect('administrator/berita_rups');
		}else{
			$data['jdl_rups'] = $this->model_rups->jdl_rups();
			$data['berita'] = $this->model_rups->berita_rups();
			$data['jdl_rups_en'] = $this->model_rups->en_jdl_rups();
			$data['berita_en'] = $this->model_rups->en_berita_rups();
			$this->load->view('administrator/mod_berita_rups/view_rups_tambah',$data);
		}
	}

	function edit_berita_rups(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_rups->berita_rups_update();
			$this->model_rups->en_berita_rups_update();
			redirect('administrator/berita_rups');
		}else{
			$data['jdl'] = $this->model_rups->jdl_rups();
			$data['brt'] = $this->model_rups->berita_rups_edit($id)->row_array();
			$data['jdl_en'] = $this->model_rups->en_jdl_rups();
			$data['brt_en'] = $this->model_rups->en_berita_rups_edit($id)->row_array();
			$this->load->view('administrator/mod_berita_rups/view_rups_edit',$data);
		}
	}

	function delete_berita_rups(){
		$id = $this->uri->segment(3);
		$this->model_rups->berita_rups_delete($id);
		$this->model_rups->en_berita_rups_delete($id);
		redirect('administrator/berita_rups');
	}

	// Controller Tahun Dividen
	function thn_dividen(){
		cek_session_admin();
		$data['tahun'] = $this->model_dividen->thn_dividen();
		$this->load->view('administrator/mod_thndividen/view_thn',$data);
	}

	function tambah_thn_dividen(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_dividen->thn_dividen_tambah();
			redirect('administrator/thn_dividen');
		}else{
			$data['tahun'] = $this->model_dividen->thn_dividen();
			$this->load->view('administrator/mod_thndividen/view_thn_tambah',$data);
		}
	}

	function delete_thn_dividen(){
		$id = $this->uri->segment(3);
		$this->model_dividen->thn_dividen_delete($id);
		redirect('administrator/thn_dividen');
	}

	function isi_dividen(){
		cek_session_admin();
		$data['dividen'] = $this->model_dividen->isi_dividen();
		$this->load->view('administrator/mod_berita_dividen/view_dividen',$data);
	}

	function tambah_isi_dividen(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_dividen->isi_dividen_tambah();
			$this->model_dividen->en_isi_dividen_tambah();
			redirect('administrator/isi_dividen');
		}else{
			$data['thn'] = $this->model_dividen->thn_dividen();
			$data['dividen'] = $this->model_dividen->isi_dividen();
			$this->load->view('administrator/mod_berita_dividen/view_dividen_tambah',$data);
		}
	}

	function edit_isi_dividen(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_dividen->isi_dividen_update();
			$this->model_dividen->en_isi_dividen_update();
			redirect('administrator/isi_dividen');
		}else{
			$data['thn'] = $this->model_dividen->thn_dividen();
			$data['dividen'] = $this->model_dividen->isi_dividen_edit($id)->row_array();
			$data['dividen_en'] = $this->model_dividen->en_isi_dividen_edit($id)->row_array();
			$this->load->view('administrator/mod_berita_dividen/view_dividen_edit',$data);
		}
	}

	function delete_isi_dividen(){
		$id = $this->uri->segment(3);
		$this->model_dividen->isi_dividen_delete($id);
		$this->model_dividen->en_isi_dividen_delete($id);
		redirect('administrator/isi_dividen');
	}

	// Controller Tahun Laporan Keuangan
	function tahun_lapkeu(){
		cek_session_admin();
		$data['tahun'] = $this->model_lapkeu->tahun_lapkeu();
		$this->load->view('administrator/mod_thnlapkeu/view_thn',$data);
	}

	function tambah_tahun_lapkeu(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_lapkeu->tahun_lapkeu_tambah();
			redirect('administrator/tahun_lapkeu');
		}else{
			$data['tahun'] = $this->model_lapkeu->tahun_lapkeu();
			$this->load->view('administrator/mod_thnlapkeu/view_thn_tambah',$data);
		}
	}

	function delete_tahun_lapkeu(){
		$id = $this->uri->segment(3);
		$this->model_lapkeu->tahun_lapkeu_delete($id);
		redirect('administrator/tahun_lapkeu');
	}

	function lapkeu(){
		cek_session_admin();
		$data['dokumen'] = $this->model_lapkeu->lapkeu();
		$this->load->view('administrator/mod_dokumen_lapkeu/view_lapkeu',$data);
	}

	function tambah_lapkeu(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_lapkeu->lapkeu_tambah();
			$this->model_lapkeu->en_lapkeu_tambah();
			redirect('administrator/lapkeu');
		}else{
			$data['dokumen'] = $this->model_lapkeu->lapkeu();
			$data['dokumen_en'] = $this->model_lapkeu->en_lapkeu();
			$data['tahun'] = $this->model_lapkeu->tahun_lapkeu();
			$this->load->view('administrator/mod_dokumen_lapkeu/view_lapkeu_tambah',$data);
		}
	}

	function edit_lapkeu(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_lapkeu->lapkeu_update();
			$this->model_lapkeu->en_lapkeu_update();
			redirect('administrator/lapkeu');
		}else{
			$data['thn'] = $this->model_lapkeu->tahun_lapkeu();
			$data['dokumen'] = $this->model_lapkeu->lapkeu_edit($id)->row_array();
			$data['dokumen_en'] = $this->model_lapkeu->en_lapkeu_edit($id)->row_array();
			$this->load->view('administrator/mod_dokumen_lapkeu/view_lapkeu_edit',$data);
		}
	}

	function delete_lapkeu(){
		$id = $this->uri->segment(3);
		$this->model_lapkeu->lapkeu_delete($id);
		$this->model_lapkeu->en_lapkeu_delete($id);
		redirect('administrator/lapkeu');
	}

	function dokber(){
		cek_session_admin();
		$data['dokber'] = $this->model_dokber->dokumen_berita();
		$data['jdl_berita'] = $this->model_berita->list_berita();
		$data['kat_berita'] = $this->model_berita->kategori_berita();

		$this->load->view('administrator/mod_dokumen_berita/view_dokber',$data);
	}

	function tambah_dokber(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_dokber->dokumen_berita_tambah();
			$this->model_dokber->en_dokumen_berita_tambah();
			redirect('administrator/dokber');
		}else{
			$data['dokber'] = $this->model_dokber->dokumen_berita();
			$data['katber'] = $this->model_berita->kategori_beritaberdokumen();
			$data['jdl_berita'] = $this->model_berita->list_berita();
			$data['judul_berita2'] = $this->model_berita->list_berita_sortir();

			$data['dokber_en'] = $this->model_dokber->en_dokumen_berita();
			$data['katber_en'] = $this->model_berita->en_kategori_beritaberdokumen();
			$data['jdl_berita_en'] = $this->model_berita->en_list_berita();
			$data['judul_berita2_en'] = $this->model_berita->en_list_berita_sortir();
			$this->load->view('administrator/mod_dokumen_berita/view_dokber_tambah',$data);
		}
	}

	function edit_dokber(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_dokber->dokumen_berita_update();
			$this->model_dokber->en_dokumen_berita_update();
			redirect('administrator/dokber');
		}else{
			$data['katber'] = $this->model_berita->kategori_beritaberdokumen();
			$data['jdl_berita'] = $this->model_berita->list_berita();
			$data['judul_berita2'] = $this->model_berita->list_berita_sortir();
			$data['dokber'] = $this->model_dokber->dokumen_berita_edit($id)->row_array();

			$data['katber_en'] = $this->model_berita->en_kategori_beritaberdokumen();
			$data['jdl_berita_en'] = $this->model_berita->en_list_berita();
			$data['judul_berita2_en'] = $this->model_berita->en_list_berita_sortir();
			$data['dokber_en'] = $this->model_dokber->en_dokumen_berita_edit($id)->row_array();
			$this->load->view('administrator/mod_dokumen_berita/view_dokber_edit',$data);
		}
	}

	function delete_dokber(){
		$id = $this->uri->segment(3);
		$this->model_dokber->dokumen_berita_delete($id);
		$this->model_dokber->en_dokumen_berita_delete($id);
		redirect('administrator/dokber');
	}

	


}
