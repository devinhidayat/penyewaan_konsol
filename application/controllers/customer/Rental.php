<?php 

class Rental extends CI_Controller{

    public function tambah_rental($id) {
        $data['detail'] = $this->rental_model->ambil_id_konsol($id);
        $this->load->view('customer/tambah_rental',$data);
        $this->load->view('templates_customer/footer');
    }

    public function tambah_rental_aksi() {
        $id_customer        = $this->session->userdata('id_customer');
        $id_konsol          = $this->input->post('id_konsol');
        $tanggal_rental     = $this->input->post('tanggal_rental');
        $tanggal_kembali    = $this->input->post('tanggal_kembali');
        $harga              = $this->input->post('harga');
        
        $data = array (
            'id_customer'       => $id_customer,
            'id_konsol'         => $id_konsol,
            'tanggal_rental'    => $tanggal_rental,
            'tanggal_kembali'   => $tanggal_kembali,
            'harga'             => $harga,
            'status_rental'     => 'Sedang Dikirim'
        );

        $this->rental_model->insert_data($data,'rental');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show ml-5 mr-5" role="alert">Peminjaman Berhasil!</div>');
        redirect('customer/dashboard');
    }
}

?>