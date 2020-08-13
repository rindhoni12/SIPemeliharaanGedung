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
          <h3>Edit <span>User</span></h3>
        </div>
        <!-- tabelnya -->
        <div class="row">
          <div class="col-lg-12">                
            <form action="<?php base_url('admin/user/edit') ?>" method="post" enctype="multipart/form-data" >
							<input type="hidden" name="id" value="<?php echo $user->id_user?>">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nama_user">Nama User </label>
                      <input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>" type="text"  name="nama_user" placeholder="Masukkan nama user" autocomplete="off" value="<?php echo $user->nama_user ?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('nama_user') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="role">Role User</label>
                      <select class="form-control" name="role" required>
                        <option value="admin" <?= $user->role == 'admin' ? 'selected' : '' ?>>Admin</option>
												<option value="member" <?= $user->role == 'member' ? 'selected' : '' ?>>Member</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email User </label>
                      <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" type="email"  name="email" placeholder="Masukkan email user" autocomplete="off" value="<?php echo $user->email ?>"/>
                      <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password">Password User</label>
                      <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" type="password"  name="password" placeholder="Masukkan password baru user" autocomplete="off"/>
											<small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah password</small>
											<input class="form-control" type="text" name="password_lama" value="<?php echo $user->password ?>" hidden>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-actions mt-4">
                <div class="text-left">
                  <button type="submit" class="btn btn-warning">Edit Data</button>
                  <a class="btn btn-light" href="<?php echo site_url('admin/user') ?>">Batal</a>
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