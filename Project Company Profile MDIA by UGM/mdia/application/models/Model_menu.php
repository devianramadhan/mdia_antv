<?php 
class Model_menu extends CI_model{
    function menuutama(){
        return $this->db->query("SELECT * FROM main_menu");
    }

    function en_menuutama(){
        return $this->db->query("SELECT * FROM main_menu_en");
    }

    function menuutamaaktif(){
        return $this->db->query("SELECT * FROM main_menu where aktif='Y'");
    }

    function submenuaktif1(){
        return $this->db->query("SELECT * FROM sub_menu where aktif='Y'");
    }



    function subsubmenuaktif(){
        return $this->db->query("SELECT * FROM subsub_menu where aktif='Y'");
    }

    

    function en_dokumen(){
        return $this->db->query("SELECT * FROM dokumen_en");
    }

    function dokumen(){
        return $this->db->query("SELECT * FROM dokumen");
    }

    function en_menuutamaaktif(){
        return $this->db->query("SELECT * FROM main_menu_en where aktif='Y'");
    }

    function en_submenuaktif1(){
        return $this->db->query("SELECT * FROM sub_menu_en where aktif='Y'");
    }

    

    function en_subsubmenuaktif(){
        return $this->db->query("SELECT * FROM subsub_menu_en where aktif='Y'");
    }

// INSERT, EDIT, DELETE MENU UTAMA
    function menuutama_tambah(){
            $datadb = array('nama_menu'=>$this->db->escape_str($this->input->post('a')),
                            'link'=>$this->db->escape_str($this->input->post('b')),
                            'aktif'=>$this->db->escape_str($this->input->post('c')),
                            'admin_menu'=>$this->db->escape_str($this->input->post('d')));
        $this->db->insert('main_menu',$datadb);
    }

    function menuutama_update(){
            $datadb = array('nama_menu'=>$this->db->escape_str($this->input->post('a')),
                            'link'=>$this->db->escape_str($this->input->post('b')),
                            'aktif'=>$this->db->escape_str($this->input->post('c')),
                            'admin_menu'=>$this->db->escape_str($this->input->post('d')));
        $this->db->where('id_main',$this->input->post('id'));
        $this->db->update('main_menu',$datadb);
    }

    function menuutama_edit($id){
        return $this->db->query("SELECT * FROM main_menu where id_main='$id'");
    }

    function menuutama_delete($id){
        return $this->db->query("DELETE FROM main_menu where id_main='$id'");
    }

// INSERT, EDIT, DELETE MENU UTAMA EN
    function en_menuutama_tambah(){
            $datadb = array('nama_menu'=>$this->db->escape_str($this->input->post('e')),
                            'link'=>$this->db->escape_str($this->input->post('f')),
                            'aktif'=>$this->db->escape_str($this->input->post('g')),
                            'admin_menu'=>$this->db->escape_str($this->input->post('h')));
        $this->db->insert('main_menu_en',$datadb);
    }

    function en_menuutama_update(){
            $datadb = array('nama_menu'=>$this->db->escape_str($this->input->post('f')),
                            'link'=>$this->db->escape_str($this->input->post('g')),
                            'aktif'=>$this->db->escape_str($this->input->post('h')),
                            'admin_menu'=>$this->db->escape_str($this->input->post('i')));
        $this->db->where('id_main',$this->input->post('id'));
        $this->db->update('main_menu_en',$datadb);
    }

    function en_menuutama_edit($id){
        return $this->db->query("SELECT * FROM main_menu_en where id_main='$id'");
    }

    function en_menuutama_delete($id){
        return $this->db->query("DELETE FROM main_menu_en where id_main='$id'");
    }

    function cek_menuutama(){
        return $this->db->query("SELECT * FROM main_menu");
    }

    function en_cek_menuutama(){
        return $this->db->query("SELECT * FROM main_menu_en");
    }
    
    function mainmenu_admin(){
        return $this->db->query("SELECT * FROM main_menu WHERE aktif = 'N' AND admin_menu= 'Y'");
    }

