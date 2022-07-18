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
            <h3><strong>Data Malaria Perempuan Kabupaten Monokwari</strong></h3>
        </center>
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

<script type="text/javascript">
    window.print();
</script>