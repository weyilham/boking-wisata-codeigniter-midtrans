<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $judul; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Kategori</li>
            <li class="active">Tambah Kategori</li>
        </ol>
    </section><br><br>

    <div class="container-fluid">
      <div class="box ">
        <div class="row">
            <div class="col-md-8">
                <form role="form" action="" method="post">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="nm_paket">Nama Kategori</label>
                            <input type="text" name="nm_kategori" class="form-control" id="nm_paket" placeholder="Nama Paket">
                            <?= form_error('nm_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                        <button type="submit" class="btn btn-primary">Tambah</button>

                </form>
            </div>
        </div>
    </div>
  </div>

</div>

</div>
<!-- /.content-wrapper -->
