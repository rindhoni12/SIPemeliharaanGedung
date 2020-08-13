<?php $this->load->view("_partials/v_head.php") ?>
<?php $this->load->view("_partials/v_navbar.php") ?>
  <main id="main">
    <section id="pricing" class="features">
      <div class="container">
        <div class="section-title">
          <br>
          <br>
          <br>
          <br>
          <h2>Laporan</h2>
          <br>
          <br>
          <h3>Daftar Laporan Pemeliharaan Bangunan<span> Gedung B</span></h3>
        </div>
        <div class="row mt-5">
          <div class="col-lg-3 col-md-4 col-6 col-6">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #ffbb2c;"></i>
              <h3><a href="<?php echo site_url('admin/laporan/gedungb/lantai1') ?>">Lantai 1</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #5578ff;"></i>
              <h3><a href="<?php echo site_url('admin/laporan/gedungb/lantai2') ?>">Lantai 2</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #e80368;"></i>
              <h3><a href="<?php echo site_url('admin/laporan/gedungb/lantai3') ?>">Lantai 3</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #e361ff;"></i>
              <h3><a href="<?php echo site_url('admin/laporan/gedungb/lantai4') ?>">Lantai 4</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #47aeff;"></i>
              <h3><a href="<?php echo site_url('admin/laporan/gedungb/lantai5') ?>">Lantai 5</a></h3>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #ffa76e;"></i>
              <h3><a href="#">Lantai 6</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #11dbcf;"></i>
              <h3><a href="#">Lantai 7</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #4233ff;"></i>
              <h3><a href="#">Lantai 8</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #b2904f;"></i>
              <h3><a href="#">Lantai 9</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #b20969;"></i>
              <h3><a href="#">Lantai 10</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #ff5828;"></i>
              <h3><a href="#">Lantai 11</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="bx bxs-map" style="color: #29cc61;"></i>
              <h3><a href="#">Lantai 12</a></h3>
            </div>
          </div> -->
        </div>
      </div>
    </section>
  </main>
  <!-- End #main -->

<?php $this->load->view("_partials/v_footer.php") ?>
<?php $this->load->view("_partials/v_modal.php") ?>
<?php $this->load->view("_partials/v_js.php") ?>