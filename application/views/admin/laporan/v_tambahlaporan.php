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
          <h3>Tambah <span>Laporan</span></h3>
        </div>
        <!-- tabelnya -->
        <div class="row">
          <div class="col-lg-12">                
            <form action="<?php base_url('admin/laporandetail/add') ?>" method="post" enctype="multipart/form-data" >
              <div class="form-body">
                <div class="row">
                  <input id="id_laporan" name='id_laporan' value="<?= $kode ?>" type='hidden'>
                  
                  <div id="total_semua_uraian">
                    
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="tgl_pelaksanaan">Tgl Pelaksanaan</label>
                      <input class="form-control <?php echo form_error('tgl_pelaksanaan') ? 'is-invalid':'' ?>" type="date"  name="tgl_pelaksanaan" placeholder="Masukkan tanggal pelaksanaan" autocomplete="off"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('tgl_pelaksanaan') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="tgl_pelaksanaan_berikutnya">Tgl Berikutnya</label>
                      <input class="form-control <?php echo form_error('tgl_pelaksanaan_berikutnya') ? 'is-invalid':'' ?>" type="date"  name="tgl_pelaksanaan_berikutnya" placeholder="Masukkan tanggal pelaksanaan berikutnya" autocomplete="off"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('tgl_pelaksanaan_berikutnya') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="lokasi">Lokasi</label>
                      <input class="form-control <?php echo form_error('lokasi') ? 'is-invalid':'' ?>" type="text"  name="lokasi" placeholder="Masukkan lokasi yang diperbaiki" autocomplete="off"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('lokasi') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="elemen_gedung">Elemen Gedung</label>
                      <input class="form-control <?php echo form_error('elemen_gedung') ? 'is-invalid':'' ?>" type="text"  name="elemen_gedung" placeholder="Masukkan elemen gedung yang diperbaiki" autocomplete="off"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('elemen_gedung') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="penyedia_jasa">Penyedia Jasa</label>
                      <input class="form-control <?php echo form_error('penyedia_jasa') ? 'is-invalid':'' ?>" type="text"  name="penyedia_jasa" placeholder="Masukkan penyedia jasa yang memperbaiki" autocomplete="off"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('penyedia_jasa') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="status">Status Perbaikan</label>
                      <select class="form-control" name="status" required>
                        <option value="" selected disabled hidden>Pilih status perbaikan</option>';
                        <option value="sudah">Sudah</option>
                        <option value="belum">Belum</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="gedung">Gedung</label>
                      <select class="form-control" name="gedung" required>
                        <option value="" selected disabled hidden>Pilih gedung</option>';
                        <option value="A">Gedung A</option>
                        <option value="B">Gedung B</option>
                        <option value="C">Gedung C</option>
                        <option value="D">Gedung D</option>
                        <option value="E">Gedung E</option>
                        <option value="F">Gedung F</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="lantai">Lantai</label>
                      <select class="form-control" name="lantai" required>
                        <option value="" selected disabled hidden>Pilih lantai</option>';
                        <option value="1">Lantai 1</option>
                        <option value="2">Lantai 2</option>
                        <option value="3">Lantai 3</option>
                        <option value="4">Lantai 4</option>
                        <option value="5">Lantai 5</option>
                        <option value="6">Lantai 6</option>
                        <option value="7">Lantai 7</option>
                        <option value="8">Lantai 8</option>
                        <option value="9">Lantai 9</option>
                        <option value="10">Lantai 10</option>
                        <option value="11">Lantai 11</option>
                        <option value="12">Lantai 12</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">                 
                  <div class="col-md-4">
                    <label class="mt-3" for="detail_laporan">Detail Laporan (<span id="jumlah_uraian">1</span>)</label>
                      <div class="btn-list">
                        <button type="button" class="btn waves-effect waves-light btn-info btn-sm mb-1" id="tambah">Tambah Form</button>
                        <button type="button" class="btn waves-effect waves-light btn-danger btn-sm mb-1" id="hapus">Kurangi Form</button>
                      </div>
                  </div>
                </div>
                
                <div class="row">                  
                  <div class="col-md-3">
                    <div class="form-group" id='groupuraian'>
                      <div id="divuraian1">
                        <label class="mt-4" for="uraian_pekerjaan">Uraian Pekerjaan 1</label>
                        <input type='text' class="form-control <?php echo form_error('uraian_pekerjaan') ? 'is-invalid':'' ?>" name="uraian_pekerjaan1" placeholder="Masukkan uraian pekerjaan" autocomplete="off" id='input1'/>
                        <div class="invalid-feedback">
                        <?php echo form_error('uraian_pekerjaan') ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group" id='groupvolume'>
                      <div id="divvolume1">
                        <label class="mt-4" for="volume_pekerjaan">Volume Pekerjaan</label>
                        <input type='text' class="form-control <?php echo form_error('volume_pekerjaan') ? 'is-invalid':'' ?>" name="volume_pekerjaan1" placeholder="Masukkan volume pekerjaan" autocomplete="off" id='input1'/>
                        <div class="invalid-feedback">
                        <?php echo form_error('volume_pekerjaan') ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group" id='groupharga'>
                      <div id="divharga1">
                        <label class="mt-4" for="harga_pekerjaan">Harga</label>
                        <input type='number' class="form-control <?php echo form_error('harga_pekerjaan') ? 'is-invalid':'' ?>" name="harga_pekerjaan1" placeholder="Masukkan harga" autocomplete="off" id='input1'/>
                        <div class="invalid-feedback">
                        <?php echo form_error('harga_pekerjaan') ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group" id='groupmulai'>
                      <div id="divmulai1">
                        <label class="mt-4" for="mulai_pekerjaan">Mulai</label>
                        <input type='date' class="form-control <?php echo form_error('mulai_pekerjaan') ? 'is-invalid':'' ?>" name="mulai_pekerjaan1" placeholder="Masukkan waktu mulai pekerjaan" autocomplete="off" id='input1'/>
                        <div class="invalid-feedback">
                        <?php echo form_error('mulai_pekerjaan') ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group" id='groupselesai'>
                      <div id="divselesai1">
                        <label class="mt-4" for="selesai_pekerjaan">Selesai</label>
                        <input type='date' class="form-control <?php echo form_error('selesai_pekerjaan') ? 'is-invalid':'' ?>" name="selesai_pekerjaan1" placeholder="Masukkan waktu selesai pekerjaan" autocomplete="off" id='input1'/>
                        <div class="invalid-feedback">
                        <?php echo form_error('selesai_pekerjaan') ?>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="form-actions mt-4">
                <div class="text-left">
                  <button type="submit" class="btn btn-success">Tambah Data</button>
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

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->

