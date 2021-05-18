<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Konsol</h1>
        </div>

        <a href="<?php echo base_url('index.php/admin/data_konsol/tambah_konsol') ?>" class="btn btn-primary mb-3">Tambah Konsol</a><br>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($konsol as $k) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $k->id_konsol ?></td>
                            <td><?php echo $k->nama ?></td>
                            <td>
                                <img width="100px" src="<?php echo base_url().'assets/upload/'.$k->gambar ?>">
                            </td>
                            <td><?php echo $k->harga ?></td>
                            <td><?php echo $k->kuantitas ?></td>
                            <td><?php
                                if($k->status == "0") { echo "<span class='badge badge-light'>Sedang Dikirim</span>"; }
                                if($k->status == "1") { echo "<span class='badge badge-secondary'>Sudah Dikirim</span>"; }
                                if($k->status == "2") { echo "<span class='badge badge-primary'>Siap di-Pick up</span>"; }
                                if($k->status == "3") { echo "<span class='badge badge-success'>Selesai</span>"; }
                            ?></td>
                            <td>
                                <a href="<?php echo base_url('index.php/admin/data_konsol/detail_konsol/').$k->id_konsol ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo base_url('index.php/admin/data_konsol/delete_konsol/').$k->id_konsol ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="<?php echo base_url('index.php/admin/data_konsol/update_konsol/').$k->id_konsol ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>
