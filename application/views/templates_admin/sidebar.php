<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="" class="nav-link nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block mt-3">Welcome <?php echo $this->session->userdata('nama_customer') ?></div></a>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="">APP Rental Game Console</a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="<?php echo base_url('index.php/admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('index.php/admin/data_konsol') ?>"><i class="fas fa-gamepad"></i> <span>Data Console</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('index.php/admin/data_customer') ?>"><i class="fas fa-users"></i> <span>Data Customer</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('index.php/admin/order') ?>"><i class="fas fa-grip-horizontal"></i> <span>Order</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('index.php/admin/transaksi') ?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('index.php/auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Log Out</span></a></li>
            </ul>
        </aside>
      </div>