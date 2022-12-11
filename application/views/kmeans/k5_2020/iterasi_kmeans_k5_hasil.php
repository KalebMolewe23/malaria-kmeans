<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Iterasi K-5</span>
    </div>

    <main>
        <div class="container-fluid">
          <h1>Data Hasil K-means 2020</h1><br>

          <a class="btn btn-primary" href="<?php echo base_url(); ?>kmeans/kmeans_2020">Mulai Awal</a>
          <a class="btn btn-success" href="<?php echo base_url(); ?>kmeans/iterasi_kmeans_k3_hasil_2020">Hasil K-3</a>
          <a class="btn btn-success" href="<?php echo base_url(); ?>kmeans/iterasi_kmeans_k4_hasil_2020">Hasil K-4</a>
          <a class="btn btn-success" href="<?php echo base_url(); ?>kmeans/iterasi_kmeans_k5_hasil_2020">Hasil K-5</a>
          
          <br><br>
          <div class="table-responsive">
            <table  id="table_data" class="table table-bordered table-admin">
              <tr align="center">
                <td>Nama Puskesmas</td>
                <td>C1</td>
                <td>C2</td>
                <td>C3</td>
                <td>C4</td>
                <td>C5</td>
              </tr>
              <?php
                foreach($q->result() as $tq)
                {
                $warna1="";
                $warna2="";
                $warna3="";
                $warna4="";
                $warna5="";
                if($tq->c1==1){$warna1='#FFFF00';} else{$warna1='#EAEAEA';}
                if($tq->c2==1){$warna2='#FFFF00';} else{$warna2='#EAEAEA';}
                if($tq->c3==1){$warna3='#FFFF00';} else{$warna3='#EAEAEA';}
                if($tq->c4==1){$warna4='#FFFF00';} else{$warna4='#EAEAEA';}
                if($tq->c5==1){$warna5='#FFFF00';} else{$warna5='#EAEAEA';}
              ?>
              <tr align="center">
                <td><?= $tq->nama_puskesmas ?></td>
                <td bgcolor="<?php echo $warna1; ?>"><?php echo $tq->c1; ?></td>
                <td bgcolor="<?php echo $warna2; ?>"><?php echo $tq->c2; ?></td>
                <td bgcolor="<?php echo $warna3; ?>"><?php echo $tq->c3; ?></td>
                <td bgcolor="<?php echo $warna4; ?>"><?php echo $tq->c4; ?></td>
                <td bgcolor="<?php echo $warna5; ?>"><?php echo $tq->c5; ?></td>
              </tr>
              <?php
                }
              ?>
            </table>
          </div>

        </div>
    </main>

</section>