<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Malaria Zona Merah 2020</span>
    </div>

    <main>
      <div class="container">
        <div align="center">
          <h3>Pilih Tahun : </h3>
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal_2019">2019</button>&nbsp;&nbsp;
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">2020</button>
          <br><br><br>
          <div id="map" style="width: 600px; height: 400px;"></div><br><br>
          <a href="<?= base_url('administrator/dashboard/zona_merah_2020'); ?>"><button type="submit" class="btn btn-danger">Zona Bahaya</button></a>&nbsp;&nbsp;
          <a href="<?= base_url('administrator/dashboard/zona_kuning_2020'); ?>"><button type="submit" class="btn btn-alert">Zona Waspada</button></a>&nbsp;&nbsp;
          <a href="<?= base_url('administrator/dashboard/zona_hijau_2020'); ?>"><button type="submit" class="btn btn-success">Zona Aman</button></a>
        </div>
      </div>

      <!-- Modal 2019-->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Informasi 2020</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <?php

            $this->db->where('tahun', '2020');
            $this->db->where('c1', 1);
            $this->db->where('iterasi', $data_malaria);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c1 = $this->db->get('centroid_temp');
            
            $this->db->where('tahun', '2020');
            $this->db->where('c2', 1);
            $this->db->where('iterasi', $data_malaria);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c2 = $this->db->get('centroid_temp');
            
            $this->db->where('tahun', '2020');
            $this->db->where('c3', 1);
            $this->db->where('iterasi', $data_malaria);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c3 = $this->db->get('centroid_temp');

            // echo "<pre>";
            // var_dump($c1);
            // die();
            
          ?>

          <h5>Zona Aman</h5><br>
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
          
          <h5>Zona Waspada</h5><br>
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
          
          <h5>Zona Bahaya</h5><br>
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
            <div class="modal-footer">
              <a href="<?= base_url('administrator/dashboard/zona_merah_2020') ?>"><button type="submit" class="btn btn-primary">Lanjut</button></a>
            </div>
          </div>

        </div>
      </div>

      <!-- Modal 2019-->
      <div id="myModal_2019" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Informasi 2019</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <?php

            $this->db->where('tahun', '2019');
            $this->db->where('c1', 1);
            $this->db->where('iterasi', $data_malaria);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c1 = $this->db->get('centroid_temp');
            
            $this->db->where('tahun', '2019');
            $this->db->where('c2', 1);
            $this->db->where('iterasi', $data_malaria);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c2 = $this->db->get('centroid_temp');
            
            $this->db->where('tahun', '2019');
            $this->db->where('c3', 1);
            $this->db->where('iterasi', $data_malaria);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c3 = $this->db->get('centroid_temp');

            // echo "<pre>";
            // var_dump($c1);
            // die();
            
          ?>

          <h5>Zona Aman</h5><br>
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
          
          <h5>Zona Waspada</h5><br>
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
          
          <h5>Zona Bahaya</h5><br>
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
            <div class="modal-footer">
              <a href="<?= base_url('administrator/dashboard/index') ?>"><button type="submit" class="btn btn-primary">Lanjut</button></a>
            </div>
          </div>

        </div>
      </div>
    </main>

</section>
<script>

  var map = L.map('map').setView([-0.861453, 134.062042], 10);

  var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1
  }).addTo(map);

  var icon = L.icon({
        iconUrl: '<?= base_url('assets/icon/rs.png') ?>',
        iconSize: [30, 60],
        iconAnchor: [22, 65],
        popupAnchor: [-3, -55]
    });

  <?php
    $this->db->where('tahun', '2020');
    $this->db->where('c1', 1);
    $this->db->where('iterasi', $data_malaria);
    $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
    $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
    $c1 = $this->db->get('centroid_temp')->result();

    foreach ($c1 as $data => $value_1) {
  ?>

    L.marker([<?= $value_1->lat ?>, <?= $value_1->lng ?>]).addTo(map).bindPopup("Nama Puskesmas : <?= $value_1->nama_puskesmas ?>"), {
        icon: icon
    };
    $.getJSON("<?= base_url('assets/maps/' . $value_1->geojson) ?>", function(data) {
        geoLayer = L.geoJson(data, {
            style: function(feater) {
                return {
                    opacity: 0.5,
                    color: 'red',
                    fillcolor: 'red',
                }
            },
        }).addTo(map);

    });

  <?php } ?>

</script>