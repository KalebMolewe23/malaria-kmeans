<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Puskesmas</span>
    </div>

    <main>
        <div class="container">

            <br>

            <a href="<?= base_url("administrator/data/tambah_datapuskesmas"); ?>"><button class="btn btn-success" type="button"><i class="fas fa-plus"></i> Tambah Data</button></a>
            <br><br>
            <form action="<?= base_url('administrator/data/deleteall') ?>" method="POST">
                <table class="table table-bordered table_hover table-striped">
                    <thead>
                        <tr>
                            <th>
                                <button type="submit" name="deleteEmpBtn" class="btn btn-danger btn-sm">Delete</button>&nbsp;<input type="checkbox" id="option-all" onchange="checkAll(this)">
                            </th>
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
                                <center>Longitude</center>
                            </th>
                            <th>
                                <center>Geojson</center>
                            </th>
                            <th>
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($puskesmas->result() as $inv) : ?>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" name="checkbox_value[]" value="<?= $inv->id_puskesmas ?>">
                                </td>
                                <td align="center"><?= $no++ ?></td>
                                <td align="center"><?= $inv->nama_puskesmas ?></td>
                                <td align="center"><?= $inv->kecamatan ?></td>
                                <td align="center"><?= $inv->alamat ?></td>
                                <td align="center"><?= $inv->lat ?></td>
                                <td align="center"><?= $inv->lng ?></td>
                                <td align="center"><?= $inv->geojson ?></td>
                                <td align="center">
                                <?= anchor('administrator/data/edit_puskesmas/' . $inv->id_puskesmas, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
        </div>
    </main>
</section>

<script type="text/javascript">
 function checkAll(ele) {
      var checkboxes = document.getElementsByTagName('input');
      if (ele.checked) {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox' ) {
                  checkboxes[i].checked = true;
              }
          }
      } else {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox') {
                  checkboxes[i].checked = false;
              }
          }
      }
  }
</script>