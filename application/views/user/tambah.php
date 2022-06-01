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
            <li class="active">Tambah User</li>
        </ol>
    </section><br><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form role="form" action="" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?= set_value('nama'); ?>" placeholder="Nama Lengkap" >
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="<?= set_value('email'); ?>" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password 1</label>
                            <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password 1">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password 2</label>
                            <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Password  2">
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>

                </form>
            </div>
        </div>
    </div>










</div>

</div>
<!-- /.content-wrapper -->
