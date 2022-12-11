<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Malaria Monokwari(Papua Barat)</span>
    </div>

    <main>
        <div class="container">

            <br>

            <center>
                <h3><strong>Lokasi Puskesmas Kabupaten Monokwari</strong></h3>
            </center>
            <br>
            <center><?= $this->session->flashdata('message') ?></center><br>
            <a href="<?= base_url("admin/tambah_daerah"); ?>"><button class="btn btn-primary" type="button"><i class="fas fa-plus"></i> Tambah Data</button></a>
            <br><br>
            <table class="table table-bordered table_hover table-striped" id="datatable">
                <thead>
                    <tr>
                        <th>
                            <center>No.</center>
                        </th>
                        <th>
                            <center>Nama Puskesmas</center>
                        </th>
                        <th>
                            <center>Alamat</center>
                        </th>
                        <th>
                            <center>Kecamatan</center>
                        </th>
                        <th>
                            <center>Latitude</center>
                        </th>
                        <th>
                            <center>Longtitude</center>
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
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?= $inv->nama_puskesmas ?></td>
                            <td align="center"><?= $inv->alamat ?></td>
                            <td align="center"><?= $inv->kecamatan ?></td>
                            <td align="center"><?= $inv->lat ?></td>
                            <td align="center"><?= $inv->lng ?></td>
                            <td align="center">
                                <?= anchor('admin/editdaerah/' . $inv->id_puskesmas, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Ubah</div>') ?>
                                <?= anchor('admin/deletedaerah/' . $inv->id_puskesmas, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</div>') ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</section>