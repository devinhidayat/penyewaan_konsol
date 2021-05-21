<div class = "container">

    <div class = "card">
        <div class = "card-body">
            <?php foreach ($detail as $dt) : ?>
                <div class = "row">
                    <div class = "col-md-6">
                        <img style="width: 90%" src = "<?php echo base_url('assets/upload/'. $dt->gambar) ?>">
                    </div>
                    <div class = "col-md-6">
                        <table class ="table">
                            <tr>
                                <th>Kode Tipe</th>
                                    <td><?php echo $dt->kode_tipe ?></td>
                            </tr>
                                <th>Status</th>
                                    <td><?php if($dt->status == '1') {
                                        echo "Tersedia";
                                    }else {
                                        echo "Barang Kosong";
                                    }?>
                                    </td>
                            </tr>
                            <tr>
                            <td></td>
                                    <td>
                                        <?php
                                        if ($dt->status == "0"){
                                            echo "<span class = 'btn btn-danger' disable>Telah di rental</span>";
                                        }else {
                                            echo anchor('customer/rental/tambah_rental'. $dt->id_konsol, '<button class = "btn btn-success">Rental</button>');
                                        }
                                        ?>
                                    </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>