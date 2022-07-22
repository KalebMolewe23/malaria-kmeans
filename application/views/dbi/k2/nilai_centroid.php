<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Nilai Centroid K-2</span>
    </div>

    <main>
        <div class="container-fluid">

            <table id="table_data" class="table table-bordered table-admin">
                <thead>
                    <tr align="center">
                        <td>Centroid</td>
                        <td>Y</td>
                        <td>X</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $this->db->query('truncate table data_centroid_k2_1');
                    foreach ($data as $value) {
                    ?>
                        <tr>
                            <td align="center">C-<?= $no; ?></td>
                            <td align="center"><?= $value->c1a; ?></td>
                            <td align="center"><?= $value->c1b; ?></td>
                        </tr>
                    <?php }
                    $save_data = "insert into data_centroid_k2_1(centroid, Y, X) values('" . $no . "','" . $value->c1a . "','" . $value->c1b . "')";
                    $this->db->query($save_data);
                    ?>
                    <?php
                    $nom = 2;
                    $this->db->query('truncate table data_centroid_k2_2');
                    foreach ($data2 as $value2) {
                    ?>
                        <tr>
                            <td align="center">C-<?= $nom; ?></td>
                            <td align="center"><?= $value2->c2a; ?></td>
                            <td align="center"><?= $value2->c2b; ?></td>
                        </tr>
                    <?php }
                    $save_data2 = "insert into data_centroid_k2_2(centroid, Y, X) values('" . $nom . "','" . $value2->c2a . "','" . $value2->c2b . "')";
                    $this->db->query($save_data2);
                    ?>
                </tbody>
            </table>

            <div class="row">
                <div class="col-sm">
                    <select name="links" id="" size="1" onchange="window.location.href=this.value;">
                        <option value="<?= base_url("dbi_proccess"); ?>">- Pilih Proses DBI -</option>
                        <option value="<?= base_url("dbi_proccess"); ?>">- K2 -</option>
                        <option value="<?= base_url("dbi_proccess/k3"); ?>">- K3 -</option>
                    </select>

                    <div id="nilai_k"></div>
                </div>

                <div class="col-sm-2">
                    <a href="<?= base_url("dbi_proccess/ssw_proccess"); ?>"><button type="button" class="btn btn-primary">Proses SSW</button></a>
                </div>
            </div>
    </main>
</section>