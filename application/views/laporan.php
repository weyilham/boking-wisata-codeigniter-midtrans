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

    <div class="container-fluid">
      <div class="box ">
        <div class="row">
            <div class="col-md-8">
                <form role="form" action="<?= base_url('cetak/cetakLaporan') ?>" method="post">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="">Pilih Bulan</label>
                      <select class="form-control" name="bulan">
                        <option value="">--Pilih Bulan--</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>

                      </select>
                      </div>
                      <div class="form-group">
                        <label for="">Pilih Tahun</label>
                        <select class="form-control" name="tahun">
                          <option value="">--Pilih Tahun--</option>
                          <?php
                            $tahun = date('Y');
                            for ($i=2020; $i<$tahun+5 ; $i++) { ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                          <?php }; ?>
                        </select>
                      </div>
                        <button type="submit" class="btn btn-primary">Cetak Laporan</button>

                </form>
            </div>
        </div>
    </div>
  </div>

</div>

</div>
