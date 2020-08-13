<!-- ======= Navbar ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">

    <!-- Uncomment below if you prefer to use an image logo -->
    <a 
      href="
      <?php
        if ($this->session->userdata('role') == 'admin')
        {
          echo site_url('admin/landing');
        }
        else 
        {
          echo site_url('member/landing');
        }
      ?>
      " class="logo mr-auto"><img src="<?php echo base_url('assets/img/logo.png') ?>" alt="" class="img-fluid">
    </a>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <?php 
          if ($this->session->userdata('role') == 'admin')
          { 
          ?>
            <li><a href="<?php echo site_url('admin/landing') ?>">Home</a></li>
            <li><a href="<?php echo site_url('admin/user') ?>">User</a></li>
            <li><a href="<?php echo site_url('admin/laporan') ?>">Laporan</a></li>
          <?php
          }
          else 
          {
          ?>
            <li><a href="<?php echo site_url('member/landing') ?>">Home</a></li>
            <li><a href="<?php echo site_url('member/laporan') ?>">Laporan</a></li>
          <?php
          }
        ?>
        <li><a href="<?php echo base_url('login/logout'); ?>" class="text-danger">Logout</a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header>
<!-- End Navbar -->