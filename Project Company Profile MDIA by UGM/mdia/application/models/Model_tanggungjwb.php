<?php 
class Model_tanggungjwb extends CI_model{

    function jdl_tanggungjwb(){
        return $this->db->query("SELECT * FROM judul_tanggungjawab ORDER BY id_judul desc");
    }

    function jdl_tanggungjwb_tambah(){
        $datadb = array('id_judul'=>$this->db->escape_str($this->input->post('a')),
                        'judul'=>$this->db->escape_str($this->input->post('b')),
                        'tempat'=>$this->db->escape_str($this->input->post('c')),
                        'tanggal'=>$this->db->escape_str($this->input->post('d')));
        $this->db->insert('judul_tanggungjawab',$datadb);
    }

    function jdl_tanggungjwb_edit($id){
        return $this->db->query("SELECT * FROM judul_tanggungjawab where id_judul='$id'");
    }

    function jdl_tanggungjwb_update(){
        $datadb = array('judul'=>$this->db->escape_str($this->input->post('b')),
                        'tempat'=>$this->db->escape_str($this->input->post('c')),
                        'tanggal'=>$this->db->escape_str($this->input->post('d')));
        $this->db->where('id_judul',$this->input->post('id'));
        $this->db->update('judul_tanggungjawab',$datadb);
    }


    function jdl_tanggungjwb_delete($id){
        return $this->db->query("DELETE FROM judul_tanggungjawab where id_judul='$id'");
    }

// JUDUL EN

    function en_jdl_tanggungjwb(){
        return $this->db->query("SELECT * FROM judul_tanggungjawab_en ORDER BY id_judul desc");
    }

    function en_jdl_tanggungjwb_tambah(){
        $datadb = array('id_judul'=>$this->db->escape_str($this->input->post('a')),
                        'judul'=>$this->db->escape_str($this->input->post('f')),
                        'tempat'=>$this->db->escape_str($this->input->post('g')),
                        'tanggal'=>$this->db->escape_str($this->input->post('h')));
        $this->db->insert('judul_tanggungjawab_en',$datadb);
    }

    function en_jdl_tanggungjwb_edit($id){
        return $this->db->query("SELECT * FROM judul_tanggungjawab_en where id_judul='$id'");
    }

    function en_jdl_tanggungjwb_update(){
        $datadb = array('judul'=>$this->db->escape_str($this->input->post('z')),
                        'tempat'=>$this->db->escape_str($this->input->post('y')),
                        'tanggal'=>$this->db->escape_str($this->input->post('x')));
        $this->db->where('id_judul',$this->input->post('id'));
        $this->db->update('judul_tanggungjawab_en',$datadb);
    }


    function en_jdl_tanggungjwb_delete($id){
        return $this->db->query("DELETE FROM judul_tanggungjawab_en where id_judul='$id'");
    }

    function berita_tanggungjwb(){
        return $this->db->query("SELECT a.*, b.id_judul FROM berita_tanggungjwb a LEFT JOIN judul_tanggungjawab b ON a.id_juduljudul=b.id_judul ORDER BY a.id_juduljudul DESC");
    }

    function berita_tanggungjwb_tambah(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('d');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_berita'=>$this->db->escape_str($this->input->post('a')),
                                'id_juduljudul'=>$this->db->escape_str($this->input->post('b')),
                                'keterangan'=>$this->db->escape_str($this->input->post('c')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_berita'=>$this->db->escape_str($this->input->post('a')),
                                'id_juduljudul'=>$this->db->escape_str($this->input->post('b')),
                                'keterangan'=>$this->db->escape_str($this->input->post('c')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->insert('berita_tanggungjwb',$datadb);
    }

    function berita_tanggungjwb_edit($id){
        return $this->db->query("SELECT * FROM berita_tanggungjwb where id_berita='$id'");
    }

    function berita_tanggungjwb_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('d');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_juduljudul'=>$this->db->escape_str($this->input->post('b')),
                                'keterangan'=>$this->db->escape_str($this->input->post('c')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_juduljudul'=>$this->db->escape_str($this->input->post('b')),
                                'keterangan'=>$this->db->escape_str($this->input->post('c')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->where('id_berita',$this->input->post('id'));
        $this->db->update('berita_tanggungjwb',$datadb);
    }

    function berita_tanggungjwb_delete($id){
        return $this->db->query("DELETE FROM berita_tanggungjwb where id_berita='$id'");
    }

// TANGGUNGJAWAB EN
    function en_berita_tanggungjwb(){
        return $this->db->query("SELECT a.*, b.id_judul FROM berita_tanggungjwb_en a LEFT JOIN judul_tanggungjawab_en b ON a.id_juduljudul=b.id_judul ORDER BY a.id_juduljudul DESC");
    }

    function en_berita_tanggungjwb_tambah(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('h');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_berita'=>$this->db->escape_str($this->input->post('a')),
                                'id_juduljudul'=>$this->db->escape_str($this->input->post('f')),
                                'keterangan'=>$this->db->escape_str($this->input->post('g')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_berita'=>$this->db->escape_str($this->input->post('a')),
                                'id_juduljudul'=>$this->db->escape_str($this->input->post('f')),
                                'keterangan'=>$this->db->escape_str($this->input->post('g')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->insert('berita_tanggungjwb_en',$datadb);
    }

    function en_berita_tanggungjwb_edit($id){
        return $this->db->query("SELECT * FROM berita_tanggungjwb_en where id_berita='$id'");
    }

    function en_berita_tanggungjwb_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('g');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_juduljudul'=>$this->db->escape_str($this->input->post('e')),
                                'keterangan'=>$this->db->escape_str($this->input->post('f')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_juduljudul'=>$this->db->escape_str($this->input->post('e')),
                                'keterangan'=>$this->db->escape_str($this->input->post('f')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->where('id_berita',$this->input->post('id'));
        $this->db->update('berita_tanggungjwb_en',$datadb);
    }

    function en_berita_tanggungjwb_delete($id){
        return $this->db->query("DELETE FROM berita_tanggungjwb_en where id_berita='$id'");
    }

    function ambiljudultjsp(){
        return $this->db->query("SELECT * FROM judul_tanggungjawab");
    }

    function ambilberitatjsp(){
        return $this->db->query("SELECT * FROM berita_tanggungjwb,judul_tanggungjawab where id_juduljudul = id_judul");
    }

    function en_ambiljudultjsp(){
        return $this->db->query("SELECT * FROM judul_tanggungjawab_en");
    }

    function en_ambilberitatjsp(){
        return $this->db->query("SELECT * FROM berita_tanggungjwb_en,judul_tanggungjawab_en where id_juduljudul = id_judul");
    }
}