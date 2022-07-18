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
            <h4><strong>Informasi Data Centroid Malaria Perempuan Kab. Monokwari </strong></h4>
        </center><br>

        <a class="btn btn-primary" href="<?= base_url("admin/tampilan_data_perempuan"); ?>"><i class="fas fa-backspace"></i> Kembali</a>&nbsp;<a class="btn btn-success" href="<?= base_url("admin/iterasi_kmeans_perempuan"); ?>"><i class="fas fa-spinner"></i> Proses K-Means</a></br>
        </br>

        <div class="table-responsive">
            <table id="table_data" class="table table-bordered table-striped table-admin">
                <tr>
                    <td>Centroid 1</td>
                    <td>Tinggi</td>
                    <td><?php echo $c1; ?></td>
                </tr>
                <tr>
                    <td>Centroid 2</td>
                    <td>Sedang</td>
                    <td><?php echo $c2; ?></td>
                </tr>
                <tr>
                    <td>Centroid 3</td>
                    <td>Rendah</td>
                    <td><?php echo $c3; ?></td>
                </tr>
            </table>
        </div>
        <br>

        <div class="table-responsive">
            <table id="table_data" class="table table-bordered table-striped table-admin">
                <tr align="center">
                    <td>Nama Puskesmas</td>
                    <td>Jumlah Penduduk</td>
                    <td>Konfirmasi Lab</td>
                    <td>Total Positif</td>
                    <td>Ibu Hamil</td>
                    <td>Persentase</td>
                    <td colspan="3">Distance</td>
                    <td>Predikat</td>
                </tr>
                <?php foreach ($data_vaksin->result_array() as $s) { ?>
                    <tr>
                        <td><?php echo $s['nama_puskesmas']; ?></td>
                        <td><?php echo $s['jumlah_penduduk']; ?></td>
                        <td><?php echo $s['konfirmasi_lab']; ?></td>
                        <td><?php echo $s['total_positif']; ?></td>
                        <td><?php echo $s['ibu_hamil']; ?></td>
                        <td><?php echo number_format($s['persentase']); ?> %</td>
                        <td><?php echo $s['d1']; ?></td>
                        <td><?php echo $s['d2']; ?></td>
                        <td><?php echo $s['d3']; ?></td>
                        <td><?php echo $s['predikat']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <section>