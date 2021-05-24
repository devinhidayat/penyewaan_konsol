<?php 

class Data_customer extends CI_Controller{

    public function index(){
        $data['customer'] = $this->rental_model->get_data('customer')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_customer',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_customer(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_customer');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_customer_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_customer();
        }
        else {
            $nama_customer  = $this->input->post('nama_customer');
            $alamat         = $this->input->post('alamat');
            $no_telepon     = $this->input->post('no_telepon');
            $email          = $this->input->post('email');
            $password       = md5($this->input->post('password'));

            $data = array (
                'nama_customer' => $nama_customer,
                'alamat'        => $alamat,
                'no_telepon'    => $no_telepon,
                'email'         => $email,
                'password'      => $password
            );

            $this->rental_model->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Customer Berhasil Ditambahkan!</div>');
            redirect('admin/data_customer');
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