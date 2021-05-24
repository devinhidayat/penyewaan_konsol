<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>
    </section>

    <form method="POST" action="<?php echo base_url('index.php/admin/data_customer/tambah_customer_aksi') ?>">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_customer" class="form-control">
            <?php echo form_error('nama_customer','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
            <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="no_telepon" class="form-control">
            <?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
            <?php echo form_error('email','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control">
            <?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
        </div>
        
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
    </form>
</div>