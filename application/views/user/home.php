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

<section class="data container" id="data">
  <!-- box 1 -->
  <div class="box">
    <i class='bx bx-user'></i>
    <h3>Masukan Untuk Kami</h3>
    <p>Lorem ipsum dolor sitm anet consectetur adipisicing elit. Facilis, aut.</p>
  </div>
  <!-- box 2 -->
  <div class="box">
    <i class='bx bx-desktop'></i>
    <h3>Hubungi Kami</h3>
    <p>Lorem ipsum dolor sitm anet consectetur adipisicing elit. Facilis, aut.</p>
  </div>
  <!-- box 3 -->
  <div class="box">
    <i class='bx bx-home-alt'></i>
    <h3>Info Lengkap Manokwari</h3>
    <p>Lorem ipsum dolor sitm anet consectetur adipisicing elit. Facilis, aut.</p>
  </div>
</section>

<section class="about container" id="about">
  <div class="about-img">
    <img src="<?= base_url('assets/user/malaria.jpg') ?>" alt="">
  </div>
  <div class="about-text">
    <span>About Us</span>
    <h2>Informasi Malaria Pada Manokwari<br> Papua Barat</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto debitis ducimus</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto debitis ducimus</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto debitis ducimus</p>
    <p>Lorem ipsum dolor, sit amet consctetur adipisicing elit. Voluptatem, soluta.</p>
    <a href="#" class="btn">Selengkapnya</a>
  </div>
</section>

<section class="footer">
  <div class="footer-container container">
    <h2>Malaria</h2>
      <div class="footer-box">
        <h3>Link</h3>
        <a href="#">Home</a>
        <a href="#">Pemetaan</a>
        <a href="#">Data Malaria</a>
        <a href="#">Tentang Kami</a>
      </div>
      <div class="footer-box">
        <h3>Alamat</h3>
        <a href="#">Manokwari</a>
        <a href="#">Papua Barat</a>
        <a href="#">Indonesia</a>
      </div>
      <div class="footer-box">
        <h3>Kontak</h3>
        <a href="#">nomor anda</a>
        <a href="#">emailkamu@gmail.com</a>
        <div class="social">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>
  </div>
</section>

<div class="copyright">
  <p>&#169; Malaria Papua Barat</p>
</div>

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