<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Nilai Rasio K-3</span>
    </div>

    <main>
        <div class="container-fluid">

            <table id="table_data" class="table table-bordered table-admin">
                <thead>
                    <tr align="center">
                        <td>R(1)</td>
                        <td>R(2)</td>
                        <td>R(3)</td>
                        <td>R Max</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $this->db->query('truncate table rasio_k3');
                    foreach ($sw as $value) { ?>
                    <?php
                        $c1 = $value->hasil1;
                        $c2 = $value->hasil2;
                        $c3 = $value->hasil3;
                        $totalc = $c1 + $c2 + $c3;
                    }
                    ?>
                    <?php
                    foreach ($rasio as $values) {
                    ?>
                    <?php
                        $rasio1 = $values->nilair1_1;
                        $rasio12 = $values->nilair1_2;
                        $rasio13 = $values->nilair1_3;
                        $rasio21 = $values->nilair2_1;
                        $rasio22 = $values->nilair2_2;
                        $rasio23 = $values->nilair2_3;
                        $rasio31 = $values->nilair3_1;
                        $rasio32 = $values->nilair3_2;
                        $rasio33 = $values->nilair3_3;

                        $total11 = $rasio1 / $totalc;
                        $total12 = $rasio12 / $totalc;
                        $total13 = $rasio13 / $totalc;

                        $total21 = $rasio21 / $totalc;
                        $total22 = $rasio22 / $totalc;
                        $total23 = $rasio23 / $totalc;

                        $total31 = $rasio31 / $totalc;
                        $total32 = $rasio32 / $totalc;
                        $total33 = $rasio33 / $totalc;
                    }
                    ?>

                    <tr align="center">
                        <td><?= $total11; ?></td>
                        <td><?= $total12; ?></td>
                        <td><?= $total13; ?></td>
                        <td><?= max($total11, $total12, $total13); ?></td>
                    </tr>
                    <tr align="center">
                        <td><?= $total21; ?></td>
                        <td><?= $total22; ?></td>
                        <td><?= $total23; ?></td>
                        <td><?= max($total21, $total22, $total23); ?></td>
                    </tr>
                    <tr align="center">
                        <td><?= $total31; ?></td>
                        <td><?= $total32; ?></td>
                        <td><?= $total33; ?></td>
                        <td><?= max($total31, $total32, $total33); ?></td>
                    </tr>
                    <?php
                    $r1 = max($total11, $total12, $total13);
                    $r2 = max($total21, $total22, $total23);
                    $r3 = max($total31, $total32, $total33);
                    $rtotal = ($r1 + $r2 + $r3) / 3;
                    ?>
                    <?php
                    // $q = "insert rasio_k3(r1,r2,r3) values('" . $r1 . "','" . $r2 . "','" . $r3 . "')";
                    // $this->db->query($q);
                    ?>
                </tbody>
            </table>

            <table id="table_data" class="table table-bordered table-admin">
                <thead>
                    <?php $this->db->query('truncate table hasil_dbi_k3'); ?>
                    <tr align="center">
                        <td>Hasil DBI</td>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <td><?= $rtotal ?></td>
                    </tr>
                    <?php
                    $n = "insert hasil_dbi_k3(dbi) values('" . $rtotal . "')";
                    $this->db->query($n);
                    ?>
                </tbody>
            </table>

            <div align="right">
                <a href="<?= base_url("dbi_proccess"); ?>"><button type="submit" class="btn btn-primary">Kembali</button></a>
            </div>
    </main>
</section>