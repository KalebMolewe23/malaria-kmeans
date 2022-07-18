<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo"><i class="fab fa-mastodon"></i>Malaria</label>
    <ul>
        <li><a href="<?= base_url("admin"); ?>"><strong>Home</strong></a></li>
        <li><a href="<?= base_url("admin/daerah_malaria"); ?>"><strong>Informasi Puskesmas</strong></a></li>
        <li><a href="<?= base_url("admin/add_data"); ?>"><strong>Data Malaria</strong></a></li>
        <li><a href="<?= base_url("admin/tampilan_data"); ?>"><strong>Perhitungan K-Means</strong></a></li>
        <li><a href="<?= base_url("auth/logout"); ?>"><strong>Log Out</strong></a></li>
    </ul>
</nav>
<section>
    <div class="container">

        <br>
        <center>
            <div id="map" style="width: 600px; height: 400px;"></div>
        </center>

        <br>
        <div align="center">
            <p><strong>Pilih Tingkat Malaria</strong></p>
            <a href="<?= base_url("admin/zona_merah") ?>"><button class="btn btn-danger" type="button">Tinggi</button></a>
            <a href="<?= base_url("admin/zona_kuning") ?>"><button class="btn btn-warning" type="button">Sedang</button></a>
            <a href="<?= base_url("admin/zona_hijau") ?>"><button class="btn btn-success" type="button">Rendah</button></a>
        </div>

        <br><br>
        <center>
            <h3><strong>Data Puskesmas Kab. Monokwari Tingkat Tinggi</strong></h3>
        </center>
        <br>
        <table class="table table-bordered table_hover table-striped">
            <tr>
                <th>
                    <center>No.</center>
                </th>
                <th>
                    <center>Nama Puskesmas</center>
                </th>
                <th>
                    <center>Kecamatan</center>
                </th>
                <th>
                    <center>Alamat</center>
                </th>
                <th>
                    <center>Latitude</center>
                </th>
                <th>
                    <center>Longtitude</center>
                </th>
            </tr>

            <?php $no = 1;
            foreach ($malaria as $inv) : ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td align="center"><?= $inv->nama_puskesmas ?></td>
                    <td align="center"><?= $inv->kecamatan ?></td>
                    <td align="center"><?= $inv->alamat ?></td>
                    <td align="center"><?= $inv->lat ?></td>
                    <td align="center"><?= $inv->lng ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br><br>
        <center>
            <h3><strong>Data Puskesmas Kab. Monokwari Tingkat Tinggi Laki-Laki</strong></h3>
        </center>
        <br>
        <table class="table table-bordered table_hover table-striped">
            <tr>
                <th>
                    <center>No.</center>
                </th>
                <th>
                    <center>Nama Puskesmas</center>
                </th>
                <th>
                    <center>Kecamatan</center>
                </th>
                <th>
                    <center>Alamat</center>
                </th>
                <th>
                    <center>Latitude</center>
                </th>
                <th>
                    <center>Longtitude</center>
                </th>
            </tr>

            <?php $no = 1;
            foreach ($malarial as $inv1) : ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td align="center"><?= $inv1->nama_puskesmas ?></td>
                    <td align="center"><?= $inv1->kecamatan ?></td>
                    <td align="center"><?= $inv1->alamat ?></td>
                    <td align="center"><?= $inv1->lat ?></td>
                    <td align="center"><?= $inv1->lng ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br><br>
        <center>
            <h3><strong>Data Puskesmas Kab. Monokwari Tingkat Tinggi Perempuan</strong></h3>
        </center>
        <br>
        <table class="table table-bordered table_hover table-striped">
            <tr>
                <th>
                    <center>No.</center>
                </th>
                <th>
                    <center>Nama Puskesmas</center>
                </th>
                <th>
                    <center>Kecamatan</center>
                </th>
                <th>
                    <center>Alamat</center>
                </th>
                <th>
                    <center>Latitude</center>
                </th>
                <th>
                    <center>Longtitude</center>
                </th>
            </tr>

            <?php $no = 1;
            foreach ($malariap as $inv2) : ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td align="center"><?= $inv2->nama_puskesmas ?></td>
                    <td align="center"><?= $inv2->kecamatan ?></td>
                    <td align="center"><?= $inv2->alamat ?></td>
                    <td align="center"><?= $inv2->lat ?></td>
                    <td align="center"><?= $inv2->lng ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
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

    <?php foreach ($malaria as $data => $value) { ?>
        L.marker([<?= $value->lat ?>, <?= $value->lng ?>]).addTo(map).bindPopup("Nama Puskesmas : <?= $value->nama_puskesmas ?>"), {
            icon: icon
        };
        $.getJSON("<?= base_url('assets/maps/' . $value->geojson) ?>", function(data) {
            geoLayer = L.geoJson(data, {
                style: function(feater) {
                    return {
                        opacity: 0.5,
                        color: '#FF0000',
                        fillcolor: '#FF0000',
                    }
                },
            }).addTo(map);

        });
    <?php } ?>
</script>