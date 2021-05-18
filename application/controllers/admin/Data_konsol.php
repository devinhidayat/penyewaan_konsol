<?php

class Data_konsol extends CI_Controller{

    public function index() {
        $data['konsol'] = $this->rental_model->get_data('konsol')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_konsol',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_konsol() {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_konsol');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_konsol_aksi() {
        $this->_rules();
        
        if($this->form_validation->run() == FALSE) {
            $this->tambah_konsol();
        }
        else {
            $nama           = $this->input->post('nama');
            $harga          = $this->input->post('harga');
            $kuantitas      = $this->input->post('kuantitas');
            $gambar         = $_FILES['gambar']['name'];
            if($gambar=''){}
            else {
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';
            }

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload!";
            }
            else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama'          => $nama,
            'harga'         => $harga,
            'kuantitas'     => $kuantitas,
            'gambar'        => $gambar
        );

        $this->rental_model->insert_data($data,'konsol');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('admin/data_konsol');
    }

    public function _rules() {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('kuantitas','Kuantitas','required');
    }
}

?>