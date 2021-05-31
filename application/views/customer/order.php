<div class = "container mt-5 mb-5">
    <div class = "card">
        <div class = "card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>Nama Customer</th>
                    <th>Konsol</th>
                    <th>Tanggal Rental</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Harga</th>
                    <th>Status Rental</th>
                </tr>
                
                <?php $no = 1; foreach ($order as $o) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $o->nama_customer ?></td>
                    <td><?php echo $o->nama ?></td>
                    <td><?php echo date('d/m/Y', strtotime($o->tanggal_rental)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($o->tanggal_kembali)); ?></td>
                    <td>Rp. 
                        <?php 
                            $awal = new DateTime($o->tanggal_rental);
                            $akhir = new DateTime($o->tanggal_kembali);
                            $diff = $akhir->diff($awal);
                            echo number_format($o->harga*$diff->d,0,',','.');
                        ?>
                    </td>
                    <td>
                        <select>
                            <option><?php echo $o->status_rental ?></option>
                            <option <?php if($o->status_rental=="Siap di Pick-up"){echo "selected";} ?> value="Siap di Pick-up">Siap di Pick-up</option>
                        </select>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>