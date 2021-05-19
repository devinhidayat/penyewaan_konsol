<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Konsol</h1>
        </div>        
    </section>

    <?php foreach($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-5">
                        <img width="350px" src="<?php echo base_url().'/assets/upload/'.$dt->gambar ?>">
                    </div>
                    <div class="col-md-7">
                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <td>Nama</td>
                                <td><?php echo $dt->nama ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><?php echo $dt->harga ?></td>
                            </tr>
                            <tr>
                                <td>Kuantitas</td>
                                <td><?php echo $dt->kuantitas ?></td>
                            </tr>
                        </table>

                        <a class="btn btn-sm btn-secondary" href="<?php echo base_url('index.php/admin/data_konsol') ?>">Kembali</a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('index.php/admin/data_konsol/update_konsol/'.$dt->id_konsol) ?>">Update</a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>
