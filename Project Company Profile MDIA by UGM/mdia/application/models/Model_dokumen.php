<?php 
class Model_dokumen extends CI_model{
    
    function kategori_dokumen(){
        return $this->db->query("SELECT * FROM kategori_dokumen ORDER BY id_kategoridokumen DESC");
    }

    function en_kategori_dokumen(){
        return $this->db->query("SELECT * FROM kategori_dokumen_en ORDER BY id_kategoridokumen DESC");
    }


    function kategori_dokumen_tambah(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')));
        $this->db->insert('kategori_dokumen',$datadb);
    }

    function kategori_dokumen_edit($id){
        return $this->db->query("SELECT * FROM kategori_dokumen where id_kategoridokumen='$id'");
    }

    function kategori_dokumen_update(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')),
                        'kategori_seo'=>seo_title($this->input->post('a')),
                        'aktif'=>$this->db->escape_str($this->input->post('b')));
        $this->db->where('id_kategoridokumen',$this->input->post('id'));
        $this->db->update('kategori_dokumen',$datadb);
    }

    function kategori_dokumen_delete($id){
        return $this->db->query("DELETE FROM kategori_dokumen where id_kategoridokumen='$id'");
    }

// KATEGORI DOKUMEN EN
    function en_kategori_dokumen_tambah(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('c')));
        $this->db->insert('kategori_dokumen_en',$datadb);
    }

    function en_kategori_dokumen_edit($id){
        return $this->db->query("SELECT * FROM kategori_dokumen_en where id_kategoridokumen='$id'");
    }

    function en_kategori_dokumen_update(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('c')),
                        'aktif'=>$this->db->escape_str($this->input->post('d')));
        $this->db->where('id_kategoridokumen',$this->input->post('id'));
        $this->db->update('kategori_dokumen_en',$datadb);
    }

    function en_kategori_dokumen_delete($id){
        return $this->db->query("DELETE FROM kategori_dokumen_en where id_kategoridokumen='$id'");
    }


    function list_dokumen(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM dokumen a LEFT JOIN kategori_dokumen b ON a.id_kategoridokumen=b.id_kategoridokumen ORDER BY a.id_dokumen DESC");
    }

    function list_dokumen_tambah(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '2048000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_dokumen'=>$this->db->escape_str($this->input->post('o')),
                                'id_kategoridokumen'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul_dokumen'=>$this->db->escape_str($this->input->post('a')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_dokumen'=>$this->db->escape_str($this->input->post('o')),
                                'id_kategoridokumen'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul_dokumen'=>$this->db->escape_str($this->input->post('a')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->insert('dokumen',$datadb);
    }

    function list_dokumen_edit($id){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='$id'");
    }

    function list_dokumen_update(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_kategoridokumen'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul_dokumen'=>$this->db->escape_str($this->input->post('a')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_kategoridokumen'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul_dokumen'=>$this->db->escape_str($this->input->post('a')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->where('id_dokumen',$this->input->post('id'));
        $this->db->update('dokumen',$datadb);
    }

    function list_dokumen_delete($id){
        return $this->db->query("DELETE FROM dokumen where id_dokumen='$id'");
    }

    // DOKUMEN EN
    function en_list_dokumen_tambah(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '2048000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('h');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_dokumen'=>$this->db->escape_str($this->input->post('o')),
                                'id_kategoridokumen'=>$this->db->escape_str($this->input->post('g')),
                                'username'=>$this->db->escape_str($this->input->post('z')),
                                'judul_dokumen'=>$this->db->escape_str($this->input->post('f')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_dokumen'=>$this->db->escape_str($this->input->post('o')),
                                'id_kategoridokumen'=>$this->db->escape_str($this->input->post('g')),
                                'username'=>$this->db->escape_str($this->input->post('z')),
                                'judul_dokumen'=>$this->db->escape_str($this->input->post('f')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->insert('dokumen_en',$datadb);
    }

    function en_list_dokumen_edit($id){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='$id'");
    }

    function en_list_dokumen_update(){
        $config['upload_path'] = 'asset/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('x');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $datadb = array('id_kategoridokumen'=>$this->db->escape_str($this->input->post('y')),
                                'username'=>$this->db->escape_str($this->input->post('w')),
                                'judul_dokumen'=>$this->db->escape_str($this->input->post('z')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'));
            }else{
                $datadb = array('id_kategoridokumen'=>$this->db->escape_str($this->input->post('y')),
                                'username'=>$this->db->escape_str($this->input->post('w')),
                                'judul_dokumen'=>$this->db->escape_str($this->input->post('z')),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dokumen'=>$hasil['file_name']);
            }
        $this->db->where('id_dokumen',$this->input->post('id'));
        $this->db->update('dokumen_en',$datadb);
    }

    function en_list_dokumen_delete($id){
        return $this->db->query("DELETE FROM dokumen_en where id_dokumen='$id'");
    }

    function dokumenikhtisar(){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='1'");
    }

    function dokumenanggaran(){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='2'");
    }

    function dokumendekom(){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='3'");
    }

    function dokumendirek(){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='4'");
    }

    function dokumenetik(){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='5'");
    }

    function dokumenaudit(){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='6'");
    }

    function dokumennominasi(){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='7'");
    }

    function dokumenuaudit(){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='8'");
    }

    function dokumenwbs(){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='9'");
    }

    function dokumensaham  (){
        return $this->db->query("SELECT * FROM dokumen where id_dokumen='10'");
    }

    function en_dokumenikhtisar(){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='1'");
    }

    function en_dokumenanggaran(){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='2'");
    }

    function en_dokumendekom(){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='3'");
    }

    function en_dokumendirek(){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='4'");
    }

    function en_dokumenetik(){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='5'");
    }

    function en_dokumenaudit(){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='6'");
    }

    function en_dokumennominasi(){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='7'");
    }

    function en_dokumenuaudit(){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='8'");
    }

    function en_dokumenwbs(){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='9'");
    }

    function en_dokumensaham  (){
        return $this->db->query("SELECT * FROM dokumen_en where id_dokumen='10'");
    }
}