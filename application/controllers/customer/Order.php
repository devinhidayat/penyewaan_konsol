<?php 

class Order extends CI_Controller{

    public function index() {
        $customer = $this->session->userdata('id_customer');
        $data['order'] = $this->db->query("SELECT * FROM rental r, konsol k, customer c WHERE r.id_konsol = k.id_konsol AND r.id_customer = c.id_customer AND c.id_customer = '$customer' ORDER BY id_rental DESC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/order',$data);
        $this->load->view('templates_customer/footer');
    }
}

?>