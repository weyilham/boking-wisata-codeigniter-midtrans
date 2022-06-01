<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $judul ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Paket</li>
        </ol>
    </section> <br><br>


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?= $this->session->flashdata('message'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="<?= base_url('paket/tambah') ?>" class="btn btn-primary"> Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Kategori</th>
                          <th>Nama Paket</th>
                          <th>Fasilitas</th>
                          <th>Kapasitas</th>
                          <th>Harga</th>
                          <th>Aksi </th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($paket as $u): ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $u['nm_kategori'] ?></td>
                        <td><?= $u['jenis_kategori'] ?></td>
                        <td><?= $u['fasilitas'] ?></td>
                        <td><?= $u['kapasitas'] ?> orang</td>
                        <td><?= $u['harga'] ?></td>

                        <td width="100">
                          <a href="<?= base_url('paket/edit/') . $u['id_detail_kategori'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                          <a href="<?= base_url('paket/delete/') . $u['id_detail_kategori'] ?>" class="btn btn-danger"
                            onclick="return confirm('Apakah yakin data akan dihapus?');"><i class="fa fa-trash"></i></a>
                        </td>
                    <?php endforeach; ?>
                      </tr>
                  </tbody>
              </table>

            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <small class="text-danger">Data paket</small>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>


</div>
<!-- /.content-wrapper -->
