<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/assets_stisla/') ?>/assets/img/konsol.png" alt="logo" width="100" class="shadow-light">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('index.php/register') ?>">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="nama_customer">Nama</label>
                            <input id="nama_customer" type="text" class="form-control" name="nama_customer" autofocus>
                            <?php echo form_error('nama_customer','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group col-6">
                            <label for="no_telepon">Nomor Telepon</label>
                            <input id="no_telepon" type="text" class="form-control" name="no_telepon" autofocus>
                            <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input id="alamat" type="text" class="form-control" name="alamat">
                        <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email">
                            <?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group col-6">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password">
                            <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>