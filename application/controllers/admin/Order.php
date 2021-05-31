<?php 

class Order extends CI_Controller{

    public function index() {
        $data['order'] = $this->db->query("SELECT * FROM rental r, konsol k, customer c WHERE r.id_konsol = k.id_konsol AND r.id_customer = c.id_customer")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_order',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_order($id) {
        $where = array('id_rental' => $id);
        $data['order'] = $this->db->query("SELECT * FROM rental WHERE id_rental = $id")->result();

        // $data['order'] = $this->db->query("SELECT c.nama_customer, k.nama, r.tanggal_rental, r.tanggal_kembali, r.harga, r.status_rental
        // FROM customer c JOIN rental r ON c.id_customer = r.id_customer JOIN konsol k ON r.id_konsol = k.id_konsol WHERE r.id_rental = $id")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_order',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_order_aksi() {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->update_order();
        }
        else {
            $id                 = $this->input->post('id_rental');
            $tanggal_rental     = $this->input->post('tanggal_rental');
            $tanggal_kembali    = $this->input->post('tanggal_kembali');
            $awal               = new DateTime($tanggal_rental);
            $akhir              = new DateTime($tanggal_kembali);
            $diff               = $akhir->diff($awal);
            $harga              = $this->input->post('harga');
            $status_rental      = $this->input->post('status_rental');
            
            $data = array (
                'tanggal_rental'    => $tanggal_rental,
                'tanggal_kembali'   => $tanggal_kembali,
                'harga'             => $harga,
                'status_rental'     => $status_rental
            );

            $where = array (
                'id_rental' => $id
            );

            $this->rental_model->update_data('rental', $data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diupdate!</div>');
            redirect('admin/order');
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('tanggal_rental','Tanggal Rental','required');
        $this->form_validation->set_rules('tanggal_kembali','Tanggal Kembali','required');
        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('status_rental','Status Rental','required');
    }
}

?>