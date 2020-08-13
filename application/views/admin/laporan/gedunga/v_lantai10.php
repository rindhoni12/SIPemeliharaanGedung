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
          <h3>Daftar Laporan Pemeliharaan Bangunan<span> Gedung A Lantai 10</span></h3>
        </div>
        <!-- tabelnya -->
        <div class="row">
          <div class="col-lg-12">
            <?php 
              if ($this->session->userdata('role') == 'admin')
              { 
              ?>
                <div class="float-right" style="margin-right:15px">
                  <a class="btn btn-success" href="<?php echo site_url('admin/laporandetail/add') ?>">Tambah Data</a>
                  <br>
                  <br>
                </div>
              <?php
              }
            ?>
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead class="bg-info text-white text-center">
                  <tr>
                    <th>Tgl Pelaksanaan</th>
                    <th>Tgl Berikutnya</th>
                    <th>Lokasi</th>
                    <th>Elemen Gedung</th>
                    <th>Penyedia Jasa</th>
                    <th>Harga Pekerjaan</th>
                    <th>Status Pekerjaan</th>
                    <?php 
                      if ($this->session->userdata('role') == 'admin')
                      { 
                      ?>
                        <th>Aksi</th>
                      <?php
                      }
                    ?>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php foreach ($tbl_laporan as $laporan): ?>
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
                    <td>
                      <?php echo rupiah($laporan->jumlah) ?>
                    </td>
                    <td class="text-capitalize">
                      <?php echo $laporan->status ?>
                    </td>
                    <?php 
                      if ($this->session->userdata('role') == 'admin')
                      { 
                      ?>
                        <td style="width:165px">
                          <a href="<?php echo site_url('admin/laporandetail/detail/'.$laporan->id_laporan) ?>" class="btn btn-sm btn-success" style="margin-bottom:5px">Detail
                          </a>
                          

                          <a href="<?php echo site_url('admin/laporandetail/edit/'.$laporan->id_laporan) ?>" class="btn btn-sm btn-warning" style="margin-bottom:5px">Edit
                          </a>

                          <a onclick="deleteConfirm('<?php echo site_url('admin/laporandetail/delete/'.$laporan->id_laporan) ?>')" href="#!" class="btn btn-sm btn-danger" style="margin-bottom:5px">Hapus
                          </a>
                        </td>
                      <?php
                      }
                      else 
                      {
                      ?>
                        <td style="width:165px">
                          <a href="<?php echo site_url('admin/laporandetail/detail/'.$laporan->id_laporan) ?>" class="btn btn-sm btn-success" style="margin-bottom:5px">Detail
                          </a>
                        </td>
                      <?php
                      }
                    ?>
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

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
<?php $this->load->view("_partials/v_js.php") ?>