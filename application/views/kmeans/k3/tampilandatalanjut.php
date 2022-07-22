<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-data'></i> Data Lanjut K-Means K-3</span>
    </div>

    <main>
        <div class="container-fluid">
            <div class="container">
                <br>
                <center>
                    <h4><strong>Informasi Data Vaksinasi Kecamatan Lowokwaru </strong></h4>
                </center><br>
            </div>

            <a class="btn btn-primary" href="<?= base_url("kmeans/interasi_k3_lanjut"); ?>"><i class='bx bx-loader-circle'></i> Proses Iterasi Selanjutnya</a></br></br>
            <?php


            $c1a = "";
            $c1b = "";
            $c1c = "";

            $c2a = "";
            $c2b = "";
            $c2c = "";

            $c3a = "";
            $c3b = "";
            $c3c = "";
            foreach ($centroid->result_array() as $c) {
                $c1a = $c['c1a'];
                $c1b = $c['c1b'];
                $c1c = $c['c1c'];

                $c2a = $c['c2a'];
                $c2b = $c['c2b'];
                $c2c = $c['c2c'];

                $c3a = $c['c3a'];
                $c3b = $c['c3b'];
                $c3c = $c['c3c'];
            }

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

            ?>
            <div class="table-responsive">
                <table id="table_data" class="table table-bordered table-admin">
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
                        <td><?php echo $c1a; ?></td>
                        <td><?php echo $c1b; ?></td>
                        <td><?php echo $c1c; ?></td>
                        <td><?php echo $c2a; ?></td>
                        <td><?php echo $c2b; ?></td>
                        <td><?php echo $c2c; ?></td>
                        <td><?php echo $c3a; ?></td>
                        <td><?php echo $c3b; ?></td>
                        <td><?php echo $c3c; ?></td>
                    </tr>
                    <?php
                    foreach ($malaria->result_array() as $s) { ?>
                        <tr>
                            <td><?php echo $s['id_malaria']; ?></td>
                            <td><?php echo $s['nama_puskesmas']; ?></td>
                            <td><?php echo $s['konfirmasi_lab']; ?></td>
                            <td><?php echo $s['total_positif']; ?></td>
                            <td><?php echo $s['ibu_hamil']; ?></td>

                            <td colspan="3"><?php
                                $hc1 = sqrt(pow(($s['konfirmasi_lab'] - $c1a), 2) + pow(($s['total_positif'] - $c1b), 2) + pow(($s['ibu_hamil'] - $c1c), 2));
                                echo $hc1;
                            ?></td>
                            <td colspan="3"><?php
                                $hc2 = sqrt(pow(($s['konfirmasi_lab'] - $c2a), 2) + pow(($s['total_positif'] - $c2b), 2) + pow(($s['ibu_hamil'] - $c2c), 2));
                                echo $hc2;
                            ?></td>
                            <td colspan="3"><?php
                                $hc3 = sqrt(pow(($s['konfirmasi_lab'] - $c3a), 2) + pow(($s['total_positif'] - $c3b), 2) + pow(($s['ibu_hamil'] - $c3c), 2));
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

                            $arr_c1_temp[$no] = $s['konfirmasi_lab'];
                            $arr_c2_temp[$no] = $s['total_positif'];
                            $arr_c3_temp[$no] = $s['ibu_hamil'];

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
                        $q = "insert into centroid_temp_k3(iterasi,id_malaria,c1,c2,c3) values('" . $id . "','" . $s['id_malaria'] . "','" . $arr_c1[$no] . "','" . $arr_c2[$no] . "','" . $arr_c3[$no] . "')";
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


                    $q = "insert into hasil_centroid_k3(c1a,c1b,c1c,c2a,c2b,c2c,c3a,c3b,c3c) values('" . $c1a_b . "','" . $c1b_b . "','" . $c1c_b . "','" . $c2a_b . "','" . $c2b_b . "','" . $c2c_b . "','" . $c3a_b . "','" .
                        $c3b_b . "','" . $c3c_b . "')";
                    $this->db->query($q);

                    ?>
                </table>
            </div>
        </div>
    </main>
</section>