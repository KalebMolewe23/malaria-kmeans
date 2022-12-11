<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-plus-medical'></i> Tambah Data Puskesmas</span>
    </div>

    <main>

        <div class="container">
            <br>
            <center>
                <h4><strong> Tambah Data Puskesmas </strong></h4>
            </center><br>

            <form action=<?= base_url('administrator/data/tambah_puskesmas') ?> method="post">

                <div class="form_group">
                    <label>Puskesmas</label>
                    <input type="text" class="form-control selectric" name="nama_puskesmas" required>
                    <?= form_error('nama_puskesmas', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>Kelurahan</label>
                    <input type="text" class="form-control selectric" name="kecamatan" required>
                    <?= form_error('kecamatan', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>Alamat</label>
                    <input type="text" class="form-control selectric" name="alamat" required>
                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>Latitude</label>
                    <input type="text" class="form-control selectric" name="lat" required>
                    <?= form_error('lat', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>Longitude</label>
                    <input type="text" class="form-control selectric" name="lng" required>
                    <?= form_error('lng', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>Geojson</label>
                    <select type="text" class="form-control selectric" name="geojson" required>
                      <option value=""> - Silahkan Pilih - </option>
                      <option value="warmare.geojson">Warmare</option>
                      <option value="prafi.geojson">Prafi</option>
                      <option value="barat.geojson">Monokwari Barat</option>
                      <option value="barat.geojson">Monokwari Timur</option>
                      <option value="utara.geojson">Monokwari Utara</option>
                      <option value="selatan.geojson">Monokwari Selatan</option>
                      <option value="tanah.geojson">Tanah Rubuh</option>
                      <option value="masni.geojson">Masni</option>
                      <option value="sidey.geojson">Sidey</option>
                    </select>
                    <?= form_error('geojson', '<small class="text-danger">', '</small>'); ?>
                </div>

                </br>

                <div class="form_group">
                    <button type="submit" class="btn btn-success"><i class='bx bxs-save'></i> Simpan</button>
                </div>

            </form>
            <br>

        </div>
    </main>
</section>
