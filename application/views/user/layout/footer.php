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
    $puskesmas = $this->db->get('puskesmas')->result();

    foreach ($puskesmas as $data => $value) {
  ?>

    L.marker([<?= $value->lat ?>, <?= $value->lng ?>]).addTo(map).bindPopup("Nama Puskesmas : <?= $value->nama_puskesmas ?>"), {
        icon: icon
    };
    $.getJSON("<?= base_url('assets/maps/' . $value->geojson) ?>", function(data) {
        geoLayer = L.geoJson(data, {
            style: function(feater) {
                return {
                    opacity: 0.05,
                    color: 'grey',
                    fillcolor: 'grey',
                }
            },
        }).addTo(map);

    });

  <?php } ?>

</script>
</body>

</html