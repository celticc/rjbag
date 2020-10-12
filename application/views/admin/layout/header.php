 <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin/dasbor') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>RJ</b> BAG</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>RJ</b>BAG</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
    
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          
              <?php if ($this->session->userdata('level') == 'Admin' && $this->session->userdata('jenis_kelamin') == 'perempuan') { ?>
               <img src="<?php echo base_url() ?>assets/tampilan/adminp.png" class="user-image" alt="User Image">
             <?php } ?>
             <?php if ($this->session->userdata('level') == 'Admin' && $this->session->userdata('jenis_kelamin') == 'laki laki') { ?>
               <img src="<?php echo base_url() ?>assets/tampilan/adminl.png" class="user-image" alt="User Image">
             <?php } ?>
              <?php if ($this->session->userdata('level') == 'Owner' && $this->session->userdata('jenis_kelamin') == 'laki laki') { ?>
               <img src="<?php echo base_url() ?>assets/tampilan/owner.png" class="user-image" alt="User Image">
             <?php } ?>

              <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                 <?php if ($this->session->userdata('level') == 'Admin' && $this->session->userdata('jenis_kelamin') == 'perempuan') { ?>
                <img src="<?php echo base_url() ?>assets/tampilan/adminp.png" class="img-circle" alt="User Image">
                <?php } ?>
                <?php if ($this->session->userdata('level') == 'Admin' && $this->session->userdata('jenis_kelamin') == 'laki laki') { ?>
                <img src="<?php echo base_url() ?>assets/tampilan/adminl.png" class="img-circle" alt="User Image">
                <?php } ?>
                <?php if ($this->session->userdata('level') == 'Owner' && $this->session->userdata('jenis_kelamin') == 'laki laki') { ?>
                <img src="<?php echo base_url() ?>assets/tampilan/Owner.png" class="img-circle" alt="User Image">
                <?php } ?>

                <p>

                  <?php echo $this->session->userdata('nama'); ?> - <?php echo $this->session->userdata('level'); ?>
                  <small><?php echo date ('d m y') ?></small>

                </p>

              </li>
            
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
      
        </ul>
      </div>
    </nav>
  </header>