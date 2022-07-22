<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Centroid</span>
    </div>

    <main>
        <div class="container-fluid">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nilai K</th>
                            <th scope="col">Puskesmas</th>
                            <th scope="col">Konfirmasi Lab</th>
                            <th scope="col">Total Positif</th>
                            <th scope="col">Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 2;
                        $this->db->query('truncate table centroid_awal_k2_1');
                        foreach ($centroid1 as $value1) {
                        ?>
                            <tr>
                                <th scope="row">K<?= -$no; ?></th>
                                <td><?= $value1->nama_puskesmas; ?></td>
                                <td><?= $value1->konfirmasi_lab; ?></td>
                                <td><?= $value1->total_positif; ?></td>
                                <td><?= $value1->total1 ?></td>
                            </tr>
                        <?php }
                            $save_data = "insert into centroid_awal_k2_1(nilaik,data1,data2) values('" . $no . "','" . $value1->konfirmasi_lab . "','" . $value1->total_positif . "')";
                            $this->db->query($save_data);
                        ?>
                        <?php
                        $this->db->query('truncate table centroid_awal_k2_2');
                        foreach ($centroid2 as $value2) {
                        ?>
                            <tr>
                                <th scope="row">K<?= -$no; ?></th>
                                <td><?= $value2->nama_puskesmas; ?></td>
                                <td><?= $value2->konfirmasi_lab; ?></td>
                                <td><?= $value2->total_positif; ?></td>
                                <td><?= $value2->total2 ?></td>
                            </tr>
                        <?php }
                            $save_data2 = "insert into centroid_awal_k2_2(nilaik,data1,data2) values('" . $no . "','" . $value2->konfirmasi_lab . "','" . $value2->total_positif . "')";
                            $this->db->query($save_data2);
                        ?>
                    </tbody>
                </table>
                <br>
                <div align="right">
                    <a href="<?= base_url("kmeans/iterasi_k2"); ?>"><button type="button" class="btn btn-primary">Proses K-2</button></a>
                </div>

            </div>
        </div>
    </main>
</section>