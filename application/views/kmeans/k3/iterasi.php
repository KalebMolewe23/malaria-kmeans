<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Iterasi K-3</span>
    </div>

    <main>
        <div class="container-fluid">
            <div class="container">
                <br>
                <center>
                    <h4><strong>Informasi Perhitungan K-Means K-3</strong></h4>
                </center><br>
            </div>

            <a class="btn btn-primary" href="<?= base_url("kmeans/interasi_k3_lanjut"); ?>"><i class='bx bx-loader-circle'></i> Proses Iterasi Selanjutnya</a></br>
            </br>

            <table id="table_data" class="table table-bordered table_hover table-striped">
                <tr align="center">
                    <td rowspan="2">No.</td>
                    <td rowspan="2">Nama Puskesmas</td>
                    <td rowspan="2">Konfirmasi Lab</td>
                    <td rowspan="2">Total Positif</td>
                    <td rowspan="2">Ibu Hamil</td>
                    <td colspan="3">Centroid 1</td>
                    <td colspan="3">Centroid 2</td>
                    <td colspan="3">Centroid 3</td>
                    <td rowspan="2">C1</td>
                    <td rowspan="2">C2</td>
                    <td rowspan="2">C3</td>
                </tr>
                <tr align="center">
                    <?php foreach ($centroid1 as $c) { ?>
                        <td><?= $c->data1 ?></td>
                        <td><?= $c->data2 ?></td>
                        <td><?= $c->data3 ?></td>
                    <?php } ?>
                    <?php foreach ($centroid2 as $c2) { ?>
                        <td><?= $c2->data1 ?></td>
                        <td><?= $c2->data2 ?></td>
                        <td><?= $c2->data3 ?></td>
                    <?php } ?>
                    <?php foreach ($centroid3 as $c3) { ?>
                        <td><?= $c3->data1 ?></td>
                        <td><?= $c3->data2 ?></td>
                        <td><?= $c3->data3 ?></td>
                    <?php } ?>
                </tr>

                <?php

                $c1a = $c->data1;
                $c1b = $c->data2;
                $c1c = $c->data3;

                $c2a = $c2->data1;
                $c2b = $c2->data1;
                $c2c = $c2->data3;

                $c3a = $c3->data1;
                $c3b = $c3->data1;
                $c3c = $c3->data3;

                $c1a_b = "";
                $c1b_b = "";
                $c1c_b = "";

                $c2a_b = "";
                $c2b_b = "";
                $c2c_b = "";

                $c3a_b = "";
                $c3b_b = "";
                $c3c_b = "";

                $hc1 = 0;
                $hc2 = 0;
                $hc3 = 0;

                $no = 0;
                $arr_c1 = array();
                $arr_c2 = array();
                $arr_c3 = array();

                $arr_c1_temp = array();
                $arr_c2_temp = array();
                $arr_c3_temp = array();

                $this->db->query('truncate table centroid_temp_k3');
                $this->db->query('truncate table hasil_centroid_k3');
                foreach ($kmeans as $value) { ?>
                    <tr align="center">
                        <td><?php echo $value->id_malaria ?></td>
                        <td><?php echo $value->nama_puskesmas; ?></td>
                        <td><?php echo $value->konfirmasi_lab; ?></td>
                        <td><?php echo $value->total_positif; ?></td>
                        <td><?php echo $value->ibu_hamil; ?></td>

                        <td colspan="3"><?php
                                        $hc1 = sqrt(pow(($value->konfirmasi_lab - $c1a), 2) + pow(($value->total_positif - $c1b), 2) + pow(($value->ibu_hamil - $c1c), 2));
                                        echo $hc1;
                                        ?></td>
                        <td colspan="3"><?php
                                        $hc2 = sqrt(pow(($value->konfirmasi_lab - $c2a), 2) + pow(($value->total_positif - $c2b), 2) + pow(($value->ibu_hamil- $c2c), 2));
                                        echo $hc2;
                                        ?></td>
                        <td colspan="3"><?php
                                        $hc3 = sqrt(pow(($value->konfirmasi_lab - $c3a), 2) + pow(($value->total_positif - $c3b), 2) + pow(($value->ibu_hamil - $c3c), 2));
                                        echo $hc3;
                                        ?></td>

                        <?php

                        if ($hc1 <= $hc2) {
                            if ($hc1 <= $hc3) {
                                $arr_c1[$no] = 1;
                            } else {
                                $arr_c1[$no] = '0';
                            }
                        } else {
                            $arr_c1[$no] = '0';
                        }

                        if ($hc2 <= $hc1) {
                            if ($hc2 <= $hc3) {
                                $arr_c2[$no] = 1;
                            } else {
                                $arr_c2[$no] = '0';
                            }
                        } else {
                            $arr_c2[$no] = '0';
                        }

                        if ($hc3 <= $hc1) {
                            if ($hc3 <= $hc2) {
                                $arr_c3[$no] = 1;
                            } else {
                                $arr_c3[$no] = '0';
                            }
                        } else {
                            $arr_c3[$no] = '0';
                        }

                        $arr_c1_temp[$no] = $value->konfirmasi_lab;
                        $arr_c2_temp[$no] = $value->total_positif;
                        $arr_c3_temp[$no] = $value->ibu_hamil;

                        $warna1 = "";
                        $warna2 = "";
                        $warna3 = "";
                        ?>
                        <?php if ($arr_c1[$no] == 1) {
                            $warna1 = '#FFFF00';
                        } else {
                            $warna1 = '#ccc';
                        } ?><td bgcolor="<?php echo $warna1; ?>"><?php echo $arr_c1[$no]; ?></td>
                        <?php if ($arr_c2[$no] == 1) {
                            $warna2 = '#FFFF00';
                        } else {
                            $warna2 = '#ccc';
                        } ?><td bgcolor="<?php echo $warna2; ?>"><?php echo $arr_c2[$no]; ?></td>
                        <?php if ($arr_c3[$no] == 1) {
                            $warna3 = '#FFFF00';
                        } else {
                            $warna3 = '#ccc';
                        } ?><td bgcolor="<?php echo $warna3; ?>"><?php echo $arr_c3[$no]; ?></td>
                    </tr>

                <?php

                    $q = "insert into centroid_temp_k3(iterasi,id_malaria,c1,c2,c3) values(1,'" . $value->id_malaria . "','" . $arr_c1[$no] . "', '" . $arr_c2[$no] . "', '" . $arr_c3[$no] . "')";
                    $this->db->query($q);

                    $no++;
                }
                //centroid baru 1.a
                $jum = 0;
                $arr = array();
                for ($i = 0; $i < count($arr_c1); $i++) {
                    $arr[$i] = $arr_c1_temp[$i] * $arr_c1[$i];
                    if ($arr_c1[$i] == 1) {
                        $jum++;
                    }
                }
                $c1a_b = array_sum($arr) / $jum;

                // var_dump($c1a_b);

                //centroid baru 1.b
                $jum = 0;
                $arr = array();
                for ($i = 0; $i < count($arr_c2); $i++) {
                    $arr[$i] = $arr_c2_temp[$i] * $arr_c1[$i];
                    if ($arr_c1[$i] == 1) {
                        $jum++;
                    }
                }
                $c1b_b = array_sum($arr) / $jum;



                //centroid baru 1.c
                $jum = 0;
                $arr = array();
                for ($i = 0; $i < count($arr_c3); $i++) {
                    $arr[$i] = $arr_c3_temp[$i] * $arr_c1[$i];
                    if ($arr_c1[$i] == 1) {
                        $jum++;
                    }
                }
                $c1c_b = array_sum($arr) / $jum;




                //centroid baru 2.a
                $jum = 0;
                $arr = array();
                for ($i = 0; $i < count($arr_c1); $i++) {
                    $arr[$i] = $arr_c1_temp[$i] * $arr_c2[$i];
                    if ($arr_c2[$i] == 1) {
                        $jum++;
                    }
                }
                $c2a_b = array_sum($arr) / $jum;

                //centroid baru 2.b
                $jum = 0;
                $arr = array();
                for ($i = 0; $i < count($arr_c2); $i++) {
                    $arr[$i] = $arr_c2_temp[$i] * $arr_c2[$i];
                    if ($arr_c2[$i] == 1) {
                        $jum++;
                    }
                }
                $c2b_b = array_sum($arr) / $jum;

                //centroid baru 2.c
                $jum = 0;
                $arr = array();
                for ($i = 0; $i < count($arr_c3); $i++) {
                    $arr[$i] = $arr_c3_temp[$i] * $arr_c2[$i];
                    if ($arr_c2[$i] == 1) {
                        $jum++;
                    }
                }
                $c2c_b = array_sum($arr) / $jum;




                //centroid baru 3.a
                $jum = 0;
                $arr = array();
                for ($i = 0; $i < count($arr_c1); $i++) {
                    $arr[$i] = $arr_c1_temp[$i] * $arr_c3[$i];
                    if ($arr_c3[$i] == 1) {
                        $jum++;
                    }
                }
                $c3a_b = array_sum($arr) / $jum;

                //centroid baru 3.b
                $jum = 0;
                $arr = array();
                for ($i = 0; $i < count($arr_c2); $i++) {
                    $arr[$i] = $arr_c2_temp[$i] * $arr_c3[$i];
                    if ($arr_c3[$i] == 1) {
                        $jum++;
                    }
                }
                $c3b_b = array_sum($arr) / $jum;

                //centroid baru 3.c
                $jum = 0;
                $arr = array();
                for ($i = 0; $i < count($arr_c3); $i++) {
                    $arr[$i] = $arr_c3_temp[$i] * $arr_c3[$i];
                    if ($arr_c3[$i] == 1) {
                        $jum++;
                    }
                }
                $c3c_b = array_sum($arr) / $jum;

                $q = "insert into hasil_centroid_k3(c1a,c1b,c1c,c2a,c2b,c2c,c3a,c3b,c3c) values('" . $c1a_b . "','" . $c1b_b . "','" . $c1c_b . "','" . $c2a_b . "','" . $c2b_b . "','" . $c2c_b . "','" . $c3a_b . "','" . $c3b_b . "','" . $c3c_b . "')";
                $this->db->query($q);

                ?>
            </table>
        </div>
    </main>
</section>