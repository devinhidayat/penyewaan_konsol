<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>
    </section>

    <?php foreach($customer as $c) : ?>
    <form method="POST" action="<?php echo base_url('index.php/admin/data_customer/update_customer_aksi') ?>">

        <div class="form-group">
            <label>Nama</label>
            <input type="hidden" name="id_customer" value="<?php echo $c->id_customer ?>">
            <input type="text" name="nama_customer" class="form-control" value="<?php echo $c->nama_customer ?>">
            <?php echo form_error('nama_customer','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $c->alamat ?>">
            <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="no_telepon" class="form-control" value="<?php echo $c->no_telepon ?>">
            <?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $c->email ?>">
            <?php echo form_error('email','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $c->password ?>">
            <?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
        </div>
        
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
    </form>
    <?php endforeach; ?>
</div>