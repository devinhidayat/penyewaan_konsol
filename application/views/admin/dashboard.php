
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-gamepad"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Konsol</h4>
            </div>
            <div class="card-body">
                <?php
                  $query = $this->db->get('konsol');
                  echo $query->num_rows();
                ?> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Order</h4>
            </div>
            <div class="card-body">
              <?php
                  $query = $this->db->get('rental');
                  echo $query->num_rows();
                ?> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Customer</h4>
            </div>
            <div class="card-body">
                <?php
                  $query = $this->db->query('SELECT * FROM customer WHERE role_id = 2');
                  echo $query->num_rows();
                ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
      