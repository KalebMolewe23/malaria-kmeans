<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo"><i class="fab fa-mastodon"></i>Malaria</label>
    <ul>
        <li><a href="<?= base_url("user"); ?>"><strong>Home</strong></a></li>
        <li><a href="<?= base_url("user/info_puskesmas"); ?>"><strong>Informasi Puskesmas</strong></a></li>
        <li><a href="<?= base_url("user/data_malaria"); ?>"><strong>Data Malaria</strong></a></li>
        <li><a href="<?= base_url("user/about"); ?>"><strong>Tentang Website</strong></a></li>
        <li><a href="<?= base_url("auth/logout"); ?>"><strong>Log Out</strong></a></li>
    </ul>
</nav>

<section>
    <div class="container">

        <br>

        <center>
            <h3><strong>Data Malaria Laki-Laki Kabupaten Monokwari</strong></h3>
        </center>
        <br>
        <a href="<?= base_url("user/print_data_malaria_laki"); ?>"><button class="btn btn-primary" type="button"><i class="fas fa-print"></i> Print</button></a>&nbsp;
        <a href="<?= base_url("user/malaria_laki"); ?>"><button class="btn btn-primary" type="button"><i class="fas fa-male"></i> Data Laki-Laki</button></a>&nbsp;
        <a href="<?= base_url("user/malaria_perempuan"); ?>"><button class="btn btn-primary" type="button"><i class="fas fa-female"></i> Data Perempuan</button></a>&nbsp;
        <a class="btn btn-success" href="<?= base_url("user/grafik_laki"); ?>"><i class="fas fa-chart-pie"></i> Grafik Malaria</a>
        <br><br>
        <table class="table table-bordered table_hover table-striped">
            <tr>
                <th>
                    <center>No.</center>
                </th>
                <th>
                    <center>Nama Puskesmas</center>
                </th>
                <th>
                    <center>Jumlah Penduduk</center>
                </th>
                <th>
                    <center>Konfirmasi Lab</center>
                </th>
                <th>
                    <center>Total Positif</center>
                </th>
                <th>
                    <center>Ibu Hamil</center>
                </th>
                <th>
                    <center>Persentase</center>
                </th>
            </tr>

            <?php $no = 1;
            foreach ($malaria as $inv) : ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td align="center"><?= $inv->nama_puskesmas ?></td>
                    <td align="center"><?= $inv->jumlah_penduduk ?></td>
                    <td align="center"><?= $inv->konfirmasi_lab ?></td>
                    <td align="center"><?= $inv->total_positif ?></#td>
                    <td align="center"><?= $inv->ibu_hamil ?></td>
                    <td align="center"><?= number_format($inv->persentase) ?> %</td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>