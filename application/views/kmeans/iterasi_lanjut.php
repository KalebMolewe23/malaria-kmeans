<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Malaria Monokwari(Papua Barat)</span>
    </div>

    <main>
        <div class="container-fluid">
        <a class="btn btn-primary" href="<?php echo base_url(); ?>administrator/kmeans/iterasi_lanjut">Proses Iterasi Selanjutnya</a><br><br>

        <?php
          $c1a = "";
          $c1b = "";
          $c1c = "";
          $c1d = "";
          $c1e = "";
          $c1f = "";
          $c1g = "";
          $c1h = "";
          $c1i = "";

          $c2a = "";
          $c2b = "";
          $c2c = "";
          $c2d = "";
          $c2e = "";
          $c2f = "";
          $c2g = "";
          $c2h = "";
          $c2i = "";

          $c3a = "";
          $c3b = "";
          $c3c = "";
          $c3d = "";
          $c3e = "";
          $c3f = "";
          $c3g = "";
          $c3h = "";
          $c3i = "";
        
          foreach($centroid->result_array() as $c){
            $c1a = $c['c1a'];
            $c1b = $c['c1b']; 
            $c1c = $c['c1c']; 
            $c1d = $c['c1d']; 
            $c1e = $c['c1e']; 
            $c1f = $c['c1f']; 
            $c1g = $c['c1g']; 
            $c1h = $c['c1h'];
            $c1i = $c['c1i'];

            $c2a = $c['c2a'];
            $c2b = $c['c2b']; 
            $c2c = $c['c2c']; 
            $c2d = $c['c3d']; 
            $c2e = $c['c2e']; 
            $c2f = $c['c2f']; 
            $c2g = $c['c2g']; 
            $c2h = $c['c2h']; 
            $c2i = $c['c2i'];

            $c3a = $c['c3a'];
            $c3b = $c['c3b']; 
            $c3c = $c['c3c']; 
            $c3d = $c['c3d']; 
            $c3e = $c['c3e']; 
            $c3f = $c['c3f']; 
            $c3g = $c['c3g']; 
            $c3h = $c['c3h']; 
            $c3i = $c['c3i']; 
          }

          $c1a_b = "";
          $c1b_b = "";
          $c1c_b = "";
          $c1d_b = "";
          $c1e_b = "";
          $c1f_b = "";
          $c1g_b = "";
          $c1h_b = "";
          $c1i_b = "";

          $c2a_b = "";
          $c2b_b = "";
          $c2c_b = "";
          $c2d_b = "";
          $c2e_b = "";
          $c2f_b = "";
          $c2g_b = "";
          $c2h_b = "";
          $c2i_b = "";

          $c3a_b = "";
          $c3b_b = "";
          $c3c_b = "";
          $c3d_b = "";
          $c3e_b = "";
          $c3f_b = "";
          $c3g_b = "";
          $c3h_b = "";
          $c3i_b = "";
          
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
                <tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <center>1</center>
                </td>
                <td>
                  <?= $c1a ?> 
                </td>
                <td>
                  <?= $c1b ?> 
                </td>
                <td>
                  <?= $c1c ?> 
                </td>
                <td>
                  <?= $c1d ?> 
                </td>
                <td>
                  <?= $c1e ?> 
                </td>
                <td>
                  <?= $c1f ?> 
                </td>
                <td>
                  <?= $c1g ?> 
                </td>
                <td>
                  <?= $c1h ?> 
                </td>
                <td>
                  <?= $c1i ?> 
                </td>
                
              </tr>
              <tr>
                <td>
                  <center>2</center>
                </td>
                <td>
                  <?= $c2a ?> 
                </td>
                <td>
                  <?= $c2b ?> 
                </td>
                <td>
                  <?= $c2c ?> 
                </td>
                <td>
                  <?= $c2d ?> 
                </td>
                <td>
                  <?= $c2e ?> 
                </td>
                <td>
                  <?= $c2f ?> 
                </td>
                <td>
                  <?= $c2g ?> 
                </td>
                <td>
                  <?= $c2h ?> 
                </td>
                <td>
                  <?= $c2i ?> 
                </td>
                
              </tr>
              <tr>
                <td>
                  <center>3</center>
                </td>
                <td>
                  <?= $c3a ?> 
                </td>
                <td>
                  <?= $c3b ?> 
                </td>
                <td>
                  <?= $c3c ?> 
                </td>
                <td>
                  <?= $c3d ?> 
                </td>
                <td>
                  <?= $c3e ?> 
                </td>
                <td>
                  <?= $c3f ?> 
                </td>
                <td>
                  <?= $c3g ?> 
                </td>
                <td>
                  <?= $c3h ?> 
                </td>
                <td>
                  <?= $c3i ?> 
                </td>
        
              </tr>
            </tbody>
          </table><br>

          <table class="table table-striped data">
            <thead>
              <tr align="center">
                <th rowspan="2">#</th>
                <th rowspan="2">Nama Puskesmas</th>
                <th rowspan="2">Tahun</th>
                <th rowspan="2">Positif</th>
                <th rowspan="2">Usia 0-4 Tahun</th>
                <th rowspan="2">Usia 5-14 Tahun</th>
                <th rowspan="2">Usia 15-64 Tahun</th>
                <th rowspan="2">Usia > 64 Tahun</th>
                <th rowspan="2">PF</th>
                <th rowspan="2">PV</th>
                <th rowspan="2">PO</th>
                <th rowspan="2">PM</th>
                <th rowspan="2">Centroid 1</th>
                <th rowspan="2">Centroid 2</th>
                <th rowspan="2">Centroid 3</th>
                <th rowspan="2">C1</th>
                <th rowspan="2">C2</th>
                <th rowspan="2">C3</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach($malaria->result_array() as $s){ ?>
              <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $s['nama_puskesmas']; ?></td>
                  <td><?= $s['tahun']; ?></td>
                  <td><?= $s['positif']; ?></td>
                  <td><?= $s['usia_0']; ?></td>
                  <td><?= $s['usia_5']; ?></td>
                  <td><?= $s['usia_15']; ?></td>
                  <td><?= $s['usia_64']; ?></td>
                  <td><?= $s['pf']; ?></td>
                  <td><?= $s['pv']; ?></td>
                  <td><?= $s['po']; ?></td>
                  <td><?= $s['pm']; ?></td>
                  <td><?php
                    $hc1 = sqrt(pow(($s['positif'] - $c1a), 2) + pow(($s['usia_0'] - $c1b), 2) + pow(($s['usia_5'] - $c1c), 2) + pow(($s['usia_15'] - $c1d), 2) + pow(($s['usia_64'] - $c1e), 2) + pow(($s['pf'] - $c1f), 2) + pow(($s['pv'] - $c1g), 2) + pow(($s['po'] - $c1h), 2) + pow(($s['pm'] - $c1i), 2));
                    echo $hc1;
                  ?></td>
                  <td><?php
                    $hc2 = sqrt(pow(($s['positif'] - $c2a), 2) + pow(($s['usia_0'] - $c2b), 2) + pow(($s['usia_5'] - $c2c), 2) + pow(($s['usia_15'] - $c2d), 2) + pow(($s['usia_64'] - $c2e), 2) + pow(($s['pf'] - $c2f), 2) + pow(($s['pv'] - $c2g), 2) + pow(($s['po'] - $c2h), 2) + pow(($s['pm'] - $c2i), 2));
                    echo $hc2;
                  ?></td>
                  <td><?php
                    $hc3 = sqrt(pow(($s['positif'] - $c3a), 2) + pow(($s['usia_0'] - $c3b), 2) + pow(($s['usia_5'] - $c3c), 2) + pow(($s['usia_15'] - $c3d), 2) + pow(($s['usia_64'] - $c3e), 2) + pow(($s['pf'] - $c3f), 2) + pow(($s['pv'] - $c3g), 2) + pow(($s['po'] - $c3h), 2) + pow(($s['pm'] - $c3i), 2));
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
                  $arr_c3_temp[$no] = $s['usia_5'];
                  $arr_c4_temp[$no] = $s['usia_15'];
                  $arr_c5_temp[$no] = $s['usia_64'];
                  $arr_c6_temp[$no] = $s['pf'];
                  $arr_c7_temp[$no] = $s['pv'];
                  $arr_c8_temp[$no] = $s['po'];
                  $arr_c9_temp[$no] = $s['pm'];
                  
                  $warna1="";
                  $warna2="";
                  $warna3=""; 
                  ?>
                  <?php if($arr_c1[$no]==1){$warna1='#FFFF00';} else{$warna1='#ccc';} ?><td bgcolor="<?php echo $warna1; ?>"><?php echo $arr_c1[$no] ;?></td>
                  <?php if($arr_c2[$no]==1){$warna2='#FFFF00';} else{$warna2='#ccc';} ?><td bgcolor="<?php echo $warna2; ?>"><?php echo $arr_c2[$no] ;?></td>
                  <?php if($arr_c3[$no]==1){$warna3='#FFFF00';} else{$warna3='#ccc';} ?><td bgcolor="<?php echo $warna3; ?>"><?php echo $arr_c3[$no] ;?></td>
                </tr>
                <?php
                $q = "insert into centroid_temp(iterasi,iddata_malaria,c1,c2,c3) values('".$id."','".$s['iddata_malaria']."','".$arr_c1[$no]."','".$arr_c2[$no]."','".$arr_c3[$no]."')";
                $this->db->query($q);

                $no++; } 

                $this->db->select('max(iterasi) as d_iterasi');
                $iterasi_data = $this->db->get('centroid_temp')->row('d_iterasi');

                // $iterasi_data = $iterasi_data_smtr - 1;

                //------------centorid baru c1
                // $this->db->select('sum(positif) as positif, sum(usia_0) as u_0, sum(usia_5) as u_5, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, sum(iterasi) as iterasi');
                // $this->db->where('c1', 1);
                // $this->db->where('iterasi', $iterasi_data);
                // $this->db->join('data_malaria','data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                // $centroid_temp = $this->db->get('centroid_temp')->result();

                $this->db->select('sum(c1) as c1, sum(positif) as positif, sum(usia_0) as u_0, sum(usia_5) as u_5, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, iterasi');
                $this->db->where('c1', 1);
                $this->db->where('iterasi', $iterasi_data);
                $this->db->join('data_malaria','data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                $centroid_temp = $this->db->get('centroid_temp')->result();
                
                foreach($centroid_temp as $v_ct){
                  $c1 = $v_ct->c1;
                  $positif_c1 = $v_ct->positif;
                  $u_0_c1 = $v_ct->u_0;
                  $u_5_c1 = $v_ct->u_5;
                  $u_15_c1 = $v_ct->u_15;
                  $u_64_c1 = $v_ct->u_64;
                  $pf_c1 = $v_ct->pf;
                  $pv_c1 = $v_ct->pv;
                  $po_c1 = $v_ct->po;
                  $pm_c1 = $v_ct->pm;
                  $iterasi_c1 = $v_ct->iterasi;

                  $c1a_b = $positif_c1 / $c1;
                  $c1b_b = $u_0_c1 / $c1;
                  $c1c_b = $u_5_c1 / $c1;
                  $c1d_b = $u_15_c1 / $c1;
                  $c1e_b = $u_64_c1 / $c1;
                  $c1f_b = $pf_c1 / $c1;
                  $c1g_b = $pv_c1 / $c1;
                  $c1h_b = $po_c1 / $c1;
                  $c1i_b = $pm_c1 / $c1;                  
                }

                //-----------end proses centroid baru c1
                
                //------------centorid baru c2
                $this->db->select('sum(c2) as c2, sum(positif) as positif, sum(usia_0) as u_0, sum(usia_5) as u_5, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, iterasi');
                $this->db->where('c2', 1);
                $this->db->where('iterasi', $iterasi_data);
                $this->db->join('data_malaria','data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                $centroid_temp_c2 = $this->db->get('centroid_temp')->result();

                // echo "<pre>";
                // var_dump($centroid_temp_c2);
                // die();
                
                foreach($centroid_temp_c2 as $v_ct_c2){
                  $c2 = $v_ct_c2->c2;
                  $positif_c2 = $v_ct_c2->positif;
                  $u_0_c2 = $v_ct_c2->u_0;
                  $u_5_c2 = $v_ct_c2->u_5;
                  $u_15_c2 = $v_ct_c2->u_15;
                  $u_64_c2 = $v_ct_c2->u_64;
                  $pf_c2 = $v_ct_c2->pf;
                  $pv_c2 = $v_ct_c2->pv;
                  $po_c2 = $v_ct_c2->po;
                  $pm_c2 = $v_ct_c2->pm;
                  $iterasi_c2 = $v_ct->iterasi;

                  $c2a_b = $positif_c2 / $c2;
                  $c2b_b = $u_0_c2 / $c2;
                  $c2c_b = $u_5_c2 / $c2;
                  $c2d_b = $u_15_c2 / $c2;
                  $c2e_b = $u_64_c2 / $c2;
                  $c2f_b = $pf_c2 / $c2;
                  $c2g_b = $pv_c2 / $c2;
                  $c2h_b = $po_c2 / $c2;
                  $c2i_b = $pm_c2 / $c2;
                }

                //------------centorid baru c3
                $this->db->select('sum(c3) as c3, sum(positif) as positif, sum(usia_0) as u_0, sum(usia_5) as u_5, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, iterasi');
                $this->db->where('c3', 1);
                $this->db->where('iterasi', $iterasi_data);
                $this->db->join('data_malaria','data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                $centroid_temp_c3 = $this->db->get('centroid_temp')->result();
                
                foreach($centroid_temp_c3 as $v_ct_c3){
                  $c3 = $v_ct_c3->c3;
                  $positif = $v_ct_c3->positif;
                  $u_0 = $v_ct_c3->u_0;
                  $u_5 = $v_ct_c3->u_5;
                  $u_15 = $v_ct_c3->u_15;
                  $u_64 = $v_ct_c3->u_64;
                  $pf = $v_ct_c3->pf;
                  $pv = $v_ct_c3->pv;
                  $po = $v_ct_c3->po;
                  $pm = $v_ct_c3->pm;
                  $iterasi = $v_ct->iterasi;

                  $c3a_b = $positif / $c3;
                  $c3b_b = $u_0 / $c3;
                  $c3c_b = $u_5 / $c3;
                  $c3d_b = $u_15 / $c3;
                  $c3e_b = $u_64 / $c3;
                  $c3f_b = $pf / $c3;
                  $c3g_b = $pv / $c3;
                  $c3h_b = $po / $c3;
                  $c3i_b = $pm / $c3;
                }

                $q = "insert into hasil_centroid(c1a,c1b,c1c,c1d,c1e,c1f,c1g,c1h,c1i,c2a,c2b,c2c,c2d,c2e,c2f,c2g,c2h,c2i,c3a,c3b,c3c,c3d,c3e,c3f,c3g,c3h,c3i) values('".$c1a_b."','".$c1b_b."','".$c1c_b."','".$c1d_b."','".$c1e_b."','".$c1f_b."','".$c1g_b."','".$c1h_b."','".$c1i_b."','".$c2a_b."','".$c2b_b."','".$c2c_b."','".$c2d_b."','".$c2e_b."','".$c2f_b."','".$c2g_b."','".$c2h_b."','".$c2i_b."','".$c3a_b."','".$c3b_b."','".$c3c_b."','".$c3d_b."','".$c3e_b."','".$c3f_b."','".$c3g_b."','".$c3h_b."','".$c3i_b."')";
                $this->db->query($q);

                ?>

              </table>
    </main>
</section>