<?php
class Model_slider extends CI_model{
    function slider(){
        return $this->db->query("SELECT * FROM slider ORDER BY id_slider asc");
    }

    function tampilslider(){
        return $this->db->query("SELECT * FROM slider order by id_slider asc limit 6");
    }

    function slider_tambah(){
        $config['upload_path'] = 'asset/img_slider/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('c');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
            $datadb = array('id_slider'=>$this->db->escape_str($this->input->post('a')),
                            'keterangan'=>$this->db->escape_str($this->input->post('b')),
                            );
        }else{
            $datadb = array('id_slider'=>$this->db->escape_str($this->input->post('a')),
                            'keterangan'=>$this->db->escape_str($this->input->post('b')),
                            'gambar'=>$hasil['file_name']);
        }
        $this->db->insert('slider',$datadb);
    }
     
     function slider_edit($id){
        return $this->db->query("SELECT * FROM slider where id_slider='$id'");
    }

    function slider_update(){
        $config['upload_path'] = 'asset/img_slider/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('c');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
            $datadb = array('keterangan'=>$this->db->escape_str($this->input->post('b')));
        }else{
            $datadb = array('keterangan'=>$this->db->escape_str($this->input->post('b')),
                            'gambar'=>$hasil['file_name']);
        }
        $this->db->where('id_slider',$this->input->post('id'));
        $this->db->update('slider',$datadb);
    }


    function slider_delete($id){
        return $this->db->query("DELETE FROM slider where id_slider='$id'");
    }
}