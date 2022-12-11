<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Process SSW</span>
    </div>

    <main>
        <div class="container-fluid">
            <p><strong>Cluster 1 :</strong></p>

            <form action="<?= base_url('dbi/process_cluster_name') ?>" method="post">
                <input type='text' name="cluster_name1"><?= $c1; ?><br><br>    
                <button class="btn btn-primary">Simpan</button>
            </form>
            <br><br>
            <table id="table_data" class="table table-bordered table_hover table-striped">
                <thead>
                    <tr align="center">
                        <td rowspan="2">#</td>
                        <td rowspan="2">Nama Puskesmas</td>
                        <td rowspan="2">Konfirmasi Lab</td>
                        <td rowspan="2">Total Positif</td>
                        <td colspan="1">Y</td>
                        <td colspan="1">X</td>
                    </tr>
                    <tr align="center">
                        <?php foreach ($centroid1 as $c1) { ?>
                            <td><?= $c1->Y ?></td>
                            <td><?= $c1->X ?></td>
                        <?php } ?>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($datakmeans as $value) {
                    ?>
                        <tr>
                            <input type="hidden" value="<?= $value->iddata_malaria ?>">
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?= $value->nama_puskesmas; ?></td>
                            <td align="center"><?= $value->konfirmasi_lab; ?></td>
                            <td align="center"><?= $value->total_positif; ?></td>
                            <td colspan="2" align="center"><?php
                                                            $hc1 = sqrt(pow(($value->konfirmasi_lab - $c1->Y), 2) + pow(($value->total_positif - $c1->X), 2));
                                                            echo $hc1;
                                                            ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table><br>

            <p><strong>Cluster 2</strong></p>
            
            <form action="<?= base_url('dbi/process_cluster_name2') ?>" method="post">
                <input type='text' name="cluster_name2"><?= $c2; ?><br><br>    
                <button class="btn btn-primary">Simpan</button>
            </form>
            <br><br>
            <table id="table_data" class="table table-bordered table_hover table-striped">
                <thead>
                    <tr align="center">
                        <td rowspan="2">#</td>
                        <td rowspan="2">Nama Puskesmas</td>
                        <td rowspan="2">Konfirmasi Lab</td>
                        <td rowspan="2">Total Positif</td>
                        <td colspan="1">Y</td>
                        <td colspan="1">X</td>
                    </tr>
                    <tr align="center">
                        <?php foreach ($centroid2 as $c2) { ?>
                            <td><?= $c2->Y ?></td>
                            <td><?= $c2->X ?></td>
                        <?php } ?>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($datakmeans2 as $value2) {
                    ?>
                        <tr>
                            <input type="hidden" value="<?= $value2->iddata_malaria ?>">
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?= $value2->nama_puskesmas; ?></td>
                            <td align="center"><?= $value2->konfirmasi_lab; ?></td>
                            <td align="center"><?= $value2->total_positif; ?></td>
                            <td colspan="2" align="center"><?php
                                                            $hc2 = sqrt(pow(($value2->konfirmasi_lab - $c2->Y), 2) + pow(($value2->total_positif - $c2->X), 2));
                                                            echo $hc2;
                                                            ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </main>
</section>