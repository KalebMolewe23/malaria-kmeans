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
                        <td rowspan="2">Konfirmasi Lab</td>
                        <td rowspan="2">Total Positif</td>
                        <td rowspan="2">Ibu Hamil</td>
                        <td colspan="1">Y</td>
                        <td colspan="1">X</td>
                        <td colspan="1">Z</td>
                    </tr>
                    <tr align="center">
                        <?php foreach ($centroid1 as $c1) { ?>
                            <td><?= $c1->Y ?></td>
                            <td><?= $c1->X ?></td>
                            <td><?= $c1->Z ?></td>
                        <?php } ?>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $this->db->query('truncate table datacluster_distance_k3_1');
                    $this->db->query('truncate table datacluster_distance_k3_2');
                    $this->db->query('truncate table datacluster_distance_k3_3');
                    foreach ($datakmeans as $value) {
                    ?>
                        <tr>
                            <input type="hidden" value="<?= $value->id_malaria ?>">
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?= $value->konfirmasi_lab; ?></td>
                            <td align="center"><?= $value->total_positif; ?></td>
                            <td align="center"><?= $value->ibu_hamil; ?></td>
                            <td colspan="3" align="center"><?php
                                                            $hc1 = sqrt(pow(($value->konfirmasi_lab - $c1->Y), 2) + pow(($value->total_positif - $c1->X), 2) + pow(($value->ibu_hamil - $c1->Y), 2));
                                                            echo $hc1;
                                                            ?></td>
                        </tr>
                    <?php
                        $q = "insert into datacluster_distance_k3_1(id_malaria,distance) values('" . $value->id_malaria . "','" . $hc1 . "')";
                        $this->db->query($q);
                    } ?>
                </tbody>
            </table><br>

            <p><strong>Cluster 2</strong></p>
            <table id="table_data" class="table table-bordered table_hover table-striped">
                <thead>
                    <tr align="center">
                        <td rowspan="2">#</td>
                        <td rowspan="2">Konfirmasi Lab</td>
                        <td rowspan="2">Total Positif</td>
                        <td rowspan="2">Ibu Hamil</td>
                        <td colspan="1">Y</td>
                        <td colspan="1">X</td>
                        <td colspan="1">Z</td>
                    </tr>
                    <tr align="center">
                        <?php foreach ($centroid2 as $c2) { ?>
                            <td><?= $c2->Y ?></td>
                            <td><?= $c2->X ?></td>
                            <td><?= $c2->Z ?></td>
                        <?php } ?>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($datakmeans2 as $value2) {
                    ?>
                        <tr>
                            <input type="hidden" value="<?= $value2->id_malaria ?>">
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?= $value2->konfirmasi_lab; ?></td>
                            <td align="center"><?= $value2->total_positif; ?></td>
                            <td align="center"><?= $value2->ibu_hamil; ?></td>
                            <td colspan="3" align="center"><?php
                                                            $hc2 = sqrt(pow(($value2->konfirmasi_lab - $c2->Y), 2) + pow(($value2->total_positif - $c2->X), 2) + pow(($value2->ibu_hamil - $c2->Z), 2));
                                                            echo $hc2;
                                                            ?></td>
                        </tr>
                    <?php
                        $q = "insert into datacluster_distance_k3_2(id_malaria,distance) values('" . $value2->id_malaria . "','" . $hc2 . "')";
                        $this->db->query($q);
                    } ?>
                </tbody>
            </table><br>

            <p><strong>Cluster 3</strong></p>
            <table id="table_data" class="table table-bordered table_hover table-striped">
                <thead>
                    <tr align="center">
                        <td rowspan="2">#</td>
                        <td rowspan="2">Konfirmasi Lab</td>
                        <td rowspan="2">Total Positif</td>
                        <td rowspan="2">Ibu Hamil</td>
                        <td colspan="1">Y</td>
                        <td colspan="1">X</td>
                        <td colspan="1">Z</td>
                    </tr>
                    <tr align="center">
                        <?php foreach ($centroid3 as $c3) { ?>
                            <td><?= $c3->Y ?></td>
                            <td><?= $c3->X ?></td>
                            <td><?= $c3->Z ?></td>
                        <?php } ?>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($datakmeans3 as $value3) {
                    ?>
                        <tr>
                            <input type="hidden" value="<?= $value3->id_malaria ?>">
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?= $value3->konfirmasi_lab; ?></td>
                            <td align="center"><?= $value3->total_positif; ?></td>
                            <td align="center"><?= $value3->ibu_hamil; ?></td>
                            <td colspan="3" align="center"><?php
                                                            $hc3 = sqrt(pow(($value3->konfirmasi_lab - $c3->Y), 2) + pow(($value3->total_positif - $c3->X), 2) + pow(($value3->ibu_hamil - $c3->Z), 2));
                                                            echo $hc3;
                                                            ?></td>
                        </tr>
                    <?php
                        $q = "insert into datacluster_distance_k3_3(id_malaria,distance) values('" . $value3->id_malaria . "','" . $hc3 . "')";
                        $this->db->query($q);
                    } ?>
                </tbody>
            </table>

            <div align="right">
                <a href="<?= base_url("dbi_proccess/hasil_ssw_k3"); ?>"><button type="submit" class="btn btn-primary">Hasil SSW</button></a>
            </div>
        </div>
    </main>
</section>