<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $judul; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Paket</li>
            <li class="active">Tambah Paket</li>
        </ol>
    </section><br><br>

    <div class="container-fluid">
      <div class="box">
        <div class="row">
            <div class="col-md-8">
                <form role="form" action="" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                      <div class="form-group">

                        <label for="">Kategori</label>
                        <select class="form-control" name="kategori">
                          <option value="">--Pilih Kategori--</option>
                          <?php foreach ($kategori as $kat): ?>
                            <option value="<?= $kat['id_kategori']; ?>"><?= $kat['nm_kategori'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                        <div class="form-group">
                            <label for="nm_paket">Nama Paket</label>
                            <input type="text" name="jenis_kategori" class="form-control" id="nm_paket" placeholder="Nama Paket">
                            <?= form_error('jenis_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                          <label for="fasilitas">Fasilitas</label>
                          <textarea class="form-control" rows="3" id="fasilitas" name="fasilitas" placeholder="Fasilitas"></textarea>
                          <?= form_error('fasilitas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kapasitas">Kapasistas</label>
                            <input type="number" name="kapasitas" class="form-control" id="kapasitas" placeholder="Kapasitas">
                            <?= form_error('kapasitas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                          <label for="gambar">Gambar</label>
                          <input type="file" id="gambar" name="gambar">

                          <p class="help-block">upload gambar max 2 mb</p>
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
