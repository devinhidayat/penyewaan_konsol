<?php 

class Register extends CI_Controller{

    public function index(){
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('register_form');
        }
        else {
            $nama_customer  = $this->input->post('nama_customer');
            $alamat         = $this->input->post('alamat');
            $no_telepon     = $this->input->post('no_telepon');
            $email          = $this->input->post('email');
            $password       = md5($this->input->post('password'));
            $role_id        = '2';

            $data = array (
                'nama_customer' => $nama_customer,
                'alamat'        => $alamat,
                'no_telepon'    => $no_telepon,
                'email'         => $email,
                'password'      => $password,
                'role_id'       => $role_id
            );

            $this->rental_model->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Register, Silahkan Login!</div>');
            redirect('auth/login');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('nama_customer','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_telepon','Nomor Telepon','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
    }
}

?>