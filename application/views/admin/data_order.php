<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Order</h1>
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
                        foreach($order as $o) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $o->nama_customer ?></td>
                                <td><?php echo $o->nama ?></td>
                                <td><?php echo date('d/m/Y', strtotime($o->tanggal_rental)); ?></td>
                                <td><?php echo date('d/m/Y', strtotime($o->tanggal_kembali)); ?></td>
                                <td>Rp. 
                                    <?php 
                                        $awal = new DateTime($o->tanggal_rental);
                                        $akhir = new DateTime($o->tanggal_kembali);
                                        $diff = $akhir->diff($awal);
                                        echo number_format($o->harga*$diff->d,0,',','.');
                                    ?>
                                </td>
                                <td><?php echo $o->status_rental ?></td>
                                <td>
                                    <a href="<?php echo base_url('index.php/admin/data_order/update_order/').$o->id_konsol ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>        
        </div>
    </section>
</div>
