<?php 
class Model_galeri extends CI_model{
    
    function galeri(){
        return $this->db->query("SELECT a.*, b.* FROM gambar a LEFT JOIN album b ON a.id_album=b.id_album order by id_gambar");
    }


    function program(){
        return $this->db->query("SELECT * FROM gambar where id_gambar='1' and id_album='10'");
    }

    function en_program(){
        return $this->db->query("SELECT * FROM gambar_en where id_gambar='1' and id_album='10'");
    }

    function program2(){
        return $this->db->query("SELECT * FROM gambar where id_gambar='2' and id_album='10'");
    }

    function en_program2(){
        return $this->db->query("SELECT * FROM gambar_en where id_gambar='2' and id_album='10'");
    }


    function program3(){
        return $this->db->query("SELECT * FROM gambar where id_gambar='3' and id_album='10'");
    }

    function en_program3(){
        return $this->db->query("SELECT * FROM gambar_en where id_gambar='3' and id_album='10'");
    }
    function program4(){
        return $this->db->query("SELECT * FROM gambar where id_gambar='4' and id_album='10'");
    }

     function en_program4(){
        return $this->db->query("SELECT * FROM gambar_en where id_gambar='4' and id_album='10'");
    }

    function program5(){
        return $this->db->query("SELECT * FROM gambar where id_gambar='5' and id_album='10'");
    }

    function en_program5(){
        return $this->db->query("SELECT * FROM gambar_en where id_gambar='5' and id_album='10'");
    }

    function program6(){
        return $this->db->query("SELECT * FROM gambar where id_gambar='6' and id_album='10'");
    }

    function en_program6(){
        return $this->db->query("SELECT * FROM gambar_en where id_gambar='6' and id_album='10'");
    }

    function galeri_tambah(){
        $config['upload_path'] = 'asset/img_galeri/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('d');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
            $datadb = array('id_gambar'=>$this->db->escape_str($this->input->post('i')),
                            'id_album'=>$this->db->escape_str($this->input->post('c')),
                            'judul_gambar'=>$this->db->escape_str($this->input->post('b')));
        }else{
            $datadb = array('id_gambar'=>$this->db->escape_str($this->input->post('i')),
                            'id_album'=>$this->db->escape_str($this->input->post('c')),
                            'judul_gambar'=>$this->db->escape_str($this->input->post('b')),
                            'gambar'=>$hasil['file_name']);
        }
        $this->db->insert('gambar',$datadb);
    }

    function en_galeri_tambah(){
        $config['upload_path'] = 'asset/img_galeri/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('l');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
            $datadb = array('id_gambar'=>$this->db->escape_str($this->input->post('i')),
                            'id_album'=>$this->db->escape_str($this->input->post('m')),
                            'judul_gambar'=>$this->db->escape_str($this->input->post('k')));
        }else{
            $datadb = array('id_gambar'=>$this->db->escape_str($this->input->post('i')),
                            'id_album'=>$this->db->escape_str($this->input->post('m')),
                            'judul_gambar'=>$this->db->escape_str($this->input->post('k')),
                            'gambar'=>$hasil['file_name']);
        }
        $this->db->insert('gambar_en',$datadb);
    }

    function galeri_edit($id){
        return $this->db->query("SELECT * FROM gambar where id_gambar='$id'");
    }

    function en_galeri_edit($id){
        return $this->db->query("SELECT * FROM gambar_en where id_gambar='$id'");
    }

    function galeri_update(){
        $config['upload_path'] = 'asset/img_galeri/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('d');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
            $datadb = array('judul_gambar'=>$this->db->escape_str($this->input->post('b')));
        }else{
            $datadb = array('judul_gambar'=>$this->db->escape_str($this->input->post('b')),
                            'gambar'=>$hasil['file_name']);
        }
        $this->db->where('id_gambar',$this->input->post('id'));
        $this->db->update('gambar',$datadb);
    }

    function en_galeri_update(){
        $config['upload_path'] = 'asset/img_galeri/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('x');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
            $datadb = array('judul_gambar'=>$this->db->escape_str($this->input->post('y')),
                            'id_album'=>$this->db->escape_str($this->input->post('z'))
                            );
        }else{
            $datadb = array('judul_gambar'=>$this->db->escape_str($this->input->post('y')),
                            'id_album'=>$this->db->escape_str($this->input->post('z')),
                            'gambar'=>$hasil['file_name']);
        }
        $this->db->where('id_gambar',$this->input->post('id'));
        $this->db->update('gambar_en',$datadb);
    }

    function galeri_delete($id){
        return $this->db->query("DELETE FROM gambar where id_gambar='$id'");
    }

    function en_galeri_delete($id){
        return $this->db->query("DELETE FROM gambar_en where id_gambar='$id'");
    }

    function album(){
        return $this->db->query("SELECT * FROM album ORDER BY id_album DESC");
    }

    function en_album(){
        return $this->db->query("SELECT * FROM album_en ORDER BY id_album DESC");
    }

    function album_tambah(){
        $datadb = array('jdl_album'=>$this->db->escape_str($this->input->post('a')));   
        $this->db->insert('album',$datadb);
    }

    function en_album_tambah(){
        $datadb = array('jdl_album'=>$this->db->escape_str($this->input->post('z')));  
        $this->db->insert('album_en',$datadb);
    }

    function album_edit($id){
        return $this->db->query("SELECT * FROM album where id_album='$id'");
    }

    function en_album_edit($id){
        return $this->db->query("SELECT * FROM album_en where id_album='$id'");
    }

    function album_update(){
        $datadb = array('jdl_album'=>$this->db->escape_str($this->input->post('a')));
        
        $this->db->where('id_album',$this->input->post('id'));
        $this->db->update('album',$datadb);
    }

    function en_album_update(){
        $datadb = array('jdl_album'=>$this->db->escape_str($this->input->post('z')));
        
        $this->db->where('id_album',$this->input->post('id'));
        $this->db->update('album_en',$datadb);
    }

    function album_delete($id){
        return $this->db->query("DELETE FROM album where id_album='$id'");
    }

    function en_album_delete($id){
        return $this->db->query("DELETE FROM album_en where id_album='$id'");
    }

    function lembar_fakta(){
        return $this->db->query("SELECT * FROM gambar where id_album='8'");
    }

    function en_lembar_fakta(){
        return $this->db->query("SELECT * FROM gambar_en where id_album='8'");
    }

    
    function struktur_org(){
        return $this->db->query("SELECT * FROM gambar where id_album='6'");
    }

    function en_struktur_org(){
        return $this->db->query("SELECT * FROM gambar_en where id_album='6'");
    }

    
    function struktur_grup(){
        return $this->db->query("SELECT * FROM gambar where id_album='7'");
    }

    function en_struktur_grup(){
        return $this->db->query("SELECT * FROM gambar_en where id_album='7'");
    }
    
    function ambiltransbisnis(){
        return $this->db->query("SELECT * FROM gambar where id_album='11'");
    }

     function en_ambiltransbisnis(){
        return $this->db->query("SELECT * FROM gambar_en where id_album='11'");
    }

    function pemegang_saham(){
        return $this->db->query("SELECT * FROM gambar where id_album='9'");
    }

    function en_pemegang_saham(){
        return $this->db->query("SELECT * FROM gambar_en where id_album='9'");
    }

}