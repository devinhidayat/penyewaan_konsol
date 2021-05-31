<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Order</h1>
        </div>

        <div class="card">
            <div class="card-body">
            <?php foreach ($order as $o) : ?>
                <form method="POST" action="<?php echo base_url('index.php/admin/order/update_order_aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Rental</label>
                                <input type="hidden" name="id_rental" value="<?php echo $o->id_rental ?>">
                                <input type="date" name="tanggal_rental" class="form-control" value="<?php echo $o->tanggal_rental ?>" readonly>
                                <?php echo form_error('tanggal_rental','<div class="text-small text-danger">','</div') ?>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pengembalian</label>
                                <input type="date" name="tanggal_kembali" class="form-control" value="<?php echo $o->tanggal_kembali ?>" readonly>
                                <?php echo form_error('tanggal_kembali','<div class="text-small text-danger">','</div') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" value="<?php 
                                        $awal = new DateTime($o->tanggal_rental);
                                        $akhir = new DateTime($o->tanggal_kembali);
                                        $diff = $akhir->diff($awal);
                                        echo $o->harga*$diff->d;
                                    ?>
                                " readonly>
                                <?php echo form_error('harga','<div class="text-small text-danger">','</div') ?>
                            </div>

                            <div class="form-group">
                                <label>Status Rental</label>
                                <select name="status_rental" class="form-control" value="<?php echo $o->status_rental ?>">
                                    <option <?php if($o->status_rental=="Sedang Dikirim"){echo "selected";} ?> value="Sedang Dikirim">Sedang Dikirim</option>
                                    <option <?php if($o->status_rental=="Sudah Dikirim"){echo "selected";} ?> value="Sudah Dikirim">Sudah Dikirim</option>
                                    <option <?php if($o->status_rental=="Selesai"){echo "selected";} ?> value="Selesai">Selesai</option>
                                </select>
                                <?php echo form_error('status_rental','<div class="text-small text-danger">','</div') ?>
                            </div>
                        </div>
                        <div class="ml-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>