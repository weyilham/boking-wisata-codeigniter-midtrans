<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $judul ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active"><?= $judul ?></li>
        </ol>
    </section> <br><br>

    <!-- Main content -->
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>No HP</th>
                          <th>Alamat</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Lahir</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($customer as $u): ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $u['nama_pelanggan'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['no_hp'] ?></td>
                        <td><?= $u['alamat'] ?></td>
                        <td><?= $u['jk'] ?></td>
                        <td><?= $u['tgl_lahir'] ?></td>
                        <td class="text-center">
                          <a href="<?= base_url('customer/detail/') . $u['id_pelanggan'] ?>" class="btn btn-primary"><i class="fa fa-folder-open"></i></a>
                        </td>
                    <?php endforeach; ?>
                      </tr>
                  </tbody>
              </table>

            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <small>Data customer</small>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
