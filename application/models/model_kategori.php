<?php

class model_kategori extends CI_Model {
    public function data_sepatu_anak(){
        return $this->db->get_where("tb_barang",array('kategori' =>'sepatu anak'));
    }

    public function data_sepatu_dewasa(){
        return $this->db->get_where("tb_barang",array('kategori' =>'sepatu dewasa'));
    }

    public function data_sepatu_olahraga(){
        return $this->db->get_where("tb_barang",array('kategori' =>'sepatu olahraga'));
    }
}