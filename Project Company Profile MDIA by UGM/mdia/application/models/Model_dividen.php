<?php 
class Model_dividen extends CI_model{

    function thn_dividen(){
        return $this->db->query("SELECT * FROM tahun_dividen ORDER BY tahun desc");
    }

    function thn_dividen_tambah(){
        $datadb = array('tahun'=>$this->db->escape_str($this->input->post('a')));
        $this->db->insert('tahun_dividen',$datadb);
    }

    function thn_dividen_delete($id){
        return $this->db->query("DELETE FROM tahun_dividen where tahun='$id'");
    }

    function isi_dividen(){
        return $this->db->query("SELECT a.*, b.tahun FROM berita_dividen a LEFT JOIN tahun_dividen b ON a.tahun=b.tahun ORDER BY a.tahun DESC");
    }

    function isi_dividen_tambah(){
        $datadb = array('id_dividen'=>$this->db->escape_str($this->input->post('a')),
                        'tahun'=>$this->db->escape_str($this->input->post('b')),
                        'total_dividen'=>$this->db->escape_str($this->input->post('c')),
                        'jml_dividen'=>$this->db->escape_str($this->input->post('d')),
                        'payout'=>$this->db->escape_str($this->input->post('e')),
                        'tgl_pengumuman'=>$this->db->escape_str($this->input->post('f')),
                        'tgl_pembagian'=>$this->db->escape_str($this->input->post('g')));
        $this->db->insert('berita_dividen',$datadb);
    }

    function en_isi_dividen(){
        return $this->db->query("SELECT a.*, b.tahun FROM berita_deviden_en a LEFT JOIN tahun_dividen b ON a.tahun=b.tahun ORDER BY a.tahun DESC");
    }

    function en_isi_dividen_tambah(){
        $datadb = array('id_dividen'=>$this->db->escape_str($this->input->post('a')),
                        'tahun'=>$this->db->escape_str($this->input->post('i')),
                        'total_dividen'=>$this->db->escape_str($this->input->post('j')),
                        'jml_dividen'=>$this->db->escape_str($this->input->post('k')),
                        'payout'=>$this->db->escape_str($this->input->post('l')),
                        'tgl_pengumuman'=>$this->db->escape_str($this->input->post('m')),
                        'tgl_pembagian'=>$this->db->escape_str($this->input->post('n')));
        $this->db->insert('berita_deviden_en',$datadb);
    }

    function isi_dividen_edit($id){
        return $this->db->query("SELECT * FROM berita_dividen where id_dividen='$id'");
    }

    function en_isi_dividen_edit($id){
        return $this->db->query("SELECT * FROM berita_deviden_en where id_dividen='$id'");
    }

    function isi_dividen_update(){
       $datadb = array('tahun'=>$this->db->escape_str($this->input->post('b')),
                        'total_dividen'=>$this->db->escape_str($this->input->post('c')),
                        'jml_dividen'=>$this->db->escape_str($this->input->post('d')),
                        'payout'=>$this->db->escape_str($this->input->post('e')),
                        'tgl_pengumuman'=>$this->db->escape_str($this->input->post('f')),
                        'tgl_pembagian'=>$this->db->escape_str($this->input->post('g')));
        $this->db->where('id_dividen',$this->input->post('id'));
        $this->db->update('berita_dividen',$datadb);
    }

    function en_isi_dividen_update(){
       $datadb = array('tahun'=>$this->db->escape_str($this->input->post('z')),
                        'total_dividen'=>$this->db->escape_str($this->input->post('y')),
                        'jml_dividen'=>$this->db->escape_str($this->input->post('x')),
                        'payout'=>$this->db->escape_str($this->input->post('w')),
                        'tgl_pengumuman'=>$this->db->escape_str($this->input->post('v')),
                        'tgl_pembagian'=>$this->db->escape_str($this->input->post('u')));
        $this->db->where('id_dividen',$this->input->post('id'));
        $this->db->update('berita_deviden_en',$datadb);
    }

    function isi_dividen_delete($id){
        return $this->db->query("DELETE FROM berita_dividen where id_dividen='$id'");
    }

    function en_isi_dividen_delete($id){
        return $this->db->query("DELETE FROM berita_deviden_en where id_dividen='$id'");
    }

    function tahundividen(){
        return $this->db->query("SELECT * FROM tahun_dividen  order by tahun desc limit 4");
    }

    function datadividen(){
        return $this->db->query("SELECT * FROM berita_dividen  order by tahun desc limit 4");
    }

    function en_datadividen(){
        return $this->db->query("SELECT * FROM berita_deviden_en  order by tahun desc limit 4");
    }

   
}