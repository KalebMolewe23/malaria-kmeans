<section class="home container" id="home">
  <div class="home-text">
    <h1>Informasi Data Malaria <br>Daerah Manokwari.</h1>
    <a href="#" class="btn">Info Selengkapnya</a>
  </div>
</section>

<section>
  <div class="container">
    <div align="center">
      <h3>Pilih Tahun : </h3>
      <button type="submit" class="btn btn-primary" id="myBtn">2019</button>&nbsp;&nbsp;
      <button type="submit" class="btn btn-primary" id="Btn2020">2020</button>
    </div>
  </div>
</section>

<section class="pemetaan container" id="pemetaan">
  <div id="map" style="width: 1200px; height: 600px; z-index: 99;" class="home-text"></div>
</section>

<section>
  <div class="container">
    <div align="center">
      <a href="<?= base_url('user/zona_merah_2020'); ?>"><button type="submit" class="btn btn-danger">Zona Tinggi</button></a>&nbsp;&nbsp;
      <a href="<?= base_url('user/zona_kuning_2020'); ?>"><button type="submit" class="btn btn-alert">Zona Sedang</button></a>&nbsp;&nbsp;
      <a href="<?= base_url('user/zona_hijau_2020'); ?>"><button type="submit" class="btn btn-success">Zona Rendah</button></a>
    </div>
  </div>
</section>

<?php
    $data_cms_about = $this->db->get('about');
    $idabout = $data_cms_about->row('idabout');
    $phone = $data_cms_about->row('phone');
    $email = $data_cms_about->row('email');
    $address = $data_cms_about->row('address');
    $media1 = $data_cms_about->row('media1');
    $media2 = $data_cms_about->row('media2');
    $media3 = $data_cms_about->row('media3');
    $about = $data_cms_about->row('about');
?>

<section class="data container" id="data">
  <!-- box 1 -->
  <div class="box">
    <i class='bx bx-user'></i>
    <h3>Masukan Untuk Kami</h3>
    <p><?= $media1; ?></p>
  </div>
  <!-- box 2 -->
  <div class="box">
    <i class='bx bx-desktop'></i>
    <h3>Hubungi Kami</h3>
    <p><?= $media2; ?></p>
  </div>
  <!-- box 3 -->
  <div class="box">
    <i class='bx bx-home-alt'></i>
    <h3>Info Lengkap Manokwari</h3>
    <p><?= $media1; ?></p>
  </div>
</section>

<section class="about container" id="about">
  <div class="about-img">
    <img src="<?= base_url('assets/user/malaria.jpg') ?>" alt="">
  </div>
  <div class="about-text">
    <span>About Us</span>
    <h2>Informasi Malaria Pada Manokwari<br> Papua Barat</h2>
    <p><?= $about; ?></p>
    <a href="#about" class="btn">Selengkapnya</a>
  </div>
</section>

<!-- Modal 2019-->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data Informasi 2019</h4>
        </div>
        <div class="modal-body" align="center">
          
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

      
          <br><h5>Zona Tinggi</h5>
          <table>
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
          
          <br><h5>Zona Sedang</h5>
          <table>
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
          
          <br><h5>Zona Tinggi</h5>
          <table>
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
        <div class="modal-footer" align="right">
          <a href="<?= base_url('user/zona_merah_2019') ?>"><button type="submit" class="btn btn-primary">Lanjut</button></a>
        </div>
      </div>

    </div>
  </div>

      <!-- Modal 2020-->
      <div id="myModal_2020" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close2020" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data Informasi 2020</h4>
        </div>
        <div class="modal-body" align="center">
          
          <?php

            $this->db->where('tahun', '2020');
            $this->db->where('c1', 1);
            $this->db->where('iterasi', $data_malaria);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c1_2 = $this->db->get('centroid_temp');
            
            $this->db->where('tahun', '2020');
            $this->db->where('c2', 1);
            $this->db->where('iterasi', $data_malaria);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c2_2 = $this->db->get('centroid_temp');
            
            $this->db->where('tahun', '2020');
            $this->db->where('c3', 1);
            $this->db->where('iterasi', $data_malaria);
            $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
            $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
            $c3_2 = $this->db->get('centroid_temp');

            // echo "<pre>";
            // var_dump($c1);
            // die();
            
          ?>

      
          <br><h5>Zona Rendah</h5>
          <table>
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
              foreach($c1_2->result() as $v_c1_2){ ?>
              <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $v_c1_2->nama_puskesmas; ?></th>
                  <th><?= $v_c1_2->tahun ?></th>
              </tr>
              <?php }?>
            </tbody>
          </table>
          
          <br><h5>Zona Sedang</h5>
          <table>
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
              foreach($c2_2->result() as $v_c1_2){ ?>
              <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $v_c1_2->nama_puskesmas; ?></th>
                  <th><?= $v_c1_2->tahun ?></th>
              </tr>
              <?php }?>
            </tbody>
          </table>
          
          <br><h5>Zona Rendah</h5>
          <table>
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
              foreach($c3_2->result() as $v_c1_2){ ?>
              <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $v_c1_2->nama_puskesmas; ?></th>
                  <th><?= $v_c1_2->tahun ?></th>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer" align="right">
          <a href="<?= base_url('user/zona_merah_2020') ?>"><button type="submit" class="btn btn-primary">Lanjut</button></a>
        </div>
      </div>

        </div>
      </div>

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

    foreach ($c1 as $value_1) {
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