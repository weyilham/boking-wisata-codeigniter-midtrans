




  <main id="main" class="mt-4">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do" style="margin-top: 100px;">
      <div class="container">
        <?php if ($pembayaran['status_pembayaran'] == 'pending') : ?>
            <div class="alert alert-warning alert-has-icon alert-dismissible fade show" role="alert">
                <div class="alert-icon"><i class="fas fa-exclamation-circle"></i></div>
                <div class="alert-body">
                    <div class="alert-title">Mohon Segera Dibayar !</div>

                    <ul>
                        <li>Untuk pembayaran dapat dibayar melalui nomor rekening / virtual account dibawah.</li>
                        <li>Untuk melihat batas waktu pembayaran dan tata cara pembayaran, klik tombol Lihat Instruksi </li>
                    </ul>


                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php elseif ($pembayaran['status_pembayaran'] == 'expire'): ?>
          <div class="alert alert-danger alert-has-icon alert-dismissible fade show" role="alert">
              <div class="alert-icon"><i class="fas fa-exclamation-circle"></i></div>
              <div class="alert-body">
                  <div class="alert-title">Pembayaran sudah kadaluarsa, silahkan pesan kembali!</div>

              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <?php endif ?>
        <div class="section-title">
          <h2>Daftar Pembayaran</h2>

        </div>

        <div class="row">
          <div class="col-md  align-items-stretch mt-4 mt-md-0">

            <table class="table table-striped table-bordered">
              <tr>
                <th colspan="2">Info Pembayaran</th>
              </tr>
              <tr>
                <td>Status Pembayaran</td>
                <td>
                  <?php if ($pembayaran['status_pembayaran'] == 'pending'): ?>
                    <button type="button" name="button" class="btn btn-warning btn-sm" disabled>Menunggu Pembayaran</button>
                  <?php elseif ($pembayaran['status_pembayaran'] == 'settlement'): ?>
                    <button type="button" name="button" class="btn btn-success btn-sm" disabled>Selesai</button>
                  <?php elseif ($pembayaran['status_pembayaran'] == 'expire'): ?>
                    <button type="button" name="button" class="btn btn-danger btn-sm" disabled>Kadaluarsa</button>
                  <?php endif; ?>
                  </td>
              </tr>
              <tr>
                <td>VA. Number</td>
                <td><?= $pembayaran['va_number'] ?></td>
              </tr><tr>
                <td>Status Pembayaran</td>
                <td><?= $pembayaran['tgl_pesan'] ?></td>
              </tr><tr>
                <td>Nama Bank</td>
                <td><?= $pembayaran['bank'] ?></td>
              </tr>
              <tr>
                <td>Total Bayar</td>
                <td align="right"><?= 'Rp. ' . number_format($pembayaran['total_bayar'], 0,',','.'); ?></td>
              </tr>
            </table>
            <a href="<?= base_url('home/pembayaran') ?>" class="btn btn-success">Kembali</a>
            <?php if ($pembayaran['status_pembayaran'] == 'pending'): ?>
              <a href="<?= $pembayaran['intruksi'] ?>" class="btn btn-primary">Lihat Intruksi</a>
            <?php endif; ?>

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
