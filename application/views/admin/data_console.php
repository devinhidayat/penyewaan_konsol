<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Konsol</h1>
        </div>

        <table class="table table-hover table-striped table-borderd">
            <thead>
                <th>No.</th>
                <th>ID</th>
                <th>Kode Tipe</th>
                <th>Gambar</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($konsol as $k) : ?>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $k->id_konsol ?></td>
                    <td><?php echo $k->kode_tipe ?></td>
                    <td></td>
                    <td><?php echo $k->status ?></td>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>
