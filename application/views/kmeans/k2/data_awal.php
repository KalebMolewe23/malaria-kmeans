<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Malaria Monokwari(Papua Barat)</span>
    </div>

    <main>
        <div class="container-fluid">
            <div class="container">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No. </th>
                            <th scope="col">Nama Puskesmas</th>
                            <th scope="col">Jumlah Penduduk</th>
                            <th scope="col">konfrimasi Lab</th>
                            <th scope="col">Total Positif</th>
                            <th scope="col">Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $this->db->query('truncate table data_kmeans_k2');
                        foreach ($malaria as $value) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td style="display:none"><?= $value->id_malaria; ?></td>
                                <td><?= $value->nama_puskesmas; ?></td>
                                <td><?= $value->jumlah_penduduk; ?></td>
                                <td><?= $value->konfirmasi_lab; ?></td>
                                <td><?= $value->total_positif; ?></td>
                                <td><?= $value->persentase ?></td>
                            </tr>
                        <?php
                            $save_data = "insert into data_kmeans_k2(id_malaria,nama_puskesmas,jumlah_penduduk,konfirmasi_lab,total_positif,persentase) values('" . $value->id_malaria . "','" . $value->nama_puskesmas . "', '" . $value->jumlah_penduduk . "','" . $value->konfirmasi_lab . "','" . $value->total_positif . "','" . $value->persentase . "')";
                            $this->db->query($save_data);
                        }
                        ?>
                    </tbody>

                </table>
                <br>

                <div class="row">
                    <div class="col-sm">
                        <select name="links" id="" size="1" onchange="window.location.href=this.value;">
                            <option value="<?= base_url("kmeans"); ?>">-Pilih Jumlah K-</option>
                            <option value="<?= base_url("kmeans/k2"); ?>">- K2 -</option>
                            <option value="<?= base_url("kmeans/k3"); ?>">- K3 -</option>
                        </select>

                        <div id="nilai_k"></div>
                    </div>

                    <div class="col-sm-2">
                        <a href="<?= base_url("kmeans/centroid_k2"); ?>"><button type="button" class="btn btn-primary">Centroid Awal</button></a>
                    </div>
                </div>

            </div>
        </div>
    </main>
</section>