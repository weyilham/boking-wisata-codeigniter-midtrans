<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $judul; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>

            <li class="active">Edit Password</li>
        </ol>
    </section><br><br>

    <div class="container-fluid">
      <div class="box ">
        <div class="row">


            <div class="col-md-8">
              <?= $this->session->flashdata('message'); ?>
                <form role="form" action="" method="post">
                    <div class="box-body">

                      <!-- <input type="hidden" name="id_user" class="form-control" > -->

                        <div class="form-group">
                            <label for="password_lama">Password Lama</label>
                            <input type="password" name="password_lama" class="form-control" id="password_lama" >
                            <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password1">Password Baru</label>
                            <input type="password" name="password1" class="form-control" id="password1" >
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password2">Ulangi Password </label>
                            <input type="password" name="password2" class="form-control" id="password2" >
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                        <button type="submit" class="btn btn-primary">Ubah Password</button>

                </form>
            </div>
        </div>
    </div>
  </div>

</div>

</div>
<!-- /.content-wrapper -->
