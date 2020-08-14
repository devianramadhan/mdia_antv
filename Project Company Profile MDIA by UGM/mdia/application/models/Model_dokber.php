<?php 
class Model_dokber extends CI_model{
    
    function dokumen_berita(){
        return $this->db->query("SELECT * FROM dokumen_berita ORDER BY id DESC");
    }

    function en_dokumen_berita(){
        return $this->db->query("SELECT * FROM dokumen_berita_en ORDER BY id DESC");
    }

    function ambildokumen(){
        return $this->db->query("SELECT * FROM dokumen_berita");
    }

    function en_ambildokumen(){
        return $this->db->query("SELECT * FROM dokumen_berita_en");
    }

    function dokumen_berita_tambah(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '200000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('d');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id'=>$this->db->escape_str($this->input->post('a')),
                                'idberita'=>$this->db->escape_str($this->input->post('b')),
                                'id_katber'=>$this->db->escape_str($this->input->post('c')));
            }else{
                $datadb = array('id'=>$this->db->escape_str($this->input->post('a')),
                                'idberita'=>$this->db->escape_str($this->input->post('b')),
                                'id_katber'=>$this->db->escape_str($this->input->post('c')),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->insert('dokumen_berita',$datadb);
    }

    function en_dokumen_berita_tambah(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '200000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('l');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id'=>$this->db->escape_str($this->input->post('a')),
                                'idberita'=>$this->db->escape_str($this->input->post('k')),
                                'id_katber'=>$this->db->escape_str($this->input->post('j')));
            }else{
                $datadb = array('id'=>$this->db->escape_str($this->input->post('a')),
                                'idberita'=>$this->db->escape_str($this->input->post('k')),
                                'id_katber'=>$this->db->escape_str($this->input->post('j')),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->insert('dokumen_berita_en',$datadb);
    }

    function dokumen_berita_edit($id){
        return $this->db->query("SELECT * FROM dokumen_berita where id='$id'");
    }

    function en_dokumen_berita_edit($id){
        return $this->db->query("SELECT * FROM dokumen_berita_en where id='$id'");
    }

    function dokumen_berita_update(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '108000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('d');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('idberita'=>$this->db->escape_str($this->input->post('b')),
                                'id_katber'=>$this->db->escape_str($this->input->post('c')));
            }else{
                $datadb = array('idberita'=>$this->db->escape_str($this->input->post('b')),
                                'id_katber'=>$this->db->escape_str($this->input->post('c')),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('dokumen_berita',$datadb);
    }

    function en_dokumen_berita_update(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '108000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('l');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('idberita'=>$this->db->escape_str($this->input->post('k')),
                                'id_katber'=>$this->db->escape_str($this->input->post('j')));
            }else{
                $datadb = array('idberita'=>$this->db->escape_str($this->input->post('k')),
                                'id_katber'=>$this->db->escape_str($this->input->post('j')),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('dokumen_berita_en',$datadb);
    }
    
    function dokumen_berita_delete($id){
        return $this->db->query("DELETE FROM dokumen_berita where id='$id'");
    }
    
    function en_dokumen_berita_delete($id){
        return $this->db->query("DELETE FROM dokumen_berita_en where id='$id'");
    }

    function list_dokumen(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM dokumen a LEFT JOIN kategori_dokumen b ON a.id_kategoridokumen=b.id_kategoridokumen ORDER BY a.id_dokumen DESC");
    }

}
