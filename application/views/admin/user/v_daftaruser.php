<?php $this->load->view("_partials/v_head.php") ?>
<?php $this->load->view("_partials/v_navbar.php") ?>
  <main id="main">
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="section-title">
          <br>
          <br>
          <h2>User</h2>
          <br>
          <br>
          <h3>Daftar <span>User</span></h3>
        </div>
        <!-- tabelnya -->
        <div class="row">
          <div class="col-lg-12">
            <div class="float-right" style="margin-right:15px">
              <a class="btn btn-success" href="<?php echo site_url('admin/user/add') ?>">Tambah Data</a>
              <br>
              <br>
            </div>
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead class="bg-info text-white text-center">
                  <tr>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php foreach ($tbl_user as $user): ?>
                  <tr>
                    <td>
                      <?php echo $user->nama_user ?>
                    </td>
                    <td>
                      <?php echo $user->email ?>
                    </td>
                    <td class="text-capitalize">
                      <?php echo $user->role ?>
                    </td>
                    <td>
                      <a href="<?php echo site_url('admin/user/edit/'.$user->id_user) ?>" class="btn btn-sm btn-warning">Edit
                      </a>

                      <?php
                        if($user->id_user != $this->session->userdata("user_id"))
                        { 
                      ?>
                          <a onclick="deleteConfirm('<?php echo site_url('admin/user/delete/'.$user->id_user) ?>')" href="#!" class="btn btn-sm btn-danger">Hapus
                          </a>
                      <?php
                        }
                      ?>
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

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
<?php $this->load->view("_partials/v_js.php") ?>