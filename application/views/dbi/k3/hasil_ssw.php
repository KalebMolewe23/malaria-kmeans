<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Nilai Centroid</span>
    </div>

    <main>
        <div class="container-fluid">

            <table id="table_data" class="table table-bordered table-admin">
                <thead>
                    <tr align="center">
                        <td>Cluster</td>
                        <td>Nilai SSW</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $this->db->query('truncate table hasil_ssw_k3');
                    foreach ($hasilssw1 as $value) {
                    ?>
                        <tr>
                            <td align="center">C-<?= $no; ?></td>
                            <td align="center"><?= $value->hasil; ?></td>
                        </tr>
                    <?php } ?>
                    <?php
                    $nox = 2;
                    $this->db->query('truncate table hasil_ssw');
                    foreach ($hasilssw2 as $value2) {
                    ?>
                        <tr>
                            <td align="center">C-<?= $nox; ?></td>
                            <td align="center"><?= $value2->hasil; ?></td>
                        </tr>
                    <?php } ?>
                    <?php
                    $nom = 3;
                    foreach ($hasilssw3 as $value3) {
                    ?>
                        <tr>
                            <td align="center">C-<?= $nom; ?></td>
                            <td align="center"><?= $value3->hasil; ?></td>
                        </tr>
                    <?php
                        $q = "insert into hasil_ssw_k3(c1,hasil1,c2,hasil2,c3,hasil3) values('" . $no . "','" . $value->hasil . "', '" . $nox . "', '" . $value2->hasil . "', '" . $nom . "', '" . $value3->hasil . "')";
                        $this->db->query($q);
                    } ?>
                </tbody>
            </table>

            <div align="right">
                <a href="<?= base_url("dbi_proccess/ssb_proccess_k3"); ?>"><button type="button" class="btn btn-primary">Proses SSB</button></a>
            </div>

        </div>
    </main>