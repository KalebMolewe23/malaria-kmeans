<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Process SSW</span>
    </div>

    <main>
        <div class="container-fluid">
            <p><strong>Cluster 1</strong></p>
            <table id="table_data" class="table table-bordered table_hover table-striped">
                <thead>
                    <tr align="center">
                        <td rowspan="2">#</td>
                        <td rowspan="2">Belum Vaksin Gel. 1</td>
                        <td rowspan="2">Belum Vaksin Gel. 2</td>
                        <td colspan="1">Y</td>
                        <td colspan="1">X</td>
                    </tr>
                    <tr align="center">
                        <?php foreach ($centroid1 as $c1) { ?>
                            <td><?= $c1->Y ?></td>
                            <td><?= $c1->X ?></td>
                        <?php } ?>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $this->db->query('truncate table datacluster_distance_k2_1');
                    $this->db->query('truncate table datacluster_distance_k2_2');
                    foreach ($datakmeans as $value) {
                    ?>
                        <tr>
                            <input type="hidden" value="<?= $value->iddata_malaria ?>">
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?= $value->konfirmasi_lab; ?></td>
                            <td align="center"><?= $value->total_positif; ?></td>
                            <td colspan="2" align="center"><?php
                                $hc1 = sqrt(pow(($value->konfirmasi_lab - $c1->Y), 2) + pow(($value->total_positif - $c1->X), 2));
                                echo $hc1;
                            ?></td>
                        </tr>
                    <?php
                        $q = "insert into datacluster_distance_k2_1(iddata_malaria,distance) values('" . $value->iddata_malaria . "','" . $hc1 . "')";
                        $this->db->query($q);
                    } ?>
                </tbody>
            </table><br>

            <p><strong>Cluster 2</strong></p>
            <table id="table_data" class="table table-bordered table_hover table-striped">
                <thead>
                    <tr align="center">
                        <td rowspan="2">#</td>
                        <td rowspan="2">Belum Vaksin Gel. 1</td>
                        <td rowspan="2">Belum Vaksin Gel. 2</td>
                        <td colspan="1">Y</td>
                        <td colspan="1">X</td>
                    </tr>
                    <tr align="center">
                        <?php foreach ($centroid2 as $c2) { ?>
                            <td><?= $c2->Y ?></td>
                            <td><?= $c2->X ?></td>
                        <?php } ?>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($datakmeans2 as $value2) {
                    ?>
                        <tr>
                            <input type="hidden" value="<?= $value2->iddata_malaria ?>">
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?= $value2->konfirmasi_lab; ?></td>
                            <td align="center"><?= $value2->total_positif; ?></td>
                            <td colspan="2" align="center"><?php
                                $hc2 = sqrt(pow(($value2->konfirmasi_lab - $c2->Y), 2) + pow(($value2->total_positif - $c2->X), 2));
                                echo $hc2;
                            ?></td>
                        </tr>
                    <?php
                        $q = "insert into datacluster_distance_k2_2(iddata_malaria,distance) values('" . $value2->iddata_malaria . "','" . $hc2 . "')";
                        $this->db->query($q);
                    } ?>
                </tbody>
            </table>
            <div align="right">
                <a href="<?= base_url("dbi_proccess/hasil_ssw"); ?>"><button type="submit" class="btn btn-primary">Hasil SSW</button></a>
            </div>
        </div>
    </main>
</section>