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
          <h3>Ubah <span>Laporan</span></h3>
        </div>
        <!-- tabelnya -->
        <div class="row">
          <div class="col-lg-12">                
            <form action="<?php base_url('admin/laporandetail/edit') ?>" method="post" enctype="multipart/form-data" id="id_laporan">
              <div class="form-body">
							  <input id="id_laporan" name="id_laporan" value="<?php echo $laporan->id_laporan?>" type="hidden">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="tgl_pelaksanaan">Tgl Pelaksanaan</label>
                      <input class="form-control <?php echo form_error('tgl_pelaksanaan') ? 'is-invalid':'' ?>" type="date"  name="tgl_pelaksanaan" placeholder="Masukkan tanggal pelaksanaan" autocomplete="off" value="<?php echo $laporan->tgl_pelaksanaan ?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('tgl_pelaksanaan') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="tgl_pelaksanaan_berikutnya">Tgl Berikutnya</label>
                      <input class="form-control <?php echo form_error('tgl_pelaksanaan_berikutnya') ? 'is-invalid':'' ?>" type="date"  name="tgl_pelaksanaan_berikutnya" placeholder="Masukkan tanggal pelaksanaan berikutnya" autocomplete="off" value="<?php echo $laporan->tgl_pelaksanaan_berikutnya ?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('tgl_pelaksanaan_berikutnya') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="lokasi">Lokasi</label>
                      <input class="form-control <?php echo form_error('lokasi') ? 'is-invalid':'' ?>" type="text"  name="lokasi" placeholder="Masukkan lokasi yang diperbaiki" autocomplete="off" value="<?php echo $laporan->lokasi ?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('lokasi') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="elemen_gedung">Elemen Gedung</label>
                      <input class="form-control <?php echo form_error('elemen_gedung') ? 'is-invalid':'' ?>" type="text"  name="elemen_gedung" placeholder="Masukkan elemen gedung yang diperbaiki" autocomplete="off" value="<?php echo $laporan->elemen_gedung ?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('elemen_gedung') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="penyedia_jasa">Penyedia Jasa</label>
                      <input class="form-control <?php echo form_error('penyedia_jasa') ? 'is-invalid':'' ?>" type="text"  name="penyedia_jasa" placeholder="Masukkan penyedia jasa yang memperbaiki" autocomplete="off" value="<?php echo $laporan->penyedia_jasa ?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('penyedia_jasa') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="status">Status Perbaikan</label>
                      <select class="form-control" name="status" required>
                        <option value="sudah" <?= $laporan->status == 'sudah' ? 'selected' : '' ?>>Sudah</option>
												<option value="belum" <?= $laporan->status == 'belum' ? 'selected' : '' ?>>Belum</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group" hidden>
                      <label for="gedung">Gedung</label>
                      <select class="form-control" name="gedung" required readonly>
                        <option value="A" <?= $laporan->gedung == 'A' ? 'selected' : '' ?>>Gedung A</option>
                        <option value="B" <?= $laporan->gedung == 'B' ? 'selected' : '' ?>>Gedung B</option>
                        <option value="C" <?= $laporan->gedung == 'C' ? 'selected' : '' ?>>Gedung C</option>
                        <option value="D" <?= $laporan->gedung == 'D' ? 'selected' : '' ?>>Gedung D</option>
                        <option value="E" <?= $laporan->gedung == 'E' ? 'selected' : '' ?>>Gedung E</option>
                        <option value="F" <?= $laporan->gedung == 'F' ? 'selected' : '' ?>>Gedung F</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group" hidden>
                      <label for="lantai">Lantai</label>
                      <select class="form-control" name="lantai" required readonly>
                        <option value="1" <?= $laporan->lantai == '1' ? 'selected' : '' ?>>Lantai 1</option>
                        <option value="2" <?= $laporan->lantai == '2' ? 'selected' : '' ?>>Lantai 2</option>
                        <option value="3" <?= $laporan->lantai == '3' ? 'selected' : '' ?>>Lantai 3</option>
                        <option value="4" <?= $laporan->lantai == '4' ? 'selected' : '' ?>>Lantai 4</option>
                        <option value="5" <?= $laporan->lantai == '5' ? 'selected' : '' ?>>Lantai 5</option>
                        <option value="6" <?= $laporan->lantai == '6' ? 'selected' : '' ?>>Lantai 6</option>
                        <option value="7" <?= $laporan->lantai == '7' ? 'selected' : '' ?>>Lantai 7</option>
                        <option value="8" <?= $laporan->lantai == '8' ? 'selected' : '' ?>>Lantai 8</option>
                        <option value="9" <?= $laporan->lantai == '9' ? 'selected' : '' ?>>Lantai 9</option>
                        <option value="10" <?= $laporan->lantai == '10' ? 'selected' : '' ?>>Lantai 10</option>
                        <option value="11" <?= $laporan->lantai == '11' ? 'selected' : '' ?>>Lantai 11</option>
                        <option value="12" <?= $laporan->lantai == '12' ? 'selected' : '' ?>>Lantai 12</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <?php 
                    for ($i = 0; $i < $juml->jumlah_laporan; $i++) 
                    { 
                  ?>
							      <input id="id_uraian" name="id_uraian<?php echo $i; ?>" value="<?php echo $uraian[$i]->id_uraian?>" type="hidden">
                    <div class="col-md-3">
                      <div class="form-group" id='groupuraian'>
                        <div id="divuraian<?php echo ($i + 1); ?>">
                          <label class="mt-4" for="uraian_pekerjaan">Uraian Pekerjaan <?php echo ($i + 1); ?></label>
                          <input type='text' class="form-control" name="uraian_pekerjaan<?php echo $i; ?>" placeholder="Masukkan uraian pekerjaan" value="<?php echo $uraian[$i]->uraian_pekerjaan; ?>" autocomplete="off" />
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group" id='groupvolume'>
                        <div id="divvolume<?php echo ($i+1) ?>">
                          <label class="mt-4" for="volume_pekerjaan">Volume Pekerjaan</label>
                          <input type='text' class="form-control" name="volume_pekerjaan<?php echo $i; ?>" placeholder="Masukkan volume pekerjaan" value="<?php echo $uraian[$i]->volume_pekerjaan; ?>" autocomplete="off" />
                        </div>
                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="form-group" id='groupharga'>
                        <div id="divharga<?php echo ($i+1) ?>">
                          <label class="mt-4" for="harga_pekerjaan">Harga</label>
                          <input type='number' class="form-control" name="harga_pekerjaan<?php echo $i; ?>" placeholder="Masukkan harga" value="<?php echo $uraian[$i]->harga_pekerjaan; ?>" autocomplete="off" />
                        </div>
                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="form-group" id='groupmulai'>
                        <div id="divmulai<?php echo ($i+1) ?>">
                          <label class="mt-4" for="mulai_pekerjaan">Mulai</label>
                          <input type='date' class="form-control" name="mulai_pekerjaan<?php echo $i; ?>" placeholder="Masukkan waktu mulai pekerjaan" value="<?php echo $uraian[$i]->mulai_pekerjaan; ?>" autocomplete="off" />
                        </div>
                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="form-group" id='groupselesai'>
                        <div id="divselesai<?php echo ($i+1) ?>">
                          <label class="mt-4" for="selesai_pekerjaan">Selesai</label>
                          <input type='date' class="form-control" name="selesai_pekerjaan<?php echo $i; ?>" placeholder="Masukkan waktu selesai pekerjaan" value="<?php echo $uraian[$i]->selesai_pekerjaan; ?>"autocomplete="off" />
                        </div>
                      </div>
                    </div>
                  <?php 
                    } 
                  ?>
                </div>

              </div>
              <div class="form-actions mt-4">
                <div class="text-left">
                  <button type="submit" class="btn btn-warning">Edit Data</button>
                  <a class="btn btn-light" href="javascript:history.go(-1)">Batal</a>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- akhir tabelnya -->
      </div>
    </section>
  </main>
  <!-- End #main -->

<?php $this->load->view("_partials/v_footer.php") ?>
<?php $this->load->view("_partials/v_js.php") ?>