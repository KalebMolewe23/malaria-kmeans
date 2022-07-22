<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Process SSW</span>
    </div>

    <main>
        <div class="container-fluid">
            <table id="table_data" class="table table-bordered table_hover table-striped">
                <thead>
                    <tr align="center">
                        <td>#</td>
                        <td>Centroid 1</td>
                        <td>Centroid 2</td>
                        <td>Centroid 3</td>
                    </tr>

                    <?php foreach ($centroid1 as $c1) { ?>
                    <?php } ?>
                    <?php foreach ($centroid2 as $c2) { ?>
                    <?php } ?>
                    <?php foreach ($centroid3 as $c3) { ?>
                    <?php } ?>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $this->db->query('truncate table datassw_k3');
                    ?>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td align="center"><?php
                            $hc11 = sqrt(pow(($c1->Y - $c1->Y), 2) + pow(($c1->X - $c1->X), 2) + pow(($c1->Z - $c1->Z), 2));
                            echo $hc11;
                        ?></td>
                        <td align="center"><?php
                            $hc12 = sqrt(pow(($c1->Y - $c2->Y), 2) + pow(($c1->X - $c2->X), 2) + pow(($c1->Z - $c2->Z), 2));
                            echo $hc12;
                        ?></td>
                        <td align="center"><?php
                            $hc13 = sqrt(pow(($c1->Y - $c3->Y), 2) + pow(($c1->X - $c3->X), 2) + pow(($c1->Z - $c3->Z), 2));
                            echo $hc13;
                        ?></td>
                    </tr>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td align="center"><?php
                            $hc21 = sqrt(pow(($c2->Y - $c1->Y), 2) + pow(($c2->X - $c1->X), 2) + pow(($c2->Z - $c1->Z), 2));
                            echo $hc21;
                        ?></td>
                        <td align="center"><?php
                            $hc22 = sqrt(pow(($c2->Y - $c2->Y), 2) + pow(($c2->X - $c2->X), 2) + pow(($c2->Z - $c2->Z), 2));
                            echo $hc22;
                        ?></td>
                        <td align="center"><?php
                            $hc23 = sqrt(pow(($c2->Y - $c3->Y), 2) + pow(($c2->X - $c3->X), 2) + pow(($c2->Z - $c3->Z), 2));
                            echo $hc23;
                        ?></td>
                    </tr>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td align="center"><?php
                            $hc31 = sqrt(pow(($c3->Y - $c1->Y), 2) + pow(($c3->X - $c1->X), 2) + pow(($c3->Z - $c1->Z), 2));
                            echo $hc31;
                        ?></td>
                        <td align="center"><?php
                            $hc32 = sqrt(pow(($c3->Y - $c2->Y), 2) + pow(($c3->X - $c2->X), 2) + pow(($c3->Z - $c2->Z), 2));
                            echo $hc32;
                        ?></td>
                        <td align="center"><?php
                            $hc33 = sqrt(pow(($c3->Y - $c3->Y), 2) + pow(($c3->X - $c3->X), 2) + pow(($c3->Z - $c3->Z), 2));
                            echo $hc33;
                        ?></td>
                    </tr>
                    <?php
                        $q = "insert datassw_k3(nilair1_1,nilair1_2,nilair1_3,nilair2_1,nilair2_2,nilair2_3,nilair3_1,nilair3_2,nilair3_3) values('" . $hc11 . "','" . $hc12 . "','" . $hc13 . "','" . $hc21 . "','" . $hc22 . "','" . $hc23 . "','" . $hc31 . "','" . $hc32 . "','" . $hc33 . "')";
                        $this->db->query($q);
                    ?>
                </tbody>
            </table><br>
            <div align="right">
                <a href="<?= base_url("dbi_proccess/hasil_rasio_k3"); ?>"><button type="submit" class="btn btn-primary">Proses Rasio</button></a>
            </div>
        </div>
    </main>
</section>