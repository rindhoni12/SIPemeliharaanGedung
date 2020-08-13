<?php $this->load->view("_partials/v_head.php") ?>
<?php $this->load->view("_partials/v_navbar.php") ?>
  <main id="main">
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="section-title">
          <br>
          <br>
          <h2>Laporan</h2>
          <br>
          <br>
          <h3>Detail <span>Laporan</span></h3>
        </div>
        <!-- tabelnya -->
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead class="bg-info text-white text-center">
                  <tr>
                    <th>Uraian Pekerjaan</th>
                    <th>Volume Pekerjaan</th>
                    <th>Detail Harga Pekerjaan</th>
                    <th>Tgl Mulai Pekerjaan</th>
                    <th>Tgl Selesai Pekerjaan</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php foreach ($tbl_uraian as $uraian): ?>
                  <tr>
                    <td>
                      <?php echo $uraian->uraian_pekerjaan ?>
                    </td>
                    <td>
                      <?php echo $uraian->volume_pekerjaan ?>
                    </td>
                    <td>
                      <?php echo rupiah($uraian->harga_pekerjaan) ?>
                    </td>
                    <td>
                      <?php echo mediumdate_indo($uraian->mulai_pekerjaan) ?>
                    </td>
                    <td>
                      <?php echo mediumdate_indo($uraian->selesai_pekerjaan) ?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- akhir tabelnya -->
      </div>
    </section>
  </main>
  <!-- End #main -->

<?php $this->load->view("_partials/v_footer.php") ?>
<?php $this->load->view("_partials/v_modal.php") ?>
<?php $this->load->view("_partials/v_js.php") ?>