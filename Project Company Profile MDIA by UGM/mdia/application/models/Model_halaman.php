<?php 
class Model_halaman extends CI_model{
    function halamanstatis(){
        return $this->db->query("SELECT * FROM halaman_statis ORDER BY id_halstatis DESC");
    }

    function en_halamanstatis(){
        return $this->db->query("SELECT * FROM halaman_statis_en ORDER BY id_halstatis DESC");
    }
// Profil Perusahaan
    function ambilgambarprofil(){
        return $this->db->query("SELECT gambar FROM halaman_statis where id_halstatis = '2'");
    }
    
    function ambiljudulprofil(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis where id_halstatis = '2'");
    }

    function ambilisiprofil(){
        return $this->db->query("SELECT isi_halaman FROM halaman_statis where id_halstatis = '2'");
    }
//Struktur Perusahaan & ENG

    function ambilstrorg(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis where id_halstatis = '909'");
    }

    function en_ambilstrorg(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis_en where id_halstatis = '909'");
    }

//Struktur Group & ENG

    function ambilstrgrp(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis where id_halstatis = '101'");
    }

    function en_ambilstrgrp(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis_en where id_halstatis = '101'");
    }

//Corporate Overview 
    function en_ambilgambarprofil(){
        return $this->db->query("SELECT gambar FROM halaman_statis_en where id_halstatis = '2'");
    }
    
    function en_ambiljudulprofil(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis_en where id_halstatis = '2'");
    }

    function en_ambilisiprofil(){
        return $this->db->query("SELECT isi_halaman FROM halaman_statis_en where id_halstatis = '2'");
    }

// Sambutan Direktur Utama
    function ambilgambardirut(){
        return $this->db->query("SELECT gambar FROM halaman_statis where id_halstatis = '1'");
    }
    
    function ambiljuduldirut(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis where id_halstatis = '1'");
    }

    function ambilisidirut(){
        return $this->db->query("SELECT isi_halaman FROM halaman_statis where id_halstatis = '1'");
    }

    // Sambutan Direktur Utama EN
    function en_ambilgambardirut(){
        return $this->db->query("SELECT gambar FROM halaman_statis_en where id_halstatis = '1'");
    }
    
    function en_ambiljuduldirut(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis_en where id_halstatis = '1'");
    }

    function en_ambilisidirut(){
        return $this->db->query("SELECT isi_halaman FROM halaman_statis_en where id_halstatis = '1'");
    }

    // Bisnis
    function ambilgambarbisnis(){
        return $this->db->query("SELECT gambar FROM halaman_statis where id_halstatis = '3'");
    }
    
    function en_ambilgambarbisnis(){
        return $this->db->query("SELECT gambar FROM halaman_statis_en where id_halstatis = '3'");
    }

    function ambiljudulbisnis(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis where id_halstatis = '3'");
    }

    function en_ambiljudulbisnis(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis_en where id_halstatis = '3'");
    }

    function ambilisibisnis(){
        return $this->db->query("SELECT isi_halaman FROM halaman_statis where id_halstatis = '3'");
    }

    function en_ambilisibisnis(){
        return $this->db->query("SELECT isi_halaman FROM halaman_statis_en where id_halstatis = '3'");
    }

    function ambiltransbisnis(){
        return $this->db->query("SELECT * FROM gambar where id_gambar = '7'");
    }

    // Profesi
    // function ambilgambargambar(){
    //     return $this->db->query("SELECT gambar FROM halaman_statis where id_halstatis = '4'");
    // }
    function ambiljudullembaga(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis where id_halstatis = '24'");
    }

    function en_ambiljudullembaga(){
        return $this->db->query("SELECT judul_halaman FROM halaman_statis_en where id_halstatis = '24'");
    }

// Direksi
    function ambildirek(){
        return $this->db->query("SELECT * FROM halaman_statis where id_halstatis = '12'");
    }
// Direksi EN
    function en_ambildirek(){
        return $this->db->query("SELECT * FROM halaman_statis_en where id_halstatis = '12'");
    }

// Dewan Komisaris & EN
    function ambildekom(){
        return $this->db->query("SELECT * FROM halaman_statis where id_halstatis = '13'");
    }

    function en_ambildekom1(){
        return $this->db->query("SELECT * FROM halaman_statis_en where id_halstatis = '13'");
    }

// Komite Audit & EN
    function ambilaudit(){
        return $this->db->query("SELECT * FROM halaman_statis where id_halstatis = '19'");
    }

    function en_ambilaudit(){
        return $this->db->query("SELECT * FROM halaman_statis_en where id_halstatis = '19'");
    }


// Nomrem & EN
    function ambilnomrem(){
        return $this->db->query("SELECT * FROM halaman_statis where id_halstatis = '20'");
    }

    function en_ambilnomrem(){
        return $this->db->query("SELECT * FROM halaman_statis_en where id_halstatis = '20'");
    }

// Manajemen Resiko & EN
    function ambilresiko(){
        return $this->db->query("SELECT * FROM halaman_statis where id_halstatis = '21'");
    }

    function en_ambilresiko(){
        return $this->db->query("SELECT * FROM halaman_statis_en where id_halstatis = '21'");
    }

// Sekretaris Perusahaan & EN
    function ambilsekretaris(){
        return $this->db->query("SELECT * FROM halaman_statis where id_halstatis = '22'");
    } 
    function en_ambilsekretaris(){
        return $this->db->query("SELECT * FROM halaman_statis_en where id_halstatis = '22'");
    }

// Unit Audit Internal & EN
    function ambilauditinternal(){
        return $this->db->query("SELECT * FROM halaman_statis where id_halstatis = '23'");
    }