    function mainmenu_user(){
        return $this->db->query("SELECT * FROM main_menu WHERE aktif = 'N' AND user_menu = 'Y'");
    }

    //sub menu

    function submenu(){
        return $this->db->query("SELECT a.*, b.nama_menu FROM sub_menu a LEFT JOIN main_menu b ON a.id_main=b.id_main");
    }

    function submenu_tambah(){
        $datadb = array('nama_sub'=>$this->db->escape_str($this->input->post('a')),
                        'link_sub'=>$this->db->escape_str($this->input->post('d')),
                        'id_main'=>$this->db->escape_str($this->input->post('b')),
                        'aktif'=>$this->db->escape_str($this->input->post('e')),
                        'admin_submenu'=>$this->db->escape_str($this->input->post('f')));
        $this->db->insert('sub_menu',$datadb);
    }

    function submenu_update(){
        $datadb = array('nama_sub'=>$this->db->escape_str($this->input->post('a')),
                        'link_sub'=>$this->db->escape_str($this->input->post('d')),
                        'id_main'=>$this->db->escape_str($this->input->post('b')),
                        'aktif'=>$this->db->escape_str($this->input->post('e')),
                        'admin_submenu'=>$this->db->escape_str($this->input->post('f')));
        $this->db->where('id_sub',$this->input->post('id'));
        $this->db->update('sub_menu',$datadb);
    }

    function submenu_edit($id){
        return $this->db->query("SELECT * FROM sub_menu where id_sub='$id'");
    }

    function submenu_delete($id){
        return $this->db->query("DELETE FROM sub_menu where id_sub='$id'");
    }

    //sub menu EN

    function en_submenu(){
        return $this->db->query("SELECT a.*, b.nama_menu FROM sub_menu_en a LEFT JOIN main_menu_en b ON a.id_main=b.id_main");
    }

    function en_submenu_tambah(){
        $datadb = array('nama_sub'=>$this->db->escape_str($this->input->post('g')),
                        'link_sub'=>$this->db->escape_str($this->input->post('i')),
                        'id_main'=>$this->db->escape_str($this->input->post('h')),
                        'aktif'=>$this->db->escape_str($this->input->post('j')),
                        'admin_submenu'=>$this->db->escape_str($this->input->post('k')));
        $this->db->insert('sub_menu_en',$datadb);
    }

    function en_submenu_edit($id){
        return $this->db->query("SELECT * FROM sub_menu_en where id_sub='$id'");
    }

    function en_submenu_update(){
        $datadb = array('nama_sub'=>$this->db->escape_str($this->input->post('g')),
                        'link_sub'=>$this->db->escape_str($this->input->post('i')),
                        'id_main'=>$this->db->escape_str($this->input->post('h')),
                        'aktif'=>$this->db->escape_str($this->input->post('j')),
                        'admin_submenu'=>$this->db->escape_str($this->input->post('k')));
        $this->db->where('id_sub',$this->input->post('id'));
        $this->db->update('sub_menu_en',$datadb);
    }

    

    function en_submenu_delete($id){
        return $this->db->query("DELETE FROM sub_menu_en where id_sub='$id'");
    }

    function cek_submenu(){
        return $this->db->query("SELECT * FROM sub_menu where aktif='Y'");
    }

    function en_cek_submenu(){
        return $this->db->query("SELECT * FROM sub_menu_en where aktif='Y'");
    }

    function submenu_admin($id_main){
        return $this->db->query("SELECT * FROM sub_menu, main_menu WHERE sub_menu.id_main = main_menu.id_main AND sub_menu.id_main='$id_main' AND sub_menu.aktif='N'");
    }

    function submenu_user($id_main){
        return $this->db->query("SELECT * FROM sub_menu, main_menu WHERE sub_menu.id_main = main_menu.id_main AND sub_menu.id_main='$id_main' AND sub_menu.aktif='N'");
    }

