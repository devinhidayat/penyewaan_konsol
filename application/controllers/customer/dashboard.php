<?php 

class Dashboard extends CI_Controller {

    public function index() {
        $data['konsol'] = $this->rental_model->get_data('konsol')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard',$data);
        $this->load->view('templates_customer/footer');
    }

    public function detail_konsol($id) {
        $data['detail'] = $this->rental_model->ambil_id_konsol($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_konsol',$data);
        $this->load->view('templates_customer/footer');
    }
}

?>