    function en_ambilauditinternal(){
        return $this->db->query("SELECT * FROM halaman_statis_en where id_halstatis = '23'");
    }
    
//kontak & EN
    function ambilkontak(){
        return $this->db->query("SELECT * FROM halaman_statis where id_halstatis = '25'");
    }
    
    function en_ambilkontak(){
        return $this->db->query("SELECT * FROM halaman_statis_en where id_halstatis = '25'");
    }

//Laporan Tahunan
    function ambilberita(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='123'");
    }

    function en_ambilberita(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='123'");
    }

//Struktur Pemegang Saham
    function ambilpemsah(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='2312'");
    }

    function en_ambilpemsah(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='2312'");
    }

//Informasi Saham
    function ambilinfosah(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='2324'");
    }

    function en_ambilinfosah(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='2324'");
    }

//TJSP & EN
    function ambiljudultjsp(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='245'");
    }

    function en_ambiljudultjsp(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='245'");
    }
//RUPS
    function ambilrups(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='90'");
    }
    function en_ambilrups(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='90'");
    }

//Pers
    function ambilpers(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='249'");
    }

    function en_ambilpers(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='249'");
    }

//Laporan Keuangan
    function ambillapkeu(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='456'");
    }

    function en_ambillapkeu(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='456'");
    }
//Prospektus & EN
    function ambilpros(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='256'");
    }

    function en_ambilpros(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='256'");
    }

//Paparan Publik
    function ambilpapub(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='478'");
    }
    function en_ambilpapub(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='478'");
    }
//Penghargaan
    function ambilpenghargaan2(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='23451'");
    }

    function en_ambilpenghargaan2(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='23451'");
    }
//Dividen
    function ambildividen(){
        return $this->db->query("SELECT * from halaman_statis where id_halstatis='23244'");
    }

    function en_ambildividen(){
        return $this->db->query("SELECT * from halaman_statis_en where id_halstatis='23244'");
    }

    function halamanstatis_tambah(){
            $config['upload_path'] = 'asset/foto_banner/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                    $datadb = array('id_halstatis'=>$this->db->escape_str($this->input->post('a')),
                                    'judul_halaman'=>$this->db->escape_str($this->input->post('b')),
                                    'isi_halaman'=>$this->input->post('c'),
                                    'tgl_posting'=>date('Y-m-d'));
            }else{
                    $datadb = array('id_halstatis'=>$this->db->escape_str($this->input->post('a')),
                                    'judul_halaman'=>$this->db->escape_str($this->input->post('b')),
                                    'isi_halaman'=>$this->input->post('c'),
                                    'tgl_posting'=>date('Y-m-d'),
                                    'gambar'=>$hasil['file_name']);
            }
        $this->db->insert('halaman_statis',$datadb);
    }

    function en_halamanstatis_tambah(){
            $config['upload_path'] = 'asset/foto_banner/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('h');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                    $datadb = array('id_halstatis'=>$this->db->escape_str($this->input->post('e')),
                                    'judul_halaman'=>$this->db->escape_str($this->input->post('f')),
                                    'isi_halaman'=>$this->input->post('g'),
                                    'tgl_posting'=>date('Y-m-d'));
            }else{
                    $datadb = array('id_halstatis'=>$this->db->escape_str($this->input->post('e')),
                                    'judul_halaman'=>$this->db->escape_str($this->input->post('f')),
                                    'isi_halaman'=>$this->input->post('g'),
                                    'tgl_posting'=>date('Y-m-d'),
                                    'gambar'=>$hasil['file_name']);
            }
        $this->db->insert('halaman_statis_en',$datadb);
    }

    function halamanstatis_edit($id){
        return $this->db->query("SELECT * FROM halaman_statis where id_halstatis='$id'");
    }

    function en_halamanstatis_edit($id){
        return $this->db->query("SELECT * FROM halaman_statis_en where id_halstatis='$id'");
    }

    function halamanstatis_update(){
        $config['upload_path'] = 'asset/foto_banner/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('c');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
                    $datadb = array('judul_halaman'=>$this->db->escape_str($this->input->post('a')),
                                    'isi_halaman'=>$this->input->post('b'),
                                    'tgl_posting'=>date('Y-m-d'));
        }else{
                    $datadb = array('judul_halaman'=>$this->db->escape_str($this->input->post('a')),
                                    'isi_halaman'=>$this->input->post('b'),
                                    'tgl_posting'=>date('Y-m-d'),
                                    'gambar'=>$hasil['file_name']);
        }
        $this->db->where('id_halstatis',$this->input->post('id'));
        $this->db->update('halaman_statis',$datadb);
    }

     function en_halamanstatis_update(){
        $config['upload_path'] = 'asset/foto_banner/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('x');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
                    $datadb = array('judul_halaman'=>$this->db->escape_str($this->input->post('z')),
                                    'isi_halaman'=>$this->input->post('y'),
                                    'tgl_posting'=>date('Y-m-d'));
        }else{
                    $datadb = array('judul_halaman'=>$this->db->escape_str($this->input->post('z')),
                                    'isi_halaman'=>$this->input->post('y'),
                                    'tgl_posting'=>date('Y-m-d'),
                                    'gambar'=>$hasil['file_name']);
        }
        $this->db->where('id_halstatis',$this->input->post('id'));
        $this->db->update('halaman_statis_en',$datadb);
    }

    function halamanstatis_delete($id){
        return $this->db->query("DELETE FROM halaman_statis where id_halstatis='$id'");
    }

    function en_halamanstatis_delete($id){
        return $this->db->query("DELETE FROM halaman_statis_en where id_halstatis='$id'");
    }
}