<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('assets/') ?>img/profil/default.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Hi, User</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->

        <?php if ($this->session->userdata('role') == 1): ?>
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">DATA MASTER</li>
              <li><a href="<?= base_url('user') ?>"><i class="fa fa-user"></i> <span>Data User</span></a></li>
              <li><a href="<?= base_url('customer') ?>"><i class="fa fa-users"></i><span>Data Customer</span></a></li>
              <li><a href="<?= base_url('kategori') ?>"><i class="fa fa-list"></i> <span>Data Kategori</span></a></li>
              <li><a href="<?= base_url('paket') ?>"><i class="fa fa-list-alt"></i> <span>Data Paket</span></a></li>
          </ul>
        <?php endif; ?>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">PENGATURAN</li>
            <li><a href="<?= base_url('panel_admin/edit_password') ?>"><i class="fa fa-key"></i><span>Edit Password</span></a></li>
        </ul>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">LAPORAN</li>
            <li><a href="<?= base_url('cetak'); ?>"><i class="fa fa-user"></i> <span>Laporan Penjualan</span></a></li>
        </ul>


    </section>
    <!-- /.sidebar -->
</aside>
