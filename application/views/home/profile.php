




  <main id="main" class="mt-4">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do" style="margin-top: 100px;">
      <div class="container">

        <div class="section-title">
          <h2>Pofile</h2>

        </div>

        <div class="row">




          <div class="col-md  align-items-stretch mt-4 mt-md-0">
            <form method="post" action="">
              <input type="hidden" name="id_pelanggan"  value="<?= $user['id_pelanggan'] ?>">
              <div class="form-group">
                <label for="exampleFormControlInput1">Nama Pelanggan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_pelanggan" value="<?= $user['nama_pelanggan'] ?>">
                <?= form_error('nama_pelanggan', '<small class="text-danger pl-3">', '</small>'); ?>

              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="<?= $user['email'] ?>" readonly>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">No Handphone</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="no_hp" value="<?= $user['no_hp'] ?>">
                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>

              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"><?= $user['alamat'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal lahir</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="tgl_lahir" value="<?= $user['tgl_lahir'] ?>">
                <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>

              </div>

              <button type="submit" name="ubah" class="btn btn-primary">Update</button>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
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
