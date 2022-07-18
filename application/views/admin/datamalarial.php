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
            <h3><strong>Data Malaria Kabupaten Monokwari</strong></h3>
        </center>
        <center><a href="<?= base_url("admin/data_malarialaki"); ?>"><button class="btn btn-success" type="button"><i class="fas fa-plus"></i> Tambah Data</button></a></center>
        <br>
        <center><?= $this->session->flashdata('message') ?></center><br>
        <a href="<?= base_url("admin/add_data_laki"); ?>"><button class="btn btn-primary" type="button"><i class="fas fa-male"></i> Data Laki-Laki</button></a>
        <a href="<?= base_url("admin/add_data_perempuan"); ?>"><button class="btn btn-primary" type="button"><i class="fas fa-female"></i> Data Perempuan</button></a>
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
                <th>
                    <center>Action</center>
                </th>
            </tr>

            <?php $no = 1;
            foreach ($malaria as $inv) : ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td align="center"><?= $inv->nama_puskesmas ?></td>
                    <td align="center"><?= $inv->jumlah_penduduk ?></td>
                    <td align="center"><?= $inv->konfirmasi_lab ?></td>
                    <td align="center"><?= $inv->total_positif ?></td>
                    <td align="center"><?= $inv->ibu_hamil ?></td>
                    <td align="center"><?= number_format($inv->persentase) ?> %</td>
                    <td align="center">
                        <?= anchor('admin/editmalarialaki/' . $inv->id_malarial, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Ubah</div>') ?>
                        <?= anchor('admin/deletedatamalarialaki/' . $inv->id_malarial, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</div>') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>