<?php $this->load->view("_partials/v_head.php") ?>
<?php $this->load->view("_partials/v_navbar.php") ?>
  <main id="main">
    <section id="pricing" class="services">
      <div class="container">
        <div class="section-title">
          <br>
          <br>
          <h2>Laporan</h2>
          <br>
          <br>
          <h3>Daftar <span>Laporan Pemeliharaan Bangunan Gedung</span></h3>
        </div>
        <form action="<?php echo base_url(); ?>admin/laporandetail/search" method="post"> 
          <div class="row mt-12 text-center"> 
            <div class="col-md-12">
              <div class="form-group">
                <label for="cari" class="font-weight-bold">Pencarian</label>
                <input type="text" name="search" class="form-control" placeholder="Cari laporan..." autocomplete="off">
                <input type="submit" value="Cari" name="save" class="btn mt-2 btn-sm btn-danger"/>                
              </div>
            </div>
          </div>
        </form>
        <div class="row mt-3">
          <div class="col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-buildings"></i></div>
              <h4 class="title"><a href="<?php echo site_url('admin/laporan/gedunga') ?>">GEDUNG A</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-buildings"></i></div>
              <h4 class="title"><a href="<?php echo site_url('admin/laporan/gedungb') ?>">GEDUNG B</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-buildings"></i></div>
              <h4 class="title"><a href="#">GEDUNG C</a></h4>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-buildings"></i></div>
              <h4 class="title"><a href="#">GEDUNG D</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-buildings"></i></div>
              <h4 class="title"><a href="#">GEDUNG E</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-buildings"></i></div>
              <h4 class="title"><a href="#">GEDUNG F</a></h4>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- End #main -->

<?php $this->load->view("_partials/v_footer.php") ?>
<?php $this->load->view("_partials/v_modal.php") ?>
<?php $this->load->view("_partials/v_js.php") ?>