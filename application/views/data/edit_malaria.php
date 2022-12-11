<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-plus-medical'></i> Tambah Data Puskesmas</span>
    </div>

    <main>

        <div class="container">
          <br>
          <center>
              <h4><strong>Edit Data Malaria</strong></h4>
          </center><br>

          <?php foreach ($data_malaria as $w) : ?>

          <form action=<?= base_url('administrator/data/update_malaria') ?> method="post">

              <input type="hidden" name="iddata_malaria" class="form-control" value="<?= $w->iddata_malaria ?>">

              <div class="form_group">
                <label>Puskesmas</label>
                <select type="text" class="form-control selectric" name="id_puskesmas" value="<?= $w->id_puskesmas ?>" required>
                  <option value=""> - Silahkan Pilih - </option>
                  <?php foreach ($malaria->result() as $v_malaria){
                    echo "<option value='" . $v_malaria->id_puskesmas . "'>" . $v_malaria->nama_puskesmas . "</option>";
                  } ?>
                </select>
                <?= form_error('id_puskesmas', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Tahun</label>
                  <select type="text" class="form-control selectric" name="tahun" value="<?= $w->tahun ?>" required>
                    <option value=""> - Silahkan Pilih - </option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                  </select>
                  <?= form_error('tahun', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Positif Malaria</label>
                  <input type="text" class="form-control selectric" name="positif" value="<?= $w->positif ?>" required>
                  <?= form_error('positif', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia 0 - 1 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_0" value="<?= $w->usia_0 ?>" required>
                  <?= form_error('usia_0', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia 1 - 5 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_1" value="<?= $w->usia_1 ?>" required>
                  <?= form_error('usia_1', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia 5 - 10 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_5" value="<?= $w->usia_5 ?>" required>
                  <?= form_error('usia_5', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia 10 - 15 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_10" value="<?= $w->usia_10 ?>" required>
                  <?= form_error('usia_10', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia 15 - 64 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_15" value="<?= $w->usia_15 ?>" required>
                  <?= form_error('usia_15', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Usia Diatas 64 Tahun</label>
                  <input type="text" class="form-control selectric" name="usia_64" value="<?= $w->usia_64 ?>" required>
                  <?= form_error('usia_64', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Ibu Hamil</label>
                  <input type="text" class="form-control selectric" name="ibu_hamil" value="<?= $w->ibu_hamil ?>" required>
                  <?= form_error('ibu_hamil', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>PF</label>
                  <input type="text" class="form-control selectric" name="pf" value="<?= $w->pf ?>" required>
                  <?= form_error('pf', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>PV</label>
                  <input type="text" class="form-control selectric" name="pv" value="<?= $w->pv ?>" required>
                  <?= form_error('pv', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>PO</label>
                  <input type="text" class="form-control selectric" name="po" value="<?= $w->po ?>" required>
                  <?= form_error('po', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>PM</label>
                  <input type="text" class="form-control selectric" name="pm" value="<?= $w->pm ?>" required>
                  <?= form_error('pm', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>PK</label>
                  <input type="text" class="form-control selectric" name="pk" value="<?= $w->pk ?>" required>
                  <?= form_error('pk', '<small class="text-danger">', '</small>'); ?>
              </div><br>

              <div class="form_group">
                  <button type="submit" class="btn btn-success"><i class='bx bxs-save'></i> Simpan</button>
              </div>

          </form>
          <?php endforeach; ?>
        </div>
    </main>
</section>