    //sub sub menu

    function subsubmenu(){
        return $this->db->query("SELECT a.*, b.nama_sub FROM subsub_menu a LEFT JOIN sub_menu b ON a.idsub=b.id_sub");
    }

    function subsubmenu_tambah(){
        $datadb = array('nama_subsub'=>$this->db->escape_str($this->input->post('a')),
                        'link_subsub'=>$this->db->escape_str($this->input->post('d')),
                        'idsub'=>$this->db->escape_str($this->input->post('b')),
                        'aktif'=>$this->db->escape_str($this->input->post('e')),
                        'admin_subsubmenu'=>$this->db->escape_str($this->input->post('f')));
        $this->db->insert('subsub_menu',$datadb);
    }

    function subsubmenu_update(){
        $datadb = array('nama_subsub'=>$this->db->escape_str($this->input->post('a')),
                        'link_subsub'=>$this->db->escape_str($this->input->post('d')),
                        'idsub'=>$this->db->escape_str($this->input->post('b')),
                        'aktif'=>$this->db->escape_str($this->input->post('e')),
                        'admin_subsubmenu'=>$this->db->escape_str($this->input->post('f')));
        $this->db->where('id_subsub',$this->input->post('id'));
        $this->db->update('subsub_menu',$datadb);
    }

    function subsubmenu_edit($id){
        return $this->db->query("SELECT * FROM subsub_menu where id_subsub='$id'");
    }

    function subsubmenu_delete($id){
        return $this->db->query("DELETE FROM subsub_menu where id_subsub='$id'");
    }

    // function cek_subsubmenu(){
    //     return $this->db->query("SELECT * FROM sub_menu where aktif='Y'");
    // }

    // SUB SUB MENU EN
    function en_subsubmenu(){
        return $this->db->query("SELECT a.*, b.nama_sub FROM subsub_menu_en a LEFT JOIN sub_menu_en b ON a.idsub=b.id_sub");
    }

    function en_subsubmenu_tambah(){
        $datadb = array('nama_subsub'=>$this->db->escape_str($this->input->post('g')),
                        'link_subsub'=>$this->db->escape_str($this->input->post('h')),
                        'idsub'=>$this->db->escape_str($this->input->post('z')),
                        'aktif'=>$this->db->escape_str($this->input->post('i')),
                        'admin_subsubmenu'=>$this->db->escape_str($this->input->post('j')));
        $this->db->insert('subsub_menu_en',$datadb);
    }

    function en_subsubmenu_update(){
        $datadb = array('nama_subsub'=>$this->db->escape_str($this->input->post('g')),
                        'link_subsub'=>$this->db->escape_str($this->input->post('i')),
                        'idsub'=>$this->db->escape_str($this->input->post('h')),
                        'aktif'=>$this->db->escape_str($this->input->post('j')),
                        'admin_subsubmenu'=>$this->db->escape_str($this->input->post('k')));
        $this->db->where('id_subsub',$this->input->post('id'));
        $this->db->update('subsub_menu_en',$datadb);
    }

    function en_subsubmenu_edit($id){
        return $this->db->query("SELECT * FROM subsub_menu_en where id_subsub='$id'");
    }

    function en_subsubmenu_delete($id){
        return $this->db->query("DELETE FROM subsub_menu_en where id_subsub='$id'");
    }

    // function en_cek_subsubmenu(){
    //     return $this->db->query("SELECT * FROM sub_menu_en where aktif='Y'");
    // }

    function subsubmenu_admin($id_main){
        return $this->db->query("SELECT * FROM sub_menu, main_menu WHERE sub_menu.id_main = main_menu.id_main AND sub_menu.id_main='$id_main' AND sub_menu.aktif='N'");
    }

    function subsubmenu_user($id_main){
        return $this->db->query("SELECT * FROM sub_menu, main_menu WHERE sub_menu.id_main = main_menu.id_main AND sub_menu.id_main='$id_main' AND sub_menu.aktif='N'");
    }
}