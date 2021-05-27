<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Rental</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Customer</th>
                        <th>Konsol</th>
                        <th>Tanggal Rental</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Harga</th>
                        <th>Status Rental</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($rental as $r) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $r->nama_customer ?></td>
                                <td><?php echo $r->nama ?></td>
                                <td><?php echo date('d/m/Y', strtotime($r->tanggal_rental)); ?></td>
                                <td><?php echo date('d/m/Y', strtotime($r->tanggal_kembali)); ?></td>
                                <td>Rp. <?php echo number_format($r->harga,0,',','.') ?></td>
                                <td><?php echo $r->status_rental ?></td>
                                <td>
                                    <a href="<?php echo base_url('index.php/admin/data_rental/update_rental/').$r->id_konsol ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>        
        </div>
    </section>
</div>
