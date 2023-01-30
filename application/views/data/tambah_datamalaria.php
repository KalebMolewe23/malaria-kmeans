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

            <form action=<?= base_url('administrator/data/tambah_malaria') ?> method="post">
              
            <div class="form_group">
                <label>Puskesmas</label>
                <select type="text" class="form-control selectric" name="id_puskesmas" required>
                  <option value=""> - Silahkan Pilih - </option>
                  <?php foreach ($malaria->result() as $v_malaria){
                    echo "<option value='" . $v_malaria->id_puskesmas . "'>" . $v_malaria->nama_puskesmas . "</option>";
                  } ?>
                </select>
                <?= form_error('id_puskesmas', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Tahun</label>
                  <select type="text" class="form-control selectric" name="tahun" required>
                    <option value=""> - Silahkan Pilih - </option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                  </select>
                  <?= form_error('tahun', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Positif Malaria</label>
                  <input type="text" class="form-control selectric" name="positif" required>
                  <?= form_error('positif', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia 0 - 4 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_0" required>
                  <?= form_error('usia_0', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia 5 - 14 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_5" required>
                  <?= form_error('usia_5', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia 15 - 64 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_15" required>
                  <?= form_error('usia_15', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia > 64 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_64" required>
                  <?= form_error('usia_64', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>PF</label>
                  <input type="text" class="form-control selectric" name="pf" required>
                  <?= form_error('pf', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>PV</label>
                  <input type="text" class="form-control selectric" name="pv" required>
                  <?= form_error('pv', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>PO</label>
                  <input type="text" class="form-control selectric" name="po" required>
                  <?= form_error('po', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>PM</label>
                  <input type="text" class="form-control selectric" name="pm" required>
                  <?= form_error('pm', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <button type="submit" class="btn btn-success"><i class='bx bxs-save'></i> Simpan</button>
              </div>

            </form>
        </div>
    </main>
</section>