<section class="home container" id="home">
  <div class="home-text">
    <h1>Informasi Data Malaria <br>Daerah Manokwari.</h1>
    <a href="#" class="btn">Info Selengkapnya</a>
  </div>
</section>

<section>
  <div class="container">
    <div align="center">
      <h3>Pilih Tahun : </h3>
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal_2019">2019</button>&nbsp;&nbsp;
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">2020</button>
    </div>
  </div>
</section>

<section class="pemetaan container" id="pemetaan">
  <div id="map" style="width: 1200px; height: 600px;"></div>
</section>

<section class="about container" id="about">
  <div class="about-img">

  </div>
  <div class="about-text">

  </div>
</section>

<div id="myModal_2019" class="modal">
<div class="modal-content">
  <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Paket Eresta Studying</h2>
    </div>
    <div class="modal-body">
        <form action="<?= base_url('dashboard/add_customer1'); ?>" method="post">
        <div class="row">
            <div class="col-25">
                <label for="full_name">Nama Lengkap</label>
            </div>
            <div class="col-75">
                <input type="text" id="full_name" name="full_name" placeholder="Masukkan Nama Lengkap Anda..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="telp">No. Telp</label>
            </div>
            <div class="col-75">
                <input type="text" id="telp" name="telp" placeholder="Masukkan Nomor Telp Anda..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="website_name">Nama Project</label>
            </div>
            <div class="col-75">
                <input type="text" id="website_name" name="website_name" placeholder="Masukkan Nama Project Anda..">
            </div>
        </div>
      </from>
    </div>
    <div class="modal-footer">
      <div align="right">
        <button class="btnx">Pesan Sekarang</button>
      </div>
    </div>
  </div>
</div>