<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>

<script type="text/javascript">
  $(document).ready(function () {
    var i = 2;

    $("#tambah").click(function () {
      var div = $(document.createElement('divuraian'))
        .attr("id", 'divuraian' + i);
      div.after()
        .html(
          '<label class="mt-4" for="uraian_pekerjaan">Uraian Pekerjaan ' + i + '</label>' +
          '<input type="text" class="form-control" name="uraian_pekerjaan' + i + '" placeholder="Masukkan uraian pekerjaan" autocomplete="off" id="input' + i + '"/>'
        );
      div.appendTo("#groupuraian");

      var div = $(document.createElement('divvolume'))
        .attr("id", 'divvolume' + i);
      div.after()
        .html(
          '<label class="mt-4" for="volume_pekerjaan">Volume Pekerjaan</label>' +
          '<input type="text" class="form-control" name="volume_pekerjaan' + i + '" placeholder="Masukkan volume pekerjaan" autocomplete="off" id="input' + i + '"/>'
        );
      div.appendTo("#groupvolume");

      var div = $(document.createElement('divharga'))
        .attr("id", 'divharga' + i);
      div.after()
        .html(
          '<label class="mt-4" for="harga_pekerjaan">Harga</label>' +
          '<input type="number" class="form-control" name="harga_pekerjaan' + i + '" placeholder="Masukkan harga" autocomplete="off" id="input' + i + '"/>'
        );
      div.appendTo("#groupharga");

      var div = $(document.createElement('divmulai'))
        .attr("id", 'divmulai' + i);
      div.after()  
        .html(
          '<label class="mt-4" for="mulai_pekerjaan">Mulai</label>' +
          '<input type="date" class="form-control" name="mulai_pekerjaan' + i + '" placeholder="Masukkan waktu mulai pekerjaan" autocomplete="off" id="input' + i + '"/>'
        );						
      div.appendTo("#groupmulai");

      var div = $(document.createElement('divselesai'))
        .attr("id", 'divselesai' + i);
      div.after()
        .html(
          '<label class="mt-4" for="selesai_pekerjaan">Selesai</label>' +
          '<input type="date" class="form-control" name="selesai_pekerjaan' + i + '" placeholder="Masukkan waktu selesai pekerjaan" autocomplete="off" id="input' + i + '"/>'
        );
      div.appendTo("#groupselesai");
      

      document.getElementById("jumlah_uraian").innerHTML = i;

      document.getElementById("total_semua_uraian").innerHTML = '<input id="total_uraian" name="total_uraian" value="'+i+'" type="hidden">';
      
      i++;
    });

    $("#hapus").click(function () {
      if (i == 2) {
        alert("Input Form Tidak Bisa Dihapus Lagi.");
        // document.getElementById("jumlah_uraian").innerHTML = "1";
        return false;
      }
      i--;
      $("#divuraian" + i).remove();
      $("#divvolume" + i).remove();
      $("#divharga" + i).remove();
      $("#divmulai" + i).remove();
      $("#divselesai" + i).remove();
      document.getElementById("jumlah_uraian").innerHTML = i-1;
      document.getElementById("total_semua_uraian").innerHTML = '<input id="total_uraian" name="total_uraian" value="'+(i-1)+'" type="hidden">';

    });

  });
</script>

  <style type="text/css">
    a {
      cursor: pointer
    }
  </style>

<?php $this->load->view("_partials/v_js.php") ?>