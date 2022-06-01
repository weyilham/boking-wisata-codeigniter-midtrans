<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $judul; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>

        </ol>
    </section><br><br>

    <section class="body-content">
      <div class="container-fluid">

      <div class="row">
        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $this->db->count_all('tb_pesanan'); ?></h3>

              <p>Pemesanan</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>

          </div>
        </div>

        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $this->db->count_all('tb_user'); ?></h3>

              <p>User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>

          </div>
        </div>

        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $this->db->count_all('tb_pesanan'); ?></h3>

              <p>Pelanggan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>

          </div>
        </div>

        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $this->db->count_all('tb_detail_kategori'); ?></h3>

              <p>Paket</p>
            </div>
            <div class="icon">
              <i class="fa fa-ticket"></i>
            </div>

          </div>
        </div>

      </div>



      </div>
    </section>

</div>
