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
                            <th scope="col">Nama Puskesmas</th>
                            <th scope="col">Jumlah Penduduk</th>
                            <th scope="col">konfirmasi Lab</th>
                            <th scope="col">Total Positif</th>
                            <th scope="col">Ibu Hamil</th>
                            <th scope="col">Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 3;
                        $this->db->query('truncate table centroid_awal_k3_1');
                        foreach ($centroid1 as $value1) {
                        ?>
                            <tr>
                                <th scope="row">K<?= -$no; ?></th>
                                <td><?= $value1->nama_puskesmas; ?></td>
                                <td><?= $value1->jumlah_penduduk; ?></td>
                                <td><?= $value1->konfirmasi_lab; ?></td>
                                <td><?= $value1->total_positif; ?></td>
                                <td><?= $value1->ibu_hamil; ?></td>
                                <td><?= $value1->total1 ?></td>
                            </tr>
                        <?php }
                        $save_data = "insert into centroid_awal_k3_1(nilaik,data1,data2,data3) values('" . $no . "','" . $value1->konfirmasi_lab . "','" . $value1->total_positif . "','" . $value1->ibu_hamil . "')";
                        $this->db->query($save_data);
                        ?>
                        <?php
                        $this->db->query('truncate table centroid_awal_k3_2');
                        foreach ($centroid2 as $value2) {
                        ?>
                            <tr>
                                <th scope="row">K<?= -$no; ?></th>
                                <td><?= $value2->nama_puskesmas; ?></td>
                                <td><?= $value2->jumlah_penduduk; ?></td>
                                <td><?= $value2->konfirmasi_lab; ?></td>
                                <td><?= $value2->total_positif; ?></td>
                                <td><?= $value2->ibu_hamil; ?></td>
                                <td><?= $value2->persentase ?></td>
                            </tr>
                        <?php }
                        $save_data2 = "insert into centroid_awal_k3_2(nilaik,data1,data2,data3) values('" . $no . "','" . $value2->konfirmasi_lab . "','" . $value2->total_positif . "','" . $value2->ibu_hamil . "')";
                        $this->db->query($save_data2);
                        ?>
                        <?php
                        $this->db->query('truncate table centroid_awal_k3_3');
                        foreach ($centroid3 as $value3) {
                        ?>
                            <tr>
                                <th scope="row">K<?= -$no; ?></th>
                                <td><?= $value3->nama_puskesmas; ?></td>
                                <td><?= $value3->jumlah_penduduk; ?></td>
                                <td><?= $value3->konfirmasi_lab; ?></td>
                                <td><?= $value3->total_positif; ?></td>
                                <td><?= $value3->ibu_hamil; ?></td>
                                <td><?= $value3->total3 ?></td>
                            </tr>
                        <?php }
                        $save_data3 = "insert into centroid_awal_k3_3(nilaik,data1,data2,data3) values('" . $no . "','" . $value3->konfirmasi_lab . "','" . $value3->total_positif . "','" . $value3->ibu_hamil . "')";
                        $this->db->query($save_data3);
                        ?>
                    </tbody>
                </table>
                <br>
                <div align="right">
                    <a href="<?= base_url("kmeans/iterasi_k3"); ?>"><button type="button" class="btn btn-primary">Proses K-3</button></a>
                </div>

            </div>
        </div>
    </main>
</section>