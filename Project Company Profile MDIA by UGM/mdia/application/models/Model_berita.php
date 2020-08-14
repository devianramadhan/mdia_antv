<?php 
class Model_berita extends CI_model{
    function kategori_berita(){
        return $this->db->query("SELECT * FROM kategori_berita ORDER BY id_kategori DESC");
    }

    function en_kategori_berita(){
        return $this->db->query("SELECT * FROM kategori_berita_en ORDER BY id_kategori DESC");
    }

    function kategori_beritaberdokumen(){
        return $this->db->query("SELECT * FROM kategori_berita ORDER BY id_kategori asc limit 4");
    }

    function en_kategori_beritaberdokumen(){
        return $this->db->query("SELECT * FROM kategori_berita_en ORDER BY id_kategori asc limit 4");
    }

    function kategori_berita_tambah(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')));
        $this->db->insert('kategori_berita',$datadb);
    }

    function en_kategori_berita_tambah(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('c')));
        $this->db->insert('kategori_berita_en',$datadb);
    }

    function kategori_berita_edit($id){
        return $this->db->query("SELECT * FROM kategori_berita where id_kategori='$id'");
    }

    function kategori_berita_update(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')));
        $this->db->where('id_kategori',$this->input->post('id'));
        $this->db->update('kategori_berita',$datadb);
    }

    function en_kategori_berita_edit($id){
        return $this->db->query("SELECT * FROM kategori_berita_en where id_kategori='$id'");
    }

    function en_kategori_berita_update(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('z')));
        $this->db->where('id_kategori',$this->input->post('id'));
        $this->db->update('kategori_berita_en',$datadb);
    }

    function kategori_berita_delete($id){
        return $this->db->query("DELETE FROM kategori_berita where id_kategori='$id'");
    }

    function en_kategori_berita_delete($id){
        return $this->db->query("DELETE FROM kategori_berita_en where id_kategori='$id'");
    }

    function list_berita_rss(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM berita a LEFT JOIN kategori b ON a.id_kategori=b.id_kategori ORDER BY a.id_berita DESC LIMIT 10");
    }

    function list_berita(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM berita a LEFT JOIN kategori_berita b ON a.idkategori=b.id_kategori ORDER BY a.id_berita DESC");
    }

    function en_list_berita(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM berita_en a LEFT JOIN kategori_berita_en b ON a.idkategori=b.id_kategori ORDER BY a.id_berita DESC");
    }

    function list_berita_sortir(){
        return $this->db->query("SELECT * from berita left join kategori_berita on idkategori=id_kategori where idkategori='1' or idkategori='3' or idkategori='5' or idkategori='7'");
    }

    function en_list_berita_sortir(){
        return $this->db->query("SELECT * from berita_en left join kategori_berita_en on idkategori=id_kategori where idkategori='1' or idkategori='3' or idkategori='5' or idkategori='7'");
    }

    function list_berita_tambah(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|pdf';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('idkategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul_berita'=>$this->db->escape_str($this->input->post('a')),
                                'isi_berita'=>$this->input->post('d'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('idkategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul_berita'=>$this->db->escape_str($this->input->post('a')),
                                'isi_berita'=>$this->input->post('d'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->insert('berita',$datadb);
    }

    function en_list_berita_tambah(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|pdf';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('k');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('idkategori'=>$this->db->escape_str($this->input->post('h')),
                                'username'=>$this->db->escape_str($this->input->post('z')),
                                'judul_berita'=>$this->db->escape_str($this->input->post('g')),
                                'isi_berita'=>$this->input->post('j'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('idkategori'=>$this->db->escape_str($this->input->post('h')),
                                'username'=>$this->db->escape_str($this->input->post('z')),
                                'judul_berita'=>$this->db->escape_str($this->input->post('g')),
                                'isi_berita'=>$this->input->post('j'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->insert('berita_en',$datadb);
    }

    function list_berita_edit($id){
        return $this->db->query("SELECT * FROM berita where id_berita='$id'");
    }

    function en_list_berita_edit($id){
        return $this->db->query("SELECT * FROM berita_en where id_berita='$id'");
    }

    function list_berita_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('idkategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('f')),
                                'judul_berita'=>$this->db->escape_str($this->input->post('a')),
                                'isi_berita'=>$this->input->post('d'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('idkategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('f')),
                                'judul_berita'=>$this->db->escape_str($this->input->post('a')),
                                'isi_berita'=>$this->input->post('d'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->where('id_berita',$this->input->post('id'));
        $this->db->update('berita',$datadb);
    }

    function en_list_berita_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('j');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('idkategori'=>$this->db->escape_str($this->input->post('h')),
                                'username'=>$this->db->escape_str($this->input->post('m')),
                                'judul_berita'=>$this->db->escape_str($this->input->post('g')),
                                'isi_berita'=>$this->input->post('i'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('idkategori'=>$this->db->escape_str($this->input->post('h')),
                                'username'=>$this->db->escape_str($this->input->post('m')),
                                'judul_berita'=>$this->db->escape_str($this->input->post('g')),
                                'isi_berita'=>$this->input->post('i'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name']);
            }
        $this->db->where('id_berita',$this->input->post('id'));
        $this->db->update('berita_en',$datadb);
    }

    function list_berita_delete($id){
        return $this->db->query("DELETE FROM berita where id_berita='$id'");
    }

    function en_list_berita_delete($id){
        return $this->db->query("DELETE FROM berita_en where id_berita='$id'");
    }

    function ambillaporanberita(){
        return $this->db->query("SELECT * from berita where idkategori = '1' order by id_berita asc");
    }

    function en_ambillaporanberita(){
        return $this->db->query("SELECT * from berita_en where idkategori = '1' order by id_berita asc");
    }

    function ambilpersberita(){
        return $this->db->query("SELECT * from berita where idkategori = '3' order by id_berita asc");
    }

    function en_ambilpersberita(){
        return $this->db->query("SELECT * from berita_en where idkategori = '3' order by id_berita asc");
    }

    function ambillapkeu(){
        return $this->db->query("SELECT * from berita where id_kategori = '2' order by id_berita asc");
    }

    function ambilberitapros(){
        return $this->db->query("SELECT * from berita where idkategori = '7' order by id_berita asc");
    }

    function en_ambilberitapros(){
        return $this->db->query("SELECT * from berita_en where idkategori = '7' order by id_berita asc");
    }

    function ambilberitapapub(){
        return $this->db->query("SELECT * from berita where idkategori = '5' order by id_berita asc");
    }

    function en_ambilberitapapub(){
        return $this->db->query("SELECT * from berita_en where idkategori = '5' order by id_berita asc");
    }

    function ambildekom1(){
        return $this->db->query("SELECT * FROM berita where idkategori = '8'");
    }

    function en_ambildekom1(){
        return $this->db->query("SELECT * FROM berita_en where idkategori = '8'");
    }
    
    function ambildireksi(){
        return $this->db->query("SELECT * FROM berita where idkategori = '9'");
    }

    function en_ambildireksi(){
        return $this->db->query("SELECT * FROM berita_en where idkategori = '9'");
    }
    
    function ambilprofesi(){
        return $this->db->query("SELECT * FROM berita where idkategori = '10'");
    }

    function en_ambilprofesi(){
        return $this->db->query("SELECT * FROM berita_en where idkategori = '10'");
    }



    // function ambilberita2015(){
    //     return $this->db->query("SELECT * from berita where id_berita='5'");
    // }

    // function ambilberita2014(){
    //     return $this->db->query("SELECT * from berita where id_berita='6'");
    // }

    // function ambilberita2013(){
    //     return $this->db->query("SELECT * from berita where id_berita='7'");
    // }
}