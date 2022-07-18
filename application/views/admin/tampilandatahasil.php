<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo"><i class="fab fa-mastodon"></i>Malaria</label>
    <ul>
        <li><a href="<?= base_url("admin"); ?>"><strong>Home</strong></a></li>
        <li><a href="<?= base_url("admin/daerah_malaria"); ?>"><strong>Informasi Puskesmas</strong></a></li>
        <li><a href="<?= base_url("admin/add_data"); ?>"><strong>Data Malaria</strong></a></li>
        <li><a href="<?= base_url("admin/tampilan_data"); ?>"><strong>Perhitungan K-Means</strong></a></li>
        <li><a href="<?= base_url("auth/logout"); ?>"><strong>Log Out</strong></a></li>
    </ul>
</nav>

<section>
    <div class="container">
        <br>
        <h1>Data Hasil Iterasi</h1>
        <div id="body">
            <a class="btn btn-success" href="<?= base_url("admin/grafik"); ?>"><i class="fas fa-chart-pie"></i> Grafik Malaria</a><br>
            <?php
            foreach ($q->result_array() as $hq) {
            ?>
                <center>
                    <h3>Iterasi ke-<?php echo $hq['iterasi']; ?></h3>
                </center>
                <div class="table-responsive">
                    <table id="table_data" class="table table-bordered table-admin">
                        <tr align="center">
                            <td>C1</td>
                            <td>C2</td>
                            <td>C3</td>
                        </tr>
                        <?php
                        $q2 = $this->db->query('select * from centroid_temp where iterasi=' . $hq['iterasi'] . '');
                        foreach ($q2->result() as $tq) {
                            $warna1 = "";
                            $warna2 = "";
                            $warna3 = "";
                            if ($tq->c1 == 1) {
                                $warna1 = '#FFFF00';
                            } else {
                                $warna1 = '#EAEAEA';
                            }
                            if ($tq->c2 == 1) {
                                $warna2 = '#FFFF00';
                            } else {
                                $warna2 = '#EAEAEA';
                            }
                            if ($tq->c3 == 1) {
                                $warna3 = '#FFFF00';
                            } else {
                                $warna3 = '#EAEAEA';
                            }
                        ?>
                            <tr align="center">
                                <td bgcolor="<?php echo $warna1; ?>"><?php echo $tq->c1; ?></td>
                                <td bgcolor="<?php echo $warna2; ?>"><?php echo $tq->c2; ?></td>
                                <td bgcolor="<?php echo $warna3; ?>"><?php echo $tq->c3; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            <?php
            }
            ?>
        </div><br>

        <center>
            <h3>Hasil Proses K-means</h3>
        </center><br>
        <table id="table_data" class="table table-bordered table-admin">
            <tr align="center">
                <td>No Puskesmas</td>
                <td>Nama Puskesmas</td>
                <td>Predikat</td>
            </tr>
            <?php
            foreach ($data_hasil->result() as $h) {
            ?>
                <tr align="center">
                    <td><?php echo $h->id_malaria; ?></td>
                    <td><?php echo $h->nama_puskesmas; ?></td>
                    <td><?php echo $h->predikat; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</section>