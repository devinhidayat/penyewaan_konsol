<?php 

class Rental extends CI_Controller{

    public function index() {
        $data['rental'] = $this->db->query("SELECT * FROM rental r, konsol k, customer c WHERE r.id_konsol = k.id_konsol AND r.id_customer = c.id_customer")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_rental',$data);
        $this->load->view('templates_admin/footer');
    }
}

?>