<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Informasi Data Malaria</span>
    </div>

    <main>
        <div class="container-fluid">

          <?php

            $this->db->where('c1', 1);
            $this->db->where('iterasi', $it);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c1 = $this->db->get('centroid_temp');
            
            $this->db->where('c2', 1);
            $this->db->where('iterasi', $it);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c2 = $this->db->get('centroid_temp');
            
            $this->db->where('c3', 1);
            $this->db->where('iterasi', $it);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c3 = $this->db->get('centroid_temp');

            // echo "<pre>";
            // var_dump($c1);
            // die();
            
          ?>

          <h5>Cluster 1</h5><br>
          <table class="table table-bordered table_hover table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Puskesmas</th>
                <th>Tahun</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach($c1->result() as $v_c1){ ?>
              <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $v_c1->nama_puskesmas; ?></th>
                  <th><?= $v_c1->tahun ?></th>
              </tr>
              <?php }?>
            </tbody>
          </table>
          
          <h5>Cluster 2</h5><br>
          <table class="table table-bordered table_hover table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Puskesmas</th>
                <th>Tahun</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach($c2->result() as $v_c1){ ?>
              <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $v_c1->nama_puskesmas; ?></th>
                  <th><?= $v_c1->tahun ?></th>
              </tr>
              <?php }?>
            </tbody>
          </table>
          
          <h5>Cluster 3</h5><br>
          <table class="table table-bordered table_hover table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Puskesmas</th>
                <th>Tahun</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach($c3->result() as $v_c1){ ?>
              <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $v_c1->nama_puskesmas; ?></th>
                  <th><?= $v_c1->tahun ?></th>
              </tr>
              <?php }?>
            </tbody>
          </table>

        </div>
    </main>
</section>