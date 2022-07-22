<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Process SSW</span>
    </div>

    <main>
        <div class="container-fluid">

            <?php
            foreach ($ssw as $value) {
                $ssw_1 = $value->hasil1;
                $ssw_2 = $value->hasil2;
                $total_ssw = $ssw_1 + $ssw_2;
            ?>
                <?php
                foreach ($rasio as $value2) {
                    $rasio = $value2->nilair2_1;
                    $total_rasio = $total_ssw / $rasio;
                ?>

            <?php
                }
            }
            ?>

            <table id="table_data" class="table table-bordered table_hover table-striped">
                <?php $this->db->query('truncate table hasil_dbi_k2'); ?>
                <thead>
                    <tr align="center">
                        <td>Nilai Ratio</td>
                        <td>Hasil DBI</td>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <td><?= $total_rasio; ?></td>
                        <td><?= $total_rasio; ?></td>
                    </tr>
                </tbody>
                <?php
                    $q = "insert hasil_dbi_k2(dbi) values('" . $total_rasio . "')";
                    $this->db->query($q);
                ?>
            </table>
            <div align="right">
                <a href="<?= base_url("dbi_proccess"); ?>"><button type="submit" class="btn btn-primary">Kembali</button></a>
            </div>
        </div>
    </main>
</section>