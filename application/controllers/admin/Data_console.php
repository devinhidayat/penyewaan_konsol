<?php

class Data_console extends CI_Controller{
    public function index() {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_console');
        $this->load->view('templates_admin/footer');
    }
}

?>