    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    
    <?php echo $this->session->flashdata('pesan') ?>
    
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="<?php echo base_url('assets/assets_shop/images/ps5.jpg') ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Rentscape </strong></h1>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo base_url('assets/assets_shop/images/xbox.jpg') ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Rentscape </strong></h1>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo base_url('assets/assets_shop/images/switch.jpg') ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Rentscape </strong></h1>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Game Console</h1>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php foreach($konsol as $k) : ?>
                <div class="col-lg-4 col-md-6 special-grid">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="<?php echo base_url('assets/upload/'.$k->gambar) ?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="<?php echo base_url('index.php/customer/dashboard/detail_konsol/'.$k->id_konsol) ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <a class="cart"
                                    <?php if($this->session->userdata('nama_customer')) { ?>
                                        <?php 
                                        if($k->kuantitas > "0") {
                                            echo anchor('customer/rental/tambah_rental/'.$k->id_konsol,'<span class="rent-btn">Rental</span>');
                                        }
                                        else {
                                            echo "<span class='rent-btn'>Tidak Tersedia</span>";
                                        }
                                        ?>>
                                    <?php } else { ?>
                                        <button href="<?php echo base_url('index.php/auth/login') ?>">Please Login First</button>
                                    <?php } ?>
                                    
                                </a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $k->nama ?></h4>
                            <h4>Deskripsi: <?php echo $k->deskripsi ?></h4><br>
                            <h4>Harga: Rp. <?php echo number_format($k->harga,0,',','.') ?></h4><br>
                            <h4>Kuantitas: <?php echo $k->kuantitas ?></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End Products  -->
