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
                    <h4><strong>Informasi Perhitungan K-Means K-3 2020</strong></h4>
                </center><br>
            </div>

            <a class="btn btn-primary" href="<?php echo base_url(); ?>kmeans/iterasi_kmeans_k3_lanjut_2020">Proses Iterasi Selanjutnya</a>
            <a class="btn btn-success" href="<?php echo base_url(); ?>kmeans/kmeans_2020">Proses K-3</a>
            <a class="btn btn-success" href="<?php echo base_url(); ?>kmeans/k4_2020">Proses K-4</a>
            <a class="btn btn-success" href="<?php echo base_url(); ?>kmeans/k5_2020">Proses K-5</a><br><br>

            <?php
            $this->db->query('truncate table centroid_k3_awal_2020');

            foreach($c1->result() as $value_ci1){
              $data_c1 = $value_ci1->idmalaria_baru2020;
            }

            foreach($c2->result() as $value_ci2){
              $data_c2 = $value_ci2->idmalaria_baru2020;
            }

            foreach($c3->result() as $value_ci3){
              $data_c3 = $value_ci3->idmalaria_baru2020;
            }

            $q = "insert into centroid_k3_awal_2020(idmalaria_c1_2020, idmalaria_c2_2020, idmalaria_c3_2020) values('".$data_c1."','".$data_c2."','".$data_c3."')";
            $this->db->query($q);

            // data centroid 1
            $this->db->where('idmalaria_c1_2020', $data_c1);
            $this->db->join('data_malaria_baru_2020', 'data_malaria_baru_2020.idmalaria_baru2020 = centroid_k3_awal_2020.idmalaria_c1_2020');
            $data_centroid1 = $this->db->get('centroid_k3_awal_2020');
            
            foreach ($data_centroid1->result() as $value_centroid_1){
              $data_c1_positif = $value_centroid_1->positif;
              $data_c1_usia_0 = $value_centroid_1->usia_0;
              $data_c1_usia_1 = $value_centroid_1->usia_1;
              $data_c1_usia_5 = $value_centroid_1->usia_5;
              $data_c1_usia_10 = $value_centroid_1->usia_10;
              $data_c1_usia_15 = $value_centroid_1->usia_15;
              $data_c1_usia_64 = $value_centroid_1->usia_64;
              $data_c1_ibu_hamil = $value_centroid_1->ibu_hamil;
              $data_c1_pf = $value_centroid_1->pf;
              $data_c1_pv = $value_centroid_1->pv;
              $data_c1_po = $value_centroid_1->po;
              $data_c1_pm = $value_centroid_1->pm;
              $data_c1_pk = $value_centroid_1->pk;
            }
            
            // data centroid 2
            $this->db->where('idmalaria_c2_2020', $data_c2);
            $this->db->join('data_malaria_baru_2020', 'data_malaria_baru_2020.idmalaria_baru2020 = centroid_k3_awal_2020.idmalaria_c2_2020');
            $data_centroid2 = $this->db->get('centroid_k3_awal_2020');
            
            foreach ($data_centroid2->result() as $value_centroid_2){
              $data_c2_positif = $value_centroid_2->positif;
              $data_c2_usia_0 = $value_centroid_2->usia_0;
              $data_c2_usia_1 = $value_centroid_2->usia_1;
              $data_c2_usia_5 = $value_centroid_2->usia_5;
              $data_c2_usia_10 = $value_centroid_2->usia_10;
              $data_c2_usia_15 = $value_centroid_2->usia_15;
              $data_c2_usia_64 = $value_centroid_2->usia_64;
              $data_c2_ibu_hamil = $value_centroid_2->ibu_hamil;
              $data_c2_pf = $value_centroid_2->pf;
              $data_c2_pv = $value_centroid_2->pv;
              $data_c2_po = $value_centroid_2->po;
              $data_c2_pm = $value_centroid_2->pm;
              $data_c2_pk = $value_centroid_2->pk;
            }

            // data centroid 3
            $this->db->where('idmalaria_c3_2020', $data_c3);
            $this->db->join('data_malaria_baru_2020', 'data_malaria_baru_2020.idmalaria_baru2020 = centroid_k3_awal_2020.idmalaria_c3_2020');
            $data_centroid3 = $this->db->get('centroid_k3_awal_2020');
            
            foreach ($data_centroid3->result() as $value_centroid_3){
              $data_c3_positif = $value_centroid_3->positif;
              $data_c3_usia_0 = $value_centroid_3->usia_0;
              $data_c3_usia_1 = $value_centroid_3->usia_1;
              $data_c3_usia_5 = $value_centroid_3->usia_5;
              $data_c3_usia_10 = $value_centroid_3->usia_10;
              $data_c3_usia_15 = $value_centroid_3->usia_15;
              $data_c3_usia_64 = $value_centroid_3->usia_64;
              $data_c3_ibu_hamil = $value_centroid_3->ibu_hamil;
              $data_c3_pf = $value_centroid_3->pf;
              $data_c3_pv = $value_centroid_3->pv;
              $data_c3_po = $value_centroid_3->po;
              $data_c3_pm = $value_centroid_3->pm;
              $data_c3_pk = $value_centroid_3->pk;
            }
            
          ?>
          <table class="table table-bordered table_hover table-striped">
            <thead>
              <tr>
                <th>Data Centroid</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              <tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <center>1</center>
              </td>
              <td>
                <?= $data_c1_positif ?> 
              </td>
              <td>
                <?= $data_c1_usia_0 ?> 
              </td>
              <td>
                <?= $data_c1_usia_1 ?> 
              </td>
              <td>
                <?= $data_c1_usia_5 ?> 
              </td>
              <td>
                <?= $data_c1_usia_10 ?> 
              </td>
              <td>
                <?= $data_c1_usia_15 ?> 
              </td>
              <td>
                <?= $data_c1_usia_64 ?> 
              </td>
              <td>
                <?= $data_c1_ibu_hamil ?> 
              </td>
              <td>
                <?= $data_c1_pf ?> 
              </td>
              <td>
                <?= $data_c1_pv?> 
              </td>
              <td>
                <?= $data_c1_po ?> 
              </td>
              <td>
                <?= $data_c1_pm ?> 
              </td>
              <td>
                <?= $data_c1_pk ?> 
              </td>
              
          </tr>
            <tr>
              <td>
                <center>2</center>
              </td>
              <td>
                <?= $data_c2_positif ?> 
              </td>
              <td>
                <?= $data_c2_usia_0 ?> 
              </td>
              <td>
                <?= $data_c2_usia_1 ?> 
              </td>
              <td>
                <?= $data_c2_usia_5 ?> 
              </td>
              <td>
                <?= $data_c2_usia_10 ?> 
              </td>
              <td>
                <?= $data_c2_usia_15 ?> 
              </td>
              <td>
                <?= $data_c2_usia_64 ?> 
              </td>
              <td>
                <?= $data_c2_ibu_hamil ?> 
              </td>
              <td>
                <?= $data_c2_pf ?> 
              </td>
              <td>
                <?= $data_c2_pv?> 
              </td>
              <td>
                <?= $data_c2_po ?> 
              </td>
              <td>
                <?= $data_c2_pm ?> 
              </td>
              <td>
                <?= $data_c2_pk ?> 
              </td>
              
          </tr>
            <tr>
              <td>
                <center>3</center>
              </td>
              <td>
                <?= $data_c3_positif ?> 
              </td>
              <td>
                <?= $data_c3_usia_0 ?> 
              </td>
              <td>
                <?= $data_c3_usia_1 ?> 
              </td>
              <td>
                <?= $data_c3_usia_5 ?> 
              </td>
              <td>
                <?= $data_c3_usia_10 ?> 
              </td>
              <td>
                <?= $data_c3_usia_15 ?> 
              </td>
              <td>
                <?= $data_c3_usia_64 ?> 
              </td>
              <td>
                <?= $data_c3_ibu_hamil ?> 
              </td>
              <td>
                <?= $data_c3_pf ?> 
              </td>
              <td>
                <?= $data_c3_pv?> 
              </td>
              <td>
                <?= $data_c3_po ?> 
              </td>
              <td>
                <?= $data_c3_pm ?> 
              </td>
              <td>
                <?= $data_c3_pk ?> 
              </td>
      
          </tr>
          </tbody>
          </table><br>

            <table class="table table-striped data">
              <thead>
                <tr align="center">
                  <th rowspan="2">#</th>
                  <th rowspan="2">Nama Puskesmas</th>
                  <th rowspan="2">Positif</th>
                  <th rowspan="2">Usia 0-11 Bulan</th>
                  <th rowspan="2">Usia 1-4 Tahun</th>
                  <th rowspan="2">Usia 5-9 Tahun</th>
                  <th rowspan="2">Usia 10-14 Tahun</th>
                  <th rowspan="2">Usia 15-64 Tahun</th>
                  <th rowspan="2">Usia > 64 Tahun</th>
                  <th rowspan="2">Ibu Hamil</th>
                  <th rowspan="2">PF</th>
                  <th rowspan="2">PV</th>
                  <th rowspan="2">PO</th>
                  <th rowspan="2">PM</th>
                  <th rowspan="2">PK</th>
                  <th rowspan="2">Centroid 1</th>
                  <th rowspan="2">Centroid 2</th>
                  <th rowspan="2">Centroid 3</th>
                  <th rowspan="2">C1</th>
                  <th rowspan="2">C2</th>
                  <th rowspan="2">C3</th>
                </tr>
                <?php

                  // centroid 1
                  $c1a = $data_c1_positif;
                  $c1b = $data_c1_usia_0;
                  $c1c = $data_c1_usia_1;
                  $c1d = $data_c1_usia_5;
                  $c1e = $data_c1_usia_10;
                  $c1f = $data_c1_usia_15;
                  $c1g = $data_c1_usia_64;
                  $c1h = $data_c1_ibu_hamil;
                  $c1i = $data_c1_pf;
                  $c1j = $data_c1_pv;
                  $c1k = $data_c1_po;
                  $c1l = $data_c1_pm;
                  $c1m = $data_c1_pk;
                  
                  // centroid 2
                  $c2a = $data_c2_positif;
                  $c2b = $data_c2_usia_0;
                  $c2c = $data_c2_usia_1;
                  $c2d = $data_c2_usia_5;
                  $c2e = $data_c2_usia_10;
                  $c2f = $data_c2_usia_15;
                  $c2g = $data_c2_usia_64;
                  $c2h = $data_c2_ibu_hamil;
                  $c2i = $data_c2_pf;
                  $c2j = $data_c2_pv;
                  $c2k = $data_c2_po;
                  $c2l = $data_c2_pm;
                  $c2m = $data_c2_pk;

                  // centroid 3
                  $c3a = $data_c3_positif;
                  $c3b = $data_c3_usia_0;
                  $c3c = $data_c3_usia_1;
                  $c3d = $data_c3_usia_5;
                  $c3e = $data_c3_usia_10;
                  $c3f = $data_c3_usia_15;
                  $c3g = $data_c3_usia_64;
                  $c3h = $data_c3_ibu_hamil;
                  $c3i = $data_c3_pf;
                  $c3j = $data_c3_pv;
                  $c3k = $data_c3_po;
                  $c3l = $data_c3_pm;
                  $c3m = $data_c3_pk;

                  $c1a_b = "";
                  $c1b_b = "";
                  $c1c_b = "";
                  $c1d_b = "";
                  $c1e_b = "";
                  $c1f_b = "";
                  $c1g_b = "";
                  $c1h_b = "";
                  $c1i_b = "";
                  $c1j_b = "";
                  $c1k_b = "";
                  $c1l_b = "";
                  $c1m_b = "";

                  $c2a_b = "";
                  $c2b_b = "";
                  $c2c_b = "";
                  $c2d_b = "";
                  $c2e_b = "";
                  $c2f_b = "";
                  $c2g_b = "";
                  $c2h_b = "";
                  $c2i_b = "";
                  $c2j_b = "";
                  $c2k_b = "";
                  $c2l_b = "";
                  $c2m_b = "";

                  $c3a_b = "";
                  $c3b_b = "";
                  $c3c_b = "";
                  $c3d_b = "";
                  $c3e_b = "";
                  $c3f_b = "";
                  $c3g_b = "";
                  $c3h_b = "";
                  $c3i_b = "";
                  $c3j_b = "";
                  $c3k_b = "";
                  $c3l_b = "";
                  $c3m_b = "";
                  
                  $hc1 = 0;
                  $hc2 = 0;
                  $hc3 = 0;

                  $no = 1;
                  $arr_c1 = array();
                  $arr_c2 = array();
                  $arr_c3 = array();

                  $arr_c1_temp = array();
                  $arr_c2_temp = array();
                  $arr_c3_temp = array();
                  $arr_c4_temp = array();
                  $arr_c5_temp = array();
                  $arr_c6_temp = array();
                  $arr_c7_temp = array();
                  $arr_c8_temp = array();
                  $arr_c9_temp = array();
                  $arr_c10_temp = array();
                  $arr_c11_temp = array();
                  $arr_c12_temp = array();
                  $arr_c13_temp = array();

                  $this->db->query('truncate table centroid_temp_k3_baru_2020');
                  $this->db->query('truncate table hasil_centroid_k3_baru_2020');
                ?>
              </thead>
              <tbody>
                <?php foreach ($cluster->result_array() as $s) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $s['nama_puskesmas']; ?></td>
                  <td><?= $s['positif']; ?></td>
                  <td><?= $s['usia_0']; ?></td>
                  <td><?= $s['usia_1']; ?></td>
                  <td><?= $s['usia_5']; ?></td>
                  <td><?= $s['usia_10']; ?></td>
                  <td><?= $s['usia_15']; ?></td>
                  <td><?= $s['usia_64']; ?></td>
                  <td><?= $s['ibu_hamil']; ?></td>
                  <td><?= $s['pf']; ?></td>
                  <td><?= $s['pv']; ?></td>
                  <td><?= $s['po']; ?></td>
                  <td><?= $s['pm']; ?></td>
                  <td><?= $s['pk']; ?></td>
                  <td><?php
                    $hc1 = sqrt(pow(($s['positif'] - $c1a), 2) + pow(($s['usia_0'] - $c1b), 2) + pow(($s['usia_1'] - $c1c), 2) + pow(($s['usia_5'] - $c1d), 2) + pow(($s['usia_10'] - $c1e), 2) + pow(($s['usia_15'] - $c1f), 2) + pow(($s['usia_64'] - $c1g), 2) + pow(($s['ibu_hamil'] - $c1h), 2) + pow(($s['pf'] - $c1i), 2) + pow(($s['pv'] - $c1j), 2) + pow(($s['po'] - $c1k), 2) + pow(($s['pm'] - $c1l), 2) + pow(($s['pk'] - $c1m), 2));
                    echo $hc1;
                  ?></td>
                  <td><?php
                    $hc2 = sqrt(pow(($s['positif'] - $c2a), 2) + pow(($s['usia_0'] - $c2b), 2) + pow(($s['usia_1'] - $c2c), 2) + pow(($s['usia_5'] - $c2d), 2) + pow(($s['usia_10'] - $c2e), 2) + pow(($s['usia_15'] - $c2f), 2) + pow(($s['usia_64'] - $c2g), 2) + pow(($s['ibu_hamil'] - $c2h), 2) + pow(($s['pf'] - $c2i), 2) + pow(($s['pv'] - $c2j), 2) + pow(($s['po'] - $c2k), 2) + pow(($s['pm'] - $c2l), 2) + pow(($s['pk'] - $c2m), 2));
                    echo $hc2;
                  ?></td>
                  <td><?php
                    $hc3 = sqrt(pow(($s['positif'] - $c3a), 2) + pow(($s['usia_0'] - $c3b), 2) + pow(($s['usia_1'] - $c3c), 2) + pow(($s['usia_5'] - $c3d), 2) + pow(($s['usia_10'] - $c3e), 2) + pow(($s['usia_15'] - $c3f), 2) + pow(($s['usia_64'] - $c3g), 2) + pow(($s['ibu_hamil'] - $c3h), 2) + pow(($s['pf'] - $c3i), 2) + pow(($s['pv'] - $c3j), 2) + pow(($s['po'] - $c3k), 2) + pow(($s['pm'] - $c3l), 2) + pow(($s['pk'] - $c3m), 2));
                    echo $hc3;
                  ?></td>

                    <?php
                       if($hc1<=$hc2)
                       {
                         if($hc1<=$hc3)
                         {
                           $arr_c1[$no] = 1;
                         }
                         else
                         {
                           $arr_c1[$no] = '0';
                         }
                       }
                       else
                       {
                         $arr_c1[$no] = '0';
                       }
                       
                       if($hc2<=$hc1)
                       {
                         if($hc2<=$hc3)
                         {
                           $arr_c2[$no] = 1;
                         }
                         else
                         {
                           $arr_c2[$no] = '0';
                         }
                       }
                       else
                       {
                         $arr_c2[$no] = '0';
                       }
                       
                       if($hc3<=$hc1)
                       {
                         if($hc3<=$hc2)
                         {
                           $arr_c3[$no] = 1;
                         }
                         else
                         {
                           $arr_c3[$no] = '0';
                         }
                       }
                       else
                       {
                         $arr_c3[$no] = '0';
                       }

                      $arr_c1_temp[$no] = $s['positif'];
                      $arr_c2_temp[$no] = $s['usia_0'];
                      $arr_c3_temp[$no] = $s['usia_1'];
                      $arr_c4_temp[$no] = $s['usia_5'];
                      $arr_c5_temp[$no] = $s['usia_10'];
                      $arr_c6_temp[$no] = $s['usia_15'];
                      $arr_c7_temp[$no] = $s['usia_64'];
                      $arr_c8_temp[$no] = $s['ibu_hamil'];
                      $arr_c9_temp[$no] = $s['pf'];
                      $arr_c10_temp[$no] = $s['pv'];
                      $arr_c11_temp[$no] = $s['po'];
                      $arr_c12_temp[$no] = $s['pm'];
                      $arr_c13_temp[$no] = $s['pk'];

                      $warna1="";
                      $warna2="";
                      $warna3="";
                    ?>
                    <?php if($arr_c1[$no]==1){$warna1='#FFFF00';} else{$warna1='#ccc';} ?><td bgcolor="<?php echo $warna1; ?>"><?php echo $arr_c1[$no] ;?></td>
                    <?php if($arr_c2[$no]==1){$warna2='#FFFF00';} else{$warna2='#ccc';} ?><td bgcolor="<?php echo $warna2; ?>"><?php echo $arr_c2[$no] ;?></td>
                    <?php if($arr_c3[$no]==1){$warna3='#FFFF00';} else{$warna3='#ccc';} ?><td bgcolor="<?php echo $warna3; ?>"><?php echo $arr_c3[$no] ;?></td>
                </tr>
                <?php

                $q = "insert into centroid_temp_k3_baru_2020(iterasi,idmalaria_baru2020,c1,c2,c3) values(1,'".$s['idmalaria_baru2020']."','".$arr_c1[$no]."','".$arr_c2[$no]."','".$arr_c3[$no]."')";
                $this->db->query($q);

                } 
                
                //------------centorid baru c1
                $this->db->select('sum(positif) as positif, sum(usia_0) as u_0, sum(usia_1) as u_1, sum(usia_5) as u_5, sum(usia_10) as u_10, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(ibu_hamil) as ibu_hamil, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, sum(pk) as pk, sum(iterasi) as iterasi');
                $this->db->where('c1', 1);
                $this->db->join('data_malaria_baru_2020','data_malaria_baru_2020.idmalaria_baru2020 = centroid_temp_k3_baru_2020.idmalaria_baru2020');
                $centroid_temp = $this->db->get('centroid_temp_k3_baru_2020')->result();
                
                foreach($centroid_temp as $v_ct){
                  $positif = $v_ct->positif;
                  $u_0 = $v_ct->u_0;
                  $u_1 = $v_ct->u_1;
                  $u_5 = $v_ct->u_5;
                  $u_10 = $v_ct->u_10;
                  $u_15 = $v_ct->u_15;
                  $u_64 = $v_ct->u_64;
                  $ibu_hamil = $v_ct->ibu_hamil;
                  $pf = $v_ct->pf;
                  $pv = $v_ct->pv;
                  $po = $v_ct->po;
                  $pm = $v_ct->pm;
                  $pk = $v_ct->pk;
                  $iterasi = $v_ct->iterasi;

                  $c1a_b = $positif / $iterasi;
                  $c1b_b = $u_0 / $iterasi;
                  $c1c_b = $u_1 / $iterasi;
                  $c1d_b = $u_5 / $iterasi;
                  $c1e_b = $u_10 / $iterasi;
                  $c1f_b = $u_15 / $iterasi;
                  $c1g_b = $u_64 / $iterasi;
                  $c1h_b = $ibu_hamil / $iterasi;
                  $c1i_b = $pf / $iterasi;
                  $c1j_b = $pv / $iterasi;
                  $c1k_b = $po / $iterasi;
                  $c1l_b = $pm / $iterasi;
                  $c1m_b = $pk / $iterasi;
                }

                //-----------end proses centroid baru c1
                
                //------------centorid baru c2
                $this->db->select('sum(positif) as positif, sum(usia_0) as u_0, sum(usia_1) as u_1, sum(usia_5) as u_5, sum(usia_10) as u_10, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(ibu_hamil) as ibu_hamil, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, sum(pk) as pk, sum(iterasi) as iterasi');
                $this->db->where('c2', 1);
                $this->db->join('data_malaria_baru_2020','data_malaria_baru_2020.idmalaria_baru2020 = centroid_temp_k3_baru_2020.idmalaria_baru2020');
                $centroid_temp_c2 = $this->db->get('centroid_temp_k3_baru_2020')->result();
                
                foreach($centroid_temp_c2 as $v_ct_c2){
                  $positif = $v_ct_c2->positif;
                  $u_0 = $v_ct_c2->u_0;
                  $u_1 = $v_ct_c2->u_1;
                  $u_5 = $v_ct_c2->u_5;
                  $u_10 = $v_ct_c2->u_10;
                  $u_15 = $v_ct_c2->u_15;
                  $u_64 = $v_ct_c2->u_64;
                  $ibu_hamil = $v_ct_c2->ibu_hamil;
                  $pf = $v_ct_c2->pf;
                  $pv = $v_ct_c2->pv;
                  $po = $v_ct_c2->po;
                  $pm = $v_ct_c2->pm;
                  $pk = $v_ct_c2->pk;
                  $iterasi = $v_ct_c2->iterasi;

                  $c2a_b = $positif / $iterasi;
                  $c2b_b = $u_0 / $iterasi;
                  $c2c_b = $u_1 / $iterasi;
                  $c2d_b = $u_5 / $iterasi;
                  $c2e_b = $u_10 / $iterasi;
                  $c2f_b = $u_15 / $iterasi;
                  $c2g_b = $u_64 / $iterasi;
                  $c2h_b = $ibu_hamil / $iterasi;
                  $c2i_b = $pf / $iterasi;
                  $c2j_b = $pv / $iterasi;
                  $c2k_b = $po / $iterasi;
                  $c2l_b = $pm / $iterasi;
                  $c2m_b = $pk / $iterasi;
                }

                //------------centorid baru c3
                $this->db->select('sum(positif) as positif, sum(usia_0) as u_0, sum(usia_1) as u_1, sum(usia_5) as u_5, sum(usia_10) as u_10, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(ibu_hamil) as ibu_hamil, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, sum(pk) as pk, sum(iterasi) as iterasi');
                $this->db->where('c3', 1);
                $this->db->join('data_malaria_baru_2020','data_malaria_baru_2020.idmalaria_baru2020 = centroid_temp_k3_baru_2020.idmalaria_baru2020');
                $centroid_temp_c3 = $this->db->get('centroid_temp_k3_baru_2020')->result();
                
                foreach($centroid_temp_c3 as $v_ct_c3){
                  $positif = $v_ct_c3->positif;
                  $u_0 = $v_ct_c3->u_0;
                  $u_1 = $v_ct_c3->u_1;
                  $u_5 = $v_ct_c3->u_5;
                  $u_10 = $v_ct_c3->u_10;
                  $u_15 = $v_ct_c3->u_15;
                  $u_64 = $v_ct_c3->u_64;
                  $ibu_hamil = $v_ct_c3->ibu_hamil;
                  $pf = $v_ct_c3->pf;
                  $pv = $v_ct_c3->pv;
                  $po = $v_ct_c3->po;
                  $pm = $v_ct_c3->pm;
                  $pk = $v_ct_c3->pk;
                  $iterasi = $v_ct_c3->iterasi;

                  $c3a_b = $positif / $iterasi;
                  $c3b_b = $u_0 / $iterasi;
                  $c3c_b = $u_1 / $iterasi;
                  $c3d_b = $u_5 / $iterasi;
                  $c3e_b = $u_10 / $iterasi;
                  $c3f_b = $u_15 / $iterasi;
                  $c3g_b = $u_64 / $iterasi;
                  $c3h_b = $ibu_hamil / $iterasi;
                  $c3i_b = $pf / $iterasi;
                  $c3j_b = $pv / $iterasi;
                  $c3k_b = $po / $iterasi;
                  $c3l_b = $pm / $iterasi;
                  $c3m_b = $pk / $iterasi;
                }

                $q = "insert into hasil_centroid_k3_baru_2020(c1a,c1b,c1c,c1d,c1e,c1f,c1g,c1h,c1i,c1j,c1k,c1l,c1m,c2a,c2b,c2c,c2d,c2e,c2f,c2g,c2h,c2i,c2j,c2k,c2l,c2m,c3a,c3b,c3c,c3d,c3e,c3f,c3g,c3h,c3i,c3j,c3k,c3l,c3m) values('".$c1a_b."','".$c1b_b."','".$c1c_b."','".$c1d_b."','".$c1e_b."','".$c1f_b."','".$c1g_b."','".$c1h_b."','".$c1i_b."','".$c1j_b."','".$c1k_b."','".$c1l_b."','".$c1m_b."','".$c2a_b."','".$c2b_b."','".$c2c_b."','".$c2d_b."','".$c2e_b."','".$c2f_b."','".$c2g_b."','".$c2h_b."','".$c2i_b."','".$c2j_b."','".$c2k_b."','".$c2l_b."','".$c2m_b."','".$c3a_b."','".$c3b_b."','".$c3c_b."','".$c3d_b."','".$c3e_b."','".$c3f_b."','".$c3g_b."','".$c3h_b."','".$c3i_b."','".$c3j_b."','".$c3k_b."','".$c3l_b."','".$c3m_b."')";
                $this->db->query($q);
                
                ?>
              </tbody>
            </table>

    </div>
  </main>
</section>