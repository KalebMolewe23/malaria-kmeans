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
            <h4><strong> Tambah Daerah Vaksinasi </strong></h4>
        </center><br>

        <?php foreach ($daerah as $w) : ?>
            <form action=<?= base_url('admin/update') ?> method="post">

                <input type="hidden" name="id_malaria" class="form-control" value="<?= $w->id_malaria ?>">

                <div class="form_group">
                    <label>Puskesmas</label>
                    <select class="form-control selectric" name="id_puskesmas" id="id_puskesmas" required>
                        <option value=""></option>
                        <?php

                        echo "<option value='" . $w->id_puskesmas . "'>" . $w->nama_puskesmas . "</option>";

                        ?>
                    </select>
                </div>

                <div class="form_group">
                    <label>Jumlah Penduduk</label>
                    <input class="form-control selectric" type="text" name="jumlah_penduduk" id="jumlah_penduduk" value="<?= $w->jumlah_penduduk ?>" required />
                </div>

                <div class="form_group">
                    <label>Konfirmasi Lab</label>
                    <input class="form-control selectric" type="text" name="konfirmasi_lab" id="konfirmasi_lab" value="<?= $w->konfirmasi_lab ?>" required />
                </div>

                <div class=" form_group">
                    <label>Total Positif</label>
                    <input class="form-control selectric" type="text" name="total_positif" id="total_positif" value="<?= $w->total_positif ?>" required />
                </div>

                <div class=" form_group">
                    <label>Ibu Hamil</label>
                    <input class="form-control selectric" type="text" name="ibu_hamil" id="ibu_hamil" value="<?= $w->ibu_hamil ?>" required />
                </div>

                </br>

                <input class=" form-control selectric" type="hidden" name="persentase" id="persentase" />

                <div class="form_group">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                </div><br>

            </form>
        <?php endforeach; ?>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        $("#jumlah_penduduk, #konfirmasi_lab, #ibu_hamil, #total_positif, #persentase").keyup(function() {
            var jumlah_penduduk = $("#jumlah_penduduk").val();
            var konfirmasi_lab = $("#konfirmasi_lab").val();
            var ibu_hamil = $("#ibu_hamil").val();
            var total_positif = $("#total_positif").val();

            var malaria = parseInt(konfirmasi_lab) + parseInt(total_positif);
            var malaria1 = parseInt(malaria) + parseInt(ibu_hamil);
            var persentase = ((malaria1) / (jumlah_penduduk)) * 100;
            $("#persentase").val(persentase);
        });
    });
</script>