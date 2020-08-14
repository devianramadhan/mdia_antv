<?php 
class Model_lapkeu extends CI_model{
    function tahun_lapkeu(){
        return $this->db->query("SELECT * FROM tahun_lapkeu ORDER BY tahun desc");
    }

    function ambildokumen(){
        return $this->db->query("SELECT * FROM dokumen_lapkeu");
    }

    function en_ambildokumen(){
        return $this->db->query("SELECT * FROM dokumen_lapkeu_en");
    }


    function tahun_lapkeu_tambah(){
        $datadb = array('tahun'=>$this->db->escape_str($this->input->post('a')));
        $this->db->insert('tahun_lapkeu',$datadb);
    }

    function tahun_lapkeu_delete($id){
        return $this->db->query("DELETE FROM tahun_lapkeu where tahun='$id'");
    }

    function lapkeu(){
        return $this->db->query("SELECT a.*, b.tahun FROM dokumen_lapkeu a LEFT JOIN tahun_lapkeu b ON a.tahun_dokumen=b.tahun ORDER BY a.tahun_dokumen DESC");
    }

    function en_lapkeu(){
        return $this->db->query("SELECT a.*, b.tahun FROM dokumen_lapkeu_en a LEFT JOIN tahun_lapkeu b ON a.tahun_dokumen=b.tahun ORDER BY a.tahun_dokumen DESC");
    }


    function lapkeu_tambah(){
        $config['upload_path'] = 'asset/laporan_keuangan/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_lapkeu'=>$this->db->escape_str($this->input->post('a')),
                                'keterangan'=>$this->db->escape_str($this->input->post('b')),
                                'tahun_dokumen'=>$this->db->escape_str($this->input->post('c')));
            }else{
                $datadb = array('id_lapkeu'=>$this->db->escape_str($this->input->post('a')),
                                'keterangan'=>$this->db->escape_str($this->input->post('b')),
                                'tahun_dokumen'=>$this->db->escape_str($this->input->post('c')),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->insert('dokumen_lapkeu',$datadb);
    }

    function en_lapkeu_tambah(){
        $config['upload_path'] = 'asset/laporan_keuangan/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('i');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_lapkeu'=>$this->db->escape_str($this->input->post('a')),
                                'keterangan'=>$this->db->escape_str($this->input->post('g')),
                                'tahun_dokumen'=>$this->db->escape_str($this->input->post('h')));
            }else{
                $datadb = array('id_lapkeu'=>$this->db->escape_str($this->input->post('a')),
                                'keterangan'=>$this->db->escape_str($this->input->post('g')),
                                'tahun_dokumen'=>$this->db->escape_str($this->input->post('h')),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->insert('dokumen_lapkeu_en',$datadb);
    }

    function lapkeu_edit($id){
        return $this->db->query("SELECT * FROM dokumen_lapkeu where id_lapkeu='$id'");
    }

    function en_lapkeu_edit($id){
        return $this->db->query("SELECT * FROM dokumen_lapkeu_en where id_lapkeu='$id'");
    }

    function lapkeu_update(){
        $config['upload_path'] = 'asset/laporan_keuangan/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('keterangan'=>$this->db->escape_str($this->input->post('b')),
                                'tahun_dokumen'=>$this->db->escape_str($this->input->post('c')));
            }else{
                $datadb = array('keterangan'=>$this->db->escape_str($this->input->post('b')),
                                'tahun_dokumen'=>$this->db->escape_str($this->input->post('c')),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->where('id_lapkeu',$this->input->post('id'));
        $this->db->update('dokumen_lapkeu',$datadb);
    }

    function en_lapkeu_update(){
        $config['upload_path'] = 'asset/laporan_keuangan/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '10000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('w');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('keterangan'=>$this->db->escape_str($this->input->post('z')),
                                'tahun_dokumen'=>$this->db->escape_str($this->input->post('x')));
            }else{
                $datadb = array('keterangan'=>$this->db->escape_str($this->input->post('z')),
                                'tahun_dokumen'=>$this->db->escape_str($this->input->post('x')),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->where('id_lapkeu',$this->input->post('id'));
        $this->db->update('dokumen_lapkeu_en',$datadb);
    }

    function lapkeu_delete($id){
        return $this->db->query("DELETE FROM dokumen_lapkeu where id_lapkeu='$id'");
    }

    function en_lapkeu_delete($id){
        return $this->db->query("DELETE FROM dokumen_lapkeu_en where id_lapkeu='$id'");
    }

    function ambillapkeu(){
        return $this->db->query("SELECT * FROM tahun_lapkeu order by tahun desc");
    }

    function dokumenlapkeu(){
        return $this->db->query("SELECT * FROM dokumen_lapkeu order by keterangan asc");
    }
    
    function en_dokumenlapkeu(){
        return $this->db->query("SELECT * FROM dokumen_lapkeu_en order by keterangan asc");
    }

}