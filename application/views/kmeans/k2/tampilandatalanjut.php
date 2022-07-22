<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Iterasi K-2</span>
    </div>

    <main>
        <div class="container-fluid">

            <div class="container">
                <br>
                <center>
                    <h4><strong>Informasi Perhitungan K-Means K-2 </strong></h4>
                </center><br>
            </div>

            <a class="btn btn-primary" href="<?= base_url("kmeans/interasi_k2_lanjut"); ?>"><i class='bx bx-loader-circle'></i> Proses Iterasi Selanjutnya</a></br></br>
        <?php

        $c1a = "";
        $c1b = "";

        $c2a = "";
        $c2b = "";
        foreach ($centroid->result_array() as $c) {
            $c1a = $c['c1a'];
            $c1b = $c['c1b'];

            $c2a = $c['c2a'];
            $c2b = $c['c2b'];
        }

        $c1a_b = "";
        $c1b_b = "";

        $c2a_b = "";
        $c2b_b = "";

        $hc1 = 0;
        $hc2 = 0;

        $no = 0;
        $arr_c1 = array();
        $arr_c2 = array();

        $arr_c1_temp = array();
        $arr_c2_temp = array();

        ?>
            <table id="table_data" class="table table-bordered table_hover table-striped">
                <tr align="center">
                    <td rowspan="2">No.</td>
                    <td rowspan="2">Nama Kelurahan</td>
                    <td rowspan="2">Belum Vaksin G-1</td>
                    <td rowspan="2">Belum Vaksin G-2</td>
                    <td colspan="2">Centroid 1</td>
                    <td colspan="2">Centroid 2</td>
                    <td rowspan="2">C1</td>
                    <td rowspan="2">C2</td>
                </tr>
                <tr align="center">
                    <td><?php echo $c1a; ?></td>
                    <td><?php echo $c1b; ?></td>
                    <td><?php echo $c2a; ?></td>
                    <td><?php echo $c2b; ?></td>
                </tr>
                <?php
                foreach ($malaria->result_array() as $s) { ?>
                    <tr align="center">
                        <td><?php echo $s['id_malaria']; ?></td>
                        <td><?php echo $s['nama_puskesmas']; ?></td>
                        <td><?php echo $s['konfirmasi_lab']; ?></td>
                        <td><?php echo $s['total_positif']; ?></td>

                        <td colspan="2"><?php
                                        $hc1 = sqrt(pow(($s['konfirmasi_lab'] - $c1a), 2) + pow(($s['total_positif'] - $c1b), 2));
                                        echo $hc1;
                                        ?></td>
                        <td colspan="2"><?php
                                        $hc2 = sqrt(pow(($s['konfirmasi_lab'] - $c2a), 2) + pow(($s['total_positif'] - $c2b), 2));
                                        echo $hc2;
                                        ?></td>
                        <?php

                        if ($hc1 <= $hc2) {
                            $arr_c1[$no] = 1;
                        } else {
                            $arr_c1[$no] = '0';
                        }

                        if ($hc2 <= $hc1) {
                            $arr_c2[$no] = 1;
                        } else {
                            $arr_c2[$no] = '0';
                        }

                        $arr_c1_temp[$no] = $s['konfirmasi_lab'];
                        $arr_c2_temp[$no] = $s['total_positif'];
                        $warna1 = "";
                        $warna2 = "";
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
                    </tr>
                <?php
                    $q = "insert into centroid_temp_k2(iterasi,iddata_malaria,c1,c2) values('" . $id . "','" . $s['id_malaria'] . "','" . $arr_c1[$no] . "', '" . $arr_c2[$no] . "')";
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

                $q = "insert into hasil_centroid_k2(c1a,c1b,c2a,c2b) values('" . $c1a_b . "','" . $c1b_b . "','" . $c2a_b . "','" . $c2b_b . "')";
                $this->db->query($q);

                ?>
            </table>
        </div>
        </div>
    </main>
</section>