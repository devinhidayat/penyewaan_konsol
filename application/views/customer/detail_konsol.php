<div class = "container mt-5 mb-5">
    <div class = "card">
        <div class = "card-body">
            <?php foreach ($detail as $dt) : ?>
                <div class = "row">
                    <div class = "col-md-6">
                        <img style="width: 90%" src = "<?php echo base_url('assets/upload/'. $dt->gambar) ?>">
                    </div>
                    <div class = "col-md-6">
                        <table class ="table">
                            <tr>
                                <th>Nama</th>
                                    <td><?php echo $dt->nama ?></td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                    <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?></td>
                            </tr>
                            <tr>
                                <th>Kuantitas</th>
                                    <td><?php echo $dt->kuantitas ?></td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-primary" href="<?php echo base_url('customer/rental/tambah_rental'.$dt->id_konsol) ?>">Rental</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>