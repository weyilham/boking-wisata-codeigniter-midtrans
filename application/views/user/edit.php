<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $judul; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data User</li>
            <li class="active">Edit User</li>
        </ol>
    </section><br><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form role="form" action="" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1"  value="<?= $user['nama'] ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="<?= $user['email'] ?>" readonly>
                        </div>

                        <div class="form-group row">
                          <div class="col-sm-2">Gambar</div>
                          <div class="col-sm-10">
                            <div class="row">
                              <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/') . $user['gambar']; ?>" class="img-thumbnail">
                              </div>
                              <div class="col-sm-9">
                                <div class="custom-file">
                                  <input type="file" name="gambar" id="image" class="custom-file-input" value="<?= $user['gambar'] ?>">
                                  <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>

                                  <label for="image" class="custom-file-label"> <span class="text-danger">max ukuran 2 MB</span> </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Edit</button>

                </form>
            </div>
        </div>
    </div>










</div>

</div>
<!-- /.content-wrapper -->
