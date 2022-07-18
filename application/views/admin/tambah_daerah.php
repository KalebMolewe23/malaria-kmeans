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
            <h3><strong>Tambah Data Puskesmas</strong></h3>
        </center>
        <br>
        <form action=<?= base_url('admin/tambah_daerah') ?> method="post">

            <div class="form_group">
                <label>Nama Puskesmas</label>
                <input class="form-control selectric" type="text" value="<?= set_value('nama_puskesmas'); ?>" name="nama_puskesmas" required />
                <?= form_error('nama_puskesmas', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form_group">
                <label>Alamat</label>
                <input class="form-control selectric" type="text" value="<?= set_value('alamat'); ?>" name="alamat" required />
                <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form_group">
                <label>Kecamatan</label>
                <select class="form-control selectric" name="kecamatan" id="kecamatan">
                    <option value="">-Pilih Kecamatan-</option>
                    <option value="Warmare">Warmare</option>
                    <option value="Prafi">Prafi</option>
                    <option value="Manokwari Barat">Manokwari Barat</option>
                    <option value="Manokwari Timur">Manokwari Timur</option>
                    <option value="Manokwari Utara">Manokwari Utara</option>
                    <option value="Manokwari Selatan">Manokwari Selatan</option>
                    <option value="Tanah Rubuh">Tanah Rubuh</option>
                    <option value="Masni">Masni</option>
                    <option value="Sidey">Sidey</option>
                </select>
            </div>

            <div class="form_group">
                <label>Latitude</label>
                <input class="form-control selectric" type="text" value="<?= set_value('lat'); ?>" name="lat" required />
                <?= form_error('lat', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form_group">
                <label>Longtitude</label>
                <input class="form-control selectric" type="text" value="<?= set_value('lng'); ?>" name="lng" required />
                <?= form_error('lng', '<small class="text-danger">', '</small>'); ?>
            </div>

            </br>

            <div class="form_group">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
            </div></br>

        </form>
    </div>
</section>