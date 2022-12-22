<?php

class Kategori extends CI_Controller{
    public function sepatu_anak()
    {
        $data['sepatu_anak'] = $this->model_kategori->data_sepatu_anak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sepatu_anak',$data);
        $this->load->view('templates/footer');
    }

    public function sepatu_dewasa()
    {
        $data['sepatu_dewasa'] = $this->model_kategori->data_sepatu_dewasa()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sepatu_dewasa',$data);
        $this->load->view('templates/footer');

    }

    public function sepatu_olahraga()
    {
        $data['sepatu_olahraga'] = $this->model_kategori->data_sepatu_olahraga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sepatu_olahraga',$data);
        $this->load->view('templates/footer');

    }
}