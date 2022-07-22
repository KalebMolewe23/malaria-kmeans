<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Process SSW</span>
    </div>

    <main>
        <div class="container-fluid">
            <table id="table_data" class="table table-bordered table-admin">
                <thead>
                    <tr>
                        <td>Nilai K</td>
                        <td>Hasil DBI</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 2;
                    foreach ($dbi as $value) {
                    ?>
                    <?php } ?>
                    <tr>
                        <td>K-<?= $no; ?></td>
                        <td><?= $value->dbi; ?></td>
                    </tr>
                    <?php
                    $nox = 3;
                    foreach ($dbi2 as $value2) {
                    ?>
                    <?php } ?>
                    <tr>
                        <td>K-<?= $nox; ?></td>
                        <td><?= $value2->dbi; ?></td>
                    </tr>
                </tbody>
            </table>
            <div align="right">
                <a href="<?= base_url("dbi/zona"); ?>"><button type="button" class="btn btn-primary">Proses Selanjutnya</button></a>
            </div>
        </div>
    </main>
</section>