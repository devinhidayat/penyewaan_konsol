<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Konsol</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <?php foreach ($konsol as $k) : ?>
                <form method="POST" action="<?php echo base_url('index.php/admin/data_konsol/update_konsol_aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Konsol</label>
                                <input type="hidden" name="id_konsol" value="<?php echo $k->id_konsol ?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $k->nama ?>">
                                <?php echo form_error('nama','<div class="text-small text-danger">','</div') ?>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" value="<?php echo $k->deskripsi ?>">
                                <?php echo form_error('deskripsi','<div class="text-small text-danger">','</div') ?>
                            </div>

                            <div class="form-group">
                                <label>Harga (per hari)</label>
                                <input type="number" name="harga" class="form-control" value="<?php echo $k->harga ?>">
                                <?php echo form_error('harga','<div class="text-small text-danger">','</div') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kuantitas</label>
                                <input type="number" name="kuantitas" class="form-control" value="<?php echo $k->kuantitas ?>">
                                <?php echo form_error('kuantitas','<div class="text-small text-danger">','</div') ?>
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control">
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
