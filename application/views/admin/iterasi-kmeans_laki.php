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
        <center>
            <h4><strong>Informasi Data Malaria Laki-Laki </strong></h4>
        </center><br>

        <a class="btn btn-primary" href="<?= base_url("admin/interasi_lanjut_laki"); ?>"><i class="fas fa-spinner"></i> Proses Iterasi Selanjutnya</a></br>
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
                <td>5</td>
                <td>5</td>
                <td>0</td>
                <td>493</td>
                <td>492</td>
                <td>10</td>
                <td>2990</td>
                <td>2941</td>
                <td>17</td>
            </tr>
            <?php

            $c1a = 5;
            $c1b = 5;
            $c1c = 0;

            $c2a = 493;
            $c2b = 492;
            $c2c = 10;

            $c3a = 2990;
            $c3b = 2941;
            $c3c = 17;

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

            $this->db->query('truncate table centroid_temp_laki');
            $this->db->query('truncate table hasil_centroid_laki');
            foreach ($malaria as $s) { ?>
                <tr>
                    <td><?php echo $s->id_malarial; ?></td>
                    <td><?php echo $s->nama_puskesmas; ?></td>
                    <td><?php echo $s->konfirmasi_lab; ?></td>
                    <td><?php echo $s->total_positif; ?></td>
                    <td><?php echo $s->ibu_hamil; ?></td>

                    <td colspan="3"><?php
                                    $hc1 = sqrt(pow(($s->konfirmasi_lab - $c1a), 2) + pow(($s->total_positif - $c1b), 2) + pow(($s->ibu_hamil - $c1c), 2));
                                    echo $hc1;
                                    ?></td>
                    <td colspan="3"><?php
                                    $hc2 = sqrt(pow(($s->konfirmasi_lab - $c2a), 2) + pow(($s->total_positif - $c2b), 2) + pow(($s->ibu_hamil - $c2c), 2));
                                    echo $hc2;
                                    ?></td>
                    <td colspan="3"><?php
                                    $hc3 = sqrt(pow(($s->konfirmasi_lab - $c3a), 2) + pow(($s->total_positif - $c3b), 2) + pow(($s->ibu_hamil - $c3c), 2));
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

                    $arr_c1_temp[$no] = $s->konfirmasi_lab;
                    $arr_c2_temp[$no] = $s->total_positif;
                    $arr_c3_temp[$no] = $s->ibu_hamil;

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

                $q = "insert into centroid_temp_laki(id_malaria,iterasi,c1,c2,c3) values('" . $s->id_malarial . "',1,'" . $arr_c1[$no] . "','" . $arr_c2[$no] . "','" . $arr_c3[$no] . "')";
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


            $q = "insert into hasil_centroid_laki(c1a,c1b,c1c,c2a,c2b,c2c,c3a,c3b,c3c) values('" . $c1a_b . "','" . $c1b_b . "','" . $c1c_b . "','" . $c2a_b . "','" . $c2b_b . "','" . $c2c_b . "','" . $c3a_b . "','" .
                $c3b_b . "','" . $c3c_b . "')";
            $this->db->query($q);



            ?>
        </table>
    </div>
</section>