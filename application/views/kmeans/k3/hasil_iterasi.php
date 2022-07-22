<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Iterasi K-3</span>
    </div>

    <main>
        <div class="container-fluid">
            <div class="container">
                <br>
                <center>
                    <h4><strong>Hasil K-Means K-3</strong></h4>
                </center><br>
            </div>

            <table id="table_data" class="table table-bordered table-admin">
                <tr align="center">
                    <td>No. </td>
                    <td>Kelurahan</td>
                    <td>Iterasi</td>
                    <td>Cluster 1</td>
                    <td>Cluster 2</td>
                    <td>Cluster 3</td>
                </tr>

                <?php
                $no = 1;
                foreach ($q as $value) :
                ?>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td align="center"><?= $value->nama_puskesmas ?></td>
                        <td align="center"><?= $value->iterasi ?></td>
                        <td align="center">
                            <?php if ($value->c1 == 1) { ?>
                                Yes
                            <?php } else if ($value->c1 == 0) { ?>
                                No
                            <?php } ?>
                        </td>
                        <td align="center">
                            <?php if ($value->c2 == 1) { ?>
                                Yes
                            <?php } else if ($value->c2 == 0) { ?>
                                No
                            <?php } ?>
                        </td>
                        <td align="center">
                            <?php if ($value->c3 == 1) { ?>
                                Yes
                            <?php } else if ($value->c3 == 0) { ?>
                                No
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>

        </div>
    </main>
</section>