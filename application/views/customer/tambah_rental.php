<div class = "container mt-5 mb-5">
    <div class = "card">
        <div class = "card-body">
            <?php foreach($detail as $dt) : ?>
                <form method="POST" action="<?php echo base_url('index.php/customer/rental/tambah_rental_aksi') ?>">
                    <div class="form-group">
                        <label>Harga Rental/Hari</label>
                        <input type="hidden" name="id_konsol" value="<?php echo $dt->id_konsol ?>">
                        <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Rental</label>
                        <input type="date" name="tanggal_rental" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Rental</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
