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

<div class="container">

    <br>
    <a href="<?= base_url("user/data_malaria_perempuan"); ?>"><button class="btn btn-success" type="button"><i class="fas fa-backspace"></i> Kembali</button></a>&nbsp;<a class="btn btn-primary" href="<?= base_url("user/print_grafik_perempuan") ?>"><i class="fas fa-print"></i> Print</a><br><br>

    <center>
        <div id="piechart" style="width: 900px; height: 500px;">
    </center>

    <table id="table_data" class="table table-bordered table-admin">
        <tr align="center">
            <td>No Puskesmas</td>
            <td>Nama Puskesmas</td>
            <td>Predikat</td>
        </tr>
        <?php
        foreach ($data_hasil->result() as $h) {
        ?>
            <tr align="center">
                <td><?php echo $h->id_malariap; ?></td>
                <td><?php echo $h->nama_puskesmas; ?></td>
                <td><?php echo $h->predikat; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

</div>
</div>



<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Tahun', 'Total'],
            <?php
            foreach ($malaria as $v) {
                echo "['" . $v['predikat'] . "'," . $v['total_perempuan'] . "],";
            }
            ?>
        ]);
        var options = {
            title: 'Data Malaria Perempuan Kab. Monokwari',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>