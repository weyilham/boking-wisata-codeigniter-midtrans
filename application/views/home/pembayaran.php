




  <main id="main" class="mt-4">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do" style="margin-top: 100px;">
      <div class="container">

        <div class="section-title">
          <h2>Daftar Pembayaran</h2>
          <div class="row">
            <div class="col-md-12">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md  align-items-stretch mt-4 mt-md-0">
            <table class="table table-hover table-striped table-bordered">
              <tr>
                <th>NO</th>
                <th>No Pemesanan</th>
                <th>Tanggal Pesan</th>
                <th>Total</th>
                <th>Status Pemesanan</th>
                <th>Aksi</th>

              </tr>

              <?php
                $no =1;
                foreach ($pembayaran as $item) :?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $item['order_id']; ?></td>
                  <td><?= $item['tgl_pesan']; ?></td>
                  <td align="right"><?= 'Rp. ' . number_format($item['total_bayar'], 0,',','.');  ?></td>
                  <td>
                    <?php if ($item['status_pembayaran'] == 'pending'): ?>
                      <button type="button" name="button" class="btn btn-warning btn-sm" disabled>Menunggu Pembayaran</button>
                    <?php elseif ($item['status_pembayaran'] == 'settlement'): ?>
                      <button type="button" name="button" class="btn btn-success btn-sm" disabled>Selesai</button>
                    <?php elseif ($item['status_pembayaran'] == 'expire'): ?>
                      <button type="button" name="button" class="btn btn-danger btn-sm" disabled>Kadaluarsa</button>

                    <?php endif; ?>
                  </td>
                  <td>

                    <?php if ($item['status_pembayaran'] == 'pending'): ?>
                      <div class="btn-group">
                        <a href="<?= base_url('home/detail_pembayaran/') . $item['order_id'] ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Detail Pemesanan">Detail</a>
                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?= base_url('home/verify/') . $item['order_id']  ?>"><i class="fas fa-fw fa-check"></i> Cek Pembayaran</a>
                        </div>
                    <?php elseif ($item['status_pembayaran'] == 'settlement'): ?>
                      <a href="<?= base_url('home/detail_pembayaran/') . $item['order_id'] ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Detail Pemesanan">Detail</a>
                    <?php elseif ($item['status_pembayaran'] == 'expire') : ?>
                      <a href="<?= base_url('home/detail_pembayaran/') . $item['order_id'] ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Detail Pemesanan">Detail</a>
                    <?php endif; ?>


                   </td>
                </tr>

              <?php endforeach; ?>

            </table>


          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg" style="margin-top: 300px">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>

        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>Bantarwangi, Cinangka<br>Serang - Banten, 42167</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>waruwangi@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>087771625367<br>08571622311</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
