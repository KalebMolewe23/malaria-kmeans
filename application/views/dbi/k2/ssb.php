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
                    </tr>

                    <?php foreach ($centroid1 as $c1) { ?>
                    <?php } ?>
                    <?php foreach ($centroid2 as $c2) { ?>
                    <?php } ?>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $this->db->query('truncate table datassw_k2');
                    ?>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td align="center"><?php
                            $hc11 = sqrt(pow(($c1->Y - $c1->Y), 2) + pow(($c1->X - $c1->X), 2));
                            echo $hc11;
                        ?></td>
                        <td align="center"><?php
                            $hc12 = sqrt(pow(($c1->Y - $c2->Y), 2) + pow(($c1->X - $c2->X), 2));
                            echo $hc12;
                        ?></td>
                    </tr>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td align="center"><?php
                            $hc21 = sqrt(pow(($c2->Y - $c1->Y), 2) + pow(($c2->X - $c1->X), 2));
                            echo $hc21;
                        ?></td>
                        <td align="center"><?php
                            $hc22 = sqrt(pow(($c2->Y - $c2->Y), 2) + pow(($c2->X - $c2->X), 2));
                            echo $hc22;
                        ?></td>
                    </tr>
                    <?php
                        $q = "insert datassw_k2(nilair2_1) values('" . $hc21 . "')";
                        $this->db->query($q);
                    ?>
                </tbody>
            </table><br>
            <div align="right">
                <a href="<?= base_url("dbi_proccess/hasil_dbi"); ?>"><button type="submit" class="btn btn-primary">Hasil DBI</button></a>
            </div>
        </div>
    </main>
</section>