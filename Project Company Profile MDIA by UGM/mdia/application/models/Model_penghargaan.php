<?php 
class Model_penghargaan extends CI_model{
    function tahun_penghargaan(){
        return $this->db->query("SELECT * FROM tahun_penghargaan ORDER BY tahun desc");
    }

    function tahun_penghargaan_tambah(){
        $datadb = array('tahun'=>$this->db->escape_str($this->input->post('a')));
        $this->db->insert('tahun_penghargaan',$datadb);
    }

    function tahun_penghargaan_delete($id){
        return $this->db->query("DELETE FROM tahun_penghargaan where tahun='$id'");
    }

    function berita_penghargaan(){
        return $this->db->query("SELECT a.*, b.tahun FROM berita_penghargaan a LEFT JOIN tahun_penghargaan b ON a.tahun_berita=b.tahun ORDER BY a.tahun_berita DESC");
    }

    function berita_penghargaan_tambah(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('f');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_penghargaan'=>$this->db->escape_str($this->input->post('a')),
                                'tahun_berita'=>$this->db->escape_str($this->input->post('b')),
                                'judul_penghargaan'=>$this->db->escape_str($this->input->post('c')),
                                'jenis'=>$this->db->escape_str($this->input->post('d')),
                                'isi'=>$this->input->post('e'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_penghargaan'=>$this->db->escape_str($this->input->post('a')),
                                'tahun_berita'=>$this->db->escape_str($this->input->post('b')),
                                'judul_penghargaan'=>$this->db->escape_str($this->input->post('c')),
                                'jenis'=>$this->db->escape_str($this->input->post('d')),
                                'isi'=>$this->input->post('e'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->insert('berita_penghargaan',$datadb);
    }

    function berita_penghargaan_edit($id){
        return $this->db->query("SELECT * FROM berita_penghargaan where id_penghargaan='$id'");
    }

    function berita_penghargaan_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('f');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('tahun_berita'=>$this->db->escape_str($this->input->post('b')),
                                'judul_penghargaan'=>$this->db->escape_str($this->input->post('c')),
                                'jenis'=>$this->db->escape_str($this->input->post('d')),
                                'isi'=>$this->input->post('e'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('tahun_berita'=>$this->db->escape_str($this->input->post('b')),
                                'judul_penghargaan'=>$this->db->escape_str($this->input->post('c')),
                                'jenis'=>$this->db->escape_str($this->input->post('d')),
                                'isi'=>$this->input->post('e'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->where('id_penghargaan',$this->input->post('id'));
        $this->db->update('berita_penghargaan',$datadb);
    }

    function berita_penghargaan_delete($id){
        return $this->db->query("DELETE FROM berita_penghargaan where id_penghargaan='$id'");
    }

// PENGHARGAAN EN
    function en_berita_penghargaan(){
        return $this->db->query("SELECT a.*, b.tahun FROM berita_penghargaan_en a LEFT JOIN tahun_penghargaan_en b ON a.tahun_berita=b.tahun ORDER BY a.tahun_berita DESC");
    }

    function en_berita_penghargaan_tambah(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('l');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_penghargaan'=>$this->db->escape_str($this->input->post('a')),
                                'tahun_berita'=>$this->db->escape_str($this->input->post('h')),
                                'judul_penghargaan'=>$this->db->escape_str($this->input->post('i')),
                                'jenis'=>$this->db->escape_str($this->input->post('j')),
                                'isi'=>$this->input->post('k'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_penghargaan'=>$this->db->escape_str($this->input->post('a')),
                                'tahun_berita'=>$this->db->escape_str($this->input->post('h')),
                                'judul_penghargaan'=>$this->db->escape_str($this->input->post('i')),
                                'jenis'=>$this->db->escape_str($this->input->post('j')),
                                'isi'=>$this->input->post('k'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->insert('berita_penghargaan_en',$datadb);
    }

    function en_berita_penghargaan_edit($id){
        return $this->db->query("SELECT * FROM berita_penghargaan_en where id_penghargaan='$id'");
    }

    function en_berita_penghargaan_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('k');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('tahun_berita'=>$this->db->escape_str($this->input->post('g')),
                                'judul_penghargaan'=>$this->db->escape_str($this->input->post('h')),
                                'jenis'=>$this->db->escape_str($this->input->post('z')),
                                'isi'=>$this->input->post('j'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('tahun_berita'=>$this->db->escape_str($this->input->post('g')),
                                'judul_penghargaan'=>$this->db->escape_str($this->input->post('h')),
                                'jenis'=>$this->db->escape_str($this->input->post('z')),
                                'isi'=>$this->input->post('j'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->where('id_penghargaan',$this->input->post('id'));
        $this->db->update('berita_penghargaan_en',$datadb);
    }

    function en_berita_penghargaan_delete($id){
        return $this->db->query("DELETE FROM berita_penghargaan_en where id_penghargaan='$id'");
    }

    function ambilpenghargaan(){
        return $this->db->query("SELECT * FROM berita_penghargaan,tahun_penghargaan where jenis='penghargaan' and tahun_berita = tahun");
    }

    function en_ambilpenghargaan(){
        return $this->db->query("SELECT * FROM berita_penghargaan_en,tahun_penghargaan where jenis='penghargaan' and tahun_berita = tahun");
    }

    function ambilsertifikasi(){
        return $this->db->query("SELECT * FROM berita_penghargaan,tahun_penghargaan where jenis='sertifikasi' and tahun_berita = tahun");
    }

    function en_ambilsertifikasi(){
        return $this->db->query("SELECT * FROM berita_penghargaan_en,tahun_penghargaan where jenis='sertifikasi' and tahun_berita = tahun");
    }

    function ambilberitapenghargaan(){
        return $this->db->query("SELECT * FROM berita_penghargaan where jenis='penghargaan' and id_penghargaan='11'");
    }

    function ambilberitapenghargaan2(){
        return $this->db->query("SELECT * FROM berita_penghargaan where jenis='penghargaan' and id_penghargaan='45'");
    }

    function ambilberitapenghargaan3(){
        return $this->db->query("SELECT * FROM berita_penghargaan where jenis='penghargaan' and id_penghargaan='2341'");
    }

    function en_ambilberitapenghargaan(){
        return $this->db->query("SELECT * FROM berita_penghargaan where jenis='penghargaan' and id_penghargaan='11'");
    }

    function en_ambilberitapenghargaan2(){
        return $this->db->query("SELECT * FROM berita_penghargaan where jenis='penghargaan' and id_penghargaan='45'");
    }

    function en_ambilberitapenghargaan3(){
        return $this->db->query("SELECT * FROM berita_penghargaan where jenis='penghargaan' and id_penghargaan='2341'");
    }
}