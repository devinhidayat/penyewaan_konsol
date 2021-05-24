<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>

        <a href="<?php echo base_url('index.php/admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-3">Tambah Customer</a><br>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-striped table-responsive table-bordered">
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>

            <?php
                $no = 1;
                foreach ($customer as $c) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $c->id_customer ?></td>
                        <td><?php echo $c->nama_customer ?></td>
                        <td><?php echo $c->alamat ?></td>
                        <td><?php echo $c->no_telepon ?></td>
                        <td><?php echo $c->email ?></td>
                        <td><?php echo $c->password ?></td>
                        <td>
                            <div class="row">
                                <a href="<?php echo base_url('index.php/admin/data_customer/delete_customer/').$c->id_customer ?>" class="btn btn-sm btn-danger mr-2"><i class="fas fa-trash"></i></a>
                                <a href="<?php echo base_url('index.php/admin/data_customer/update_customer/').$c->id_customer ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                        </td>
                    </tr>
            
            <?php endforeach; ?>
        </table>