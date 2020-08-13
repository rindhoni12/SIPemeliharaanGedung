<?php $this->load->view("_partials/v_head.php") ?>
<?php $this->load->view("_partials/v_navbar.php") ?>
  <main id="main">
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="section-title">
          <br>
          <br>
          <h2>Pencarian</h2>
          <br>
          <br>
          <h3>Hasil Pencarian Laporan <span>Pemeliharaan Bangunan</span></h3>
        </div>
        <!-- tabelnya -->
        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead class="bg-info text-white text-center">
                  <tr>
                    <th>Tgl Pelaksanaan</th>
                    <th>Tgl Berikutnya</th>
                    <th>Lokasi</th>
                    <th>Elemen Gedung</th>
                    <th>Penyedia Jasa</th>
                    <th>Status Pekerjaan</th>
                    <th>Gedung</th>
                    <th>Lantai</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php foreach ($users as $laporan): ?>
                  <tr>
                    <td>
                      <?php echo mediumdate_indo($laporan->tgl_pelaksanaan) ?>
                    </td>
                    <td>
                      <?php echo hari($laporan->tgl_pelaksanaan_berikutnya) ?>
                    </td>
                    <td>
                      <?php echo $laporan->lokasi ?>
                    </td>
                    <td>
                      <?php echo $laporan->elemen_gedung ?>
                    </td>
                    <td>
                      <?php echo $laporan->penyedia_jasa ?>
                    </td>
                    <!-- <td>
                      <?php echo rupiah($laporan->jumlah) ?>
                    </td> -->
                    <td class="text-capitalize">
                      <?php echo $laporan->status ?>
                    </td>
                    <td>
                      <?php echo $laporan->gedung ?>
                    </td>
                    <td>
                      <?php echo $laporan->lantai ?>
                    </td>
                    <td style="width:100px">
                      <a href="<?php echo site_url('admin/laporandetail/detail/'.$laporan->id_laporan) ?>" class="btn btn-sm btn-success" style="margin-bottom:5px">Detail
                      </a>
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