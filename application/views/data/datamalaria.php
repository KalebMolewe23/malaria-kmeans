<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Malaria Monokwari(Papua Barat)</span>
    </div>

    <main>
        <div class="container">

            <br>

            <a href="<?= base_url("administrator/data/tambah_datamalaria"); ?>"><button class="btn btn-success" type="button"><i class="fas fa-plus"></i> Tambah Data</button></a>
            <br><br>
            <form action="<?= base_url('administrator/data/deleteall_kmeans') ?>" method="POST">
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
                                <center>Tahun</center>
                            </th>
                            <th>
                                <center>Positif / Penduduk</center>
                            </th>
                            <th>
                                <center>Usia 0-4 Bulan</center>
                            </th>
                            <th>
                                <center>Usia 5-14 Tahun</center>
                            </th>
                            <th>
                                <center>Usia 15-64 Tahun</center>
                            </th>
                            <th>
                                <center> > 64 Tahun</center>
                            </th>
                            <th>
                                <center> PF</center>
                            </th>
                            <th>
                                <center> PV</center>
                            </th>
                            <th>
                                <center> PO</center>
                            </th>
                            <th>
                                <center> PM</center>
                            </th>
                            <th>
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($malaria->result() as $inv) : ?>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" name="checkbox_value[]" value="<?= $inv->iddata_malaria ?>">
                                </td>
                                <td align="center"><?= $no++ ?></td>
                                <td align="center"><?= $inv->nama_puskesmas ?></td>
                                <td align="center"><?= $inv->tahun ?></td>
                                <td align="center"><?= $inv->positif ?></td>
                                <td align="center"><?= $inv->usia_0 ?></td>
                                <td align="center"><?= $inv->usia_5 ?></td>
                                <td align="center"><?= $inv->usia_15 ?></td>
                                <td align="center"><?= $inv->usia_64 ?></td>
                                <td align="center"><?= $inv->pf ?></td>
                                <td align="center"><?= $inv->pv ?></td>
                                <td align="center"><?= $inv->po ?></td>
                                <td align="center"><?= $inv->pm ?></td>  
                                <td align="center">
                                <?= anchor('administrator/data/edit_malaria/' . $inv->iddata_malaria, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
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