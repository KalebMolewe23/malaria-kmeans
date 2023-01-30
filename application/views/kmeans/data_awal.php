<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Malaria Monokwari(Papua Barat)</span>
    </div>

    <main>
        <div class="container-fluid">
        <a class="btn btn-primary" href="<?php echo base_url(); ?>administrator/kmeans/iterasi_lanjut">Proses Iterasi Selanjutnya</a><br><br>
            <h5>Centroid Awal</h5>
            <table class="table table-bordered table_hover table-striped">
                <thead>
                    <tr>
                        <th>Centroid</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><center>1</center></td>     
                        <td>0.00889077053344623</td>         
                        <td>0.0952380952380952</td>         
                        <td>0.0952380952380952</td>         
                        <td>0.80952380952381</td>         
                        <td>0</td>         
                        <td>0.404761904761905</td>         
                        <td>0.333333333333333</td>         
                        <td>0</td>         
                        <td>0</td>                  
                    </tr>
                    <tr>
                        <td><center>2</center></td>     
                        <td>0.00763539709143854</td>         
                        <td>0.248337028824834</td>         
                        <td>0.232815964523282</td>         
                        <td>0.501108647450111</td>         
                        <td>0.0177383592017738</td>         
                        <td>0</td>         
                        <td>0.00221729490022173</td>         
                        <td>0.310421286031042</td>         
                        <td>0.676274944567627</td>                  
                    </tr>
                    <tr>
                        <td><center>3</center></td>     
                        <td>0.0485632183908046</td>         
                        <td>0.183431952662722</td>         
                        <td>0.29585798816568</td>         
                        <td>0.502958579881657</td>         
                        <td>0.0177514792899408</td>         
                        <td>0.266272189349112</td>         
                        <td>0.29585798816568</td>         
                        <td>0</td>         
                        <td>0</td>                  
                    </tr>
                </tbody>
            </table>

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
                <?php 

                    // centroid 1
                    $c1a = 0.00889077053344623;         
                    $c1b = 0.0952380952380952;         
                    $c1c = 0.0952380952380952;         
                    $c1d = 0.80952380952381;         
                    $c1e = 0;         
                    $c1f = 0.404761904761905;         
                    $c1g = 0.333333333333333;         
                    $c1h = 0;         
                    $c1i = 0;       

                    // centroid 2
                    $c2a = 0.00763539709143854;         
                    $c2b = 0.248337028824834;         
                    $c2c = 0.232815964523282;         
                    $c2d = 0.501108647450111;         
                    $c2e = 0.0177383592017738;         
                    $c2f = 0;         
                    $c2g = 0.00221729490022173;         
                    $c2h = 0.310421286031042;         
                    $c2i = 0.676274944567627;

                    // centroid 3
                    $c3a = 0.0485632183908046;         
                    $c3b = 0.183431952662722;         
                    $c3c = 0.29585798816568;         
                    $c3d = 0.502959;         
                    $c3e = 0.0177514792899408;         
                    $c3f = 0.266272189349112;         
                    $c3g = 0.29585798816568;         
                    $c3h = 0;         
                    $c3i = 0;

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

                    $this->db->query('truncate table centroid_temp');
                    $this->db->query('truncate table hasil_centroid');
                ?>
                </thead>
                <tbody>
                <?php foreach ($malaria->result_array() as $s) { ?>
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
                
                $q = "insert into centroid_temp(iterasi,iddata_malaria,c1,c2,c3) values(1,'".$s['iddata_malaria']."','".$arr_c1[$no]."','".$arr_c2[$no]."','".$arr_c3[$no]."')";
                $this->db->query($q);
                
                } 
                
                //------------centorid baru c1
                $this->db->select('sum(positif) as positif, sum(usia_0) as u_0, sum(usia_5) as u_5, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, sum(iterasi) as iterasi');
                $this->db->where('c1', 1);
                $this->db->join('data_malaria','data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                $centroid_temp = $this->db->get('centroid_temp')->result();
                
                foreach($centroid_temp as $v_ct){
                  $positif = $v_ct->positif;
                  $u_0 = $v_ct->u_0;
                  $u_5 = $v_ct->u_5;
                  $u_15 = $v_ct->u_15;
                  $u_64 = $v_ct->u_64;
                  $pf = $v_ct->pf;
                  $pv = $v_ct->pv;
                  $po = $v_ct->po;
                  $pm = $v_ct->pm;
                  $iterasi = $v_ct->iterasi;

                  $c1a_b = $positif / $iterasi;
                  $c1b_b = $u_0 / $iterasi;
                  $c1c_b = $u_5 / $iterasi;
                  $c1d_b = $u_15 / $iterasi;
                  $c1e_b = $u_64 / $iterasi;
                  $c1f_b = $pf / $iterasi;
                  $c1g_b = $pv / $iterasi;
                  $c1h_b = $po / $iterasi;
                  $c1i_b = $pm / $iterasi;
                }

                //-----------end proses centroid baru c1
                
                //------------centorid baru c2
                $this->db->select('sum(positif) as positif, sum(usia_0) as u_0, sum(usia_5) as u_5, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, sum(iterasi) as iterasi');
                $this->db->where('c2', 1);
                $this->db->join('data_malaria','data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                $centroid_temp_c2 = $this->db->get('centroid_temp')->result();
                
                foreach($centroid_temp_c2 as $v_ct_c2){
                  $positif = $v_ct_c2->positif;
                  $u_0 = $v_ct_c2->u_0;
                  $u_5 = $v_ct_c2->u_5;
                  $u_15 = $v_ct_c2->u_15;
                  $u_64 = $v_ct_c2->u_64;
                  $pf = $v_ct_c2->pf;
                  $pv = $v_ct_c2->pv;
                  $po = $v_ct_c2->po;
                  $pm = $v_ct_c2->pm;
                  $iterasi = $v_ct_c2->iterasi;

                  $c2a_b = $positif / $iterasi;
                  $c2b_b = $u_0 / $iterasi;
                  $c2c_b = $u_5 / $iterasi;
                  $c2d_b = $u_15 / $iterasi;
                  $c2e_b = $u_64 / $iterasi;
                  $c2f_b = $pf / $iterasi;
                  $c2g_b = $pv / $iterasi;
                  $c2h_b = $po / $iterasi;
                  $c2i_b = $pm / $iterasi;
                }

                //------------centorid baru c3
                $this->db->select('sum(positif) as positif, sum(usia_0) as u_0, sum(usia_5) as u_5, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, sum(iterasi) as iterasi');
                $this->db->where('c3', 1);
                $this->db->join('data_malaria','data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                $centroid_temp_c3 = $this->db->get('centroid_temp')->result();
                
                foreach($centroid_temp_c3 as $v_ct_c3){
                  $positif = $v_ct_c3->positif;
                  $u_0 = $v_ct_c3->u_0;
                  $u_5 = $v_ct_c3->u_5;
                  $u_15 = $v_ct_c3->u_15;
                  $u_64 = $v_ct_c3->u_64;
                  $pf = $v_ct_c3->pf;
                  $pv = $v_ct_c3->pv;
                  $po = $v_ct_c3->po;
                  $pm = $v_ct_c3->pm;
                  $iterasi = $v_ct_c3->iterasi;

                  $c3a_b = $positif / $iterasi;
                  $c3b_b = $u_0 / $iterasi;
                  $c3c_b = $u_5 / $iterasi;
                  $c3d_b = $u_15 / $iterasi;
                  $c3e_b = $u_64 / $iterasi;
                  $c3f_b = $pf / $iterasi;
                  $c3g_b = $pv / $iterasi;
                  $c3h_b = $po / $iterasi;
                  $c3i_b = $pm / $iterasi;
                }

                $q = "insert into hasil_centroid(c1a,c1b,c1c,c1d,c1e,c1f,c1g,c1h,c1i,c2a,c2b,c2c,c2d,c2e,c2f,c2g,c2h,c2i,c3a,c3b,c3c,c3d,c3e,c3f,c3g,c3h,c3i) values('".$c1a_b."','".$c1b_b."','".$c1c_b."','".$c1d_b."','".$c1e_b."','".$c1f_b."','".$c1g_b."','".$c1h_b."','".$c1i_b."','".$c2a_b."','".$c2b_b."','".$c2c_b."','".$c2d_b."','".$c2e_b."','".$c2f_b."','".$c2g_b."','".$c2h_b."','".$c2i_b."','".$c3a_b."','".$c3b_b."','".$c3c_b."','".$c3d_b."','".$c3e_b."','".$c3f_b."','".$c3g_b."','".$c3h_b."','".$c3i_b."')";
                $this->db->query($q);

                ?>
                </tbody>
            </table>
        </div>
    </main>

</section>