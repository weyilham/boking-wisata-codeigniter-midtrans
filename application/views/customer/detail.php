<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $judul; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Detail Customer</li>
        </ol>
    </section><br><br>

    <div class="container-fluid">
      <div class="box ">
        <div class="row">
            <div class="col-md-12">
          
              <div class="box-body">

                <div class="row">
                  <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profil/') . $customer['gambar']; ?>" alt="..." class="img-thumbnail">
                  </div>
                  <div class="col-md-8">
                    <div class="table-responsive">
                    <table class="table table-res">
                      <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td><?= $customer['nama_pelanggan'] ?></td>
                      </tr>
                      <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td><?= $customer['nama_pelanggan'] ?></td>
                      </tr>
                      <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td><?= $customer['nama_pelanggan'] ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?= $customer['email'] ?></td>
                      </tr>
                      <tr>
                        <td>No HandPhone</td>
                        <td>:</td>
                        <td><?= $customer['no_hp'] ?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $customer['alamat'] ?></td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= $customer['jk'] ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= $customer['tgl_lahir'] ?></td>
                      </tr>
                    </table>
                  </div>
                  </div>
                </div>

            </div>
        </div>
    </div>
  </div>

</div>

</div>
<!-- /.content-wrapper -->
