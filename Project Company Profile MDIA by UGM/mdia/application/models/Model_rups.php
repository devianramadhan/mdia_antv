<?php 
class Model_rups extends CI_model{

    function jdl_rups(){
        return $this->db->query("SELECT * FROM judul_rups ORDER BY id_judul desc");
    }

    function en_jdl_rups(){
        return $this->db->query("SELECT * FROM judul_rups_en ORDER BY id_judul desc");
    }
    

    function jdl_rups_tambah(){
        $datadb = array('id_judul'=>$this->db->escape_str($this->input->post('a')),
                        'judul'=>$this->db->escape_str($this->input->post('b')));
        $this->db->insert('judul_rups',$datadb);
    }

    function jdl_rups_edit($id){
        return $this->db->query("SELECT * FROM judul_rups where id_judul='$id'");
    }

    function jdl_rups_update(){
        $datadb = array('judul'=>$this->db->escape_str($this->input->post('b')));
        $this->db->where('id_judul',$this->input->post('id'));
        $this->db->update('judul_rups',$datadb);
    }


    function jdl_rups_delete($id){
        return $this->db->query("DELETE FROM judul_rups where id_judul='$id'");
    }

// EN

    function en_jdl_rups_tambah(){
        $datadb = array('id_judul'=>$this->db->escape_str($this->input->post('a')),
                        'judul'=>$this->db->escape_str($this->input->post('d')));
        $this->db->insert('judul_rups_en',$datadb);
    }

    function en_jdl_rups_edit($id){
        return $this->db->query("SELECT * FROM judul_rups_en where id_judul='$id'");
    }

    function en_jdl_rups_update(){
        $datadb = array('judul'=>$this->db->escape_str($this->input->post('z')));
        $this->db->where('id_judul',$this->input->post('id'));
        $this->db->update('judul_rups_en',$datadb);
    }


    function en_jdl_rups_delete($id){
        return $this->db->query("DELETE a.*, b.* FROM judul_rups_en a JOIN berita_rups_en b ON a.id_judul = b.id_judul where a.id_judul='$id'");
    }


    function berita_rups(){
        return $this->db->query("SELECT a.*, b.id_judul FROM berita_rups a LEFT JOIN judul_rups b ON a.id_judul=b.id_judul ORDER BY a.id_judul DESC");
    }

    function berita_rups_tambah(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('d');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id'=>$this->db->escape_str($this->input->post('a')),
                                'id_judul'=>$this->db->escape_str($this->input->post('b')),
                                'berita_rups'=>$this->db->escape_str($this->input->post('c')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id'=>$this->db->escape_str($this->input->post('a')),
                                'id_judul'=>$this->db->escape_str($this->input->post('b')),
                                'berita_rups'=>$this->db->escape_str($this->input->post('c')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->insert('berita_rups',$datadb);
    }

    function berita_rups_edit($id){
        return $this->db->query("SELECT * FROM berita_rups where id='$id'");
    }

    function berita_rups_update(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('d');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_judul'=>$this->db->escape_str($this->input->post('b')),
                                'berita_rups'=>$this->db->escape_str($this->input->post('c')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_judul'=>$this->db->escape_str($this->input->post('b')),
                                'berita_rups'=>$this->db->escape_str($this->input->post('c')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('berita_rups',$datadb);
    }

    function berita_rups_delete($id){
        return $this->db->query("DELETE FROM berita_rups where id='$id'");
    }

    // RUPS EN
    function en_berita_rups(){
        return $this->db->query("SELECT a.*, b.id_judul FROM berita_rups_en a LEFT JOIN judul_rups_en b ON a.id_judul=b.id_judul ORDER BY a.id_judul DESC");
    }

    function en_berita_rups_tambah(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('h');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id'=>$this->db->escape_str($this->input->post('a')),
                                'id_judul'=>$this->db->escape_str($this->input->post('f')),
                                'berita_rups'=>$this->db->escape_str($this->input->post('g')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id'=>$this->db->escape_str($this->input->post('a')),
                                'id_judul'=>$this->db->escape_str($this->input->post('f')),
                                'berita_rups'=>$this->db->escape_str($this->input->post('g')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->insert('berita_rups_en',$datadb);
    }

    function en_berita_rups_edit($id){
        return $this->db->query("SELECT * FROM berita_rups_en where id='$id'");
    }

    function en_berita_rups_update(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('g');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_judul'=>$this->db->escape_str($this->input->post('e')),
                                'berita_rups'=>$this->db->escape_str($this->input->post('f')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_judul'=>$this->db->escape_str($this->input->post('e')),
                                'berita_rups'=>$this->db->escape_str($this->input->post('f')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('berita_rups_en',$datadb);
    }

    function en_berita_rups_delete($id){
        return $this->db->query("DELETE FROM berita_rups_en where id='$id'");
    }

    function ambilrupsberita(){
        return $this->db->query("SELECT * from berita_rups");
    }

    function ambiljudulrupsberita(){
        return $this->db->query("SELECT * from judul_rups");
    }

    function ambildokumen(){
        return $this->db->query("SELECT * FROM berita_rups");
    }

    function en_ambilrupsberita(){
        return $this->db->query("SELECT * from berita_rups_en");
    }

    function en_ambiljudulrupsberita(){
        return $this->db->query("SELECT * from judul_rups_en");
    }

    function en_ambildokumen(){
        return $this->db->query("SELECT * FROM berita_rups_en");
    }
}