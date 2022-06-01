



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>WaruWangi</span></h1>
      <h2>Wisata Keren & Kekinian</h2>

      <?php if (!$this->session->userdata('email')): ?>
        <a href="<?= base_url('home/login'); ?>" class="btn-get-started scrollto">Beli Paket</a>
      <?php else: ?>
        <a href="<?= base_url('home/pesan'); ?>" class="btn-get-started scrollto">Beli Paket</a>
      <?php endif; ?>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Paket Waruwangi</h2>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tree"></i></div>
              <h4><a href="">Camping Ground</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-users"></i></div>
              <h4><a href="">Family Gathering</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-home"></i></div>
              <h4><a href="">Paket Keluarga</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?= base_url() ?>/assets/img/waru/22.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About</h3>
            <p>
              Bukit Waruwangi menjadi salah satu tempat wisata favorit di Banten. Apalagi karena lokasinya tak jauh dari ibu kota Jakarta dan Kota Serang, Banten. Ada beragam fasilitas di tempat ini, sebut saja seperti penginapan sampai kolam renang. Pengunjung Bukit Waruwangi pun dapat melakukan banyak aktivitas seperti :
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Camping </li>
              <li><i class="bx bx-check-double"></i> Berenang </li>
              <li><i class="bx bx-check-double"></i> Cafe nongkrong </li>
              <li><i class="bx bx-check-double"></i> Flying Fox </li>


            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Galeri</h2>

        </div>


        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?= base_url() ?>/assets/img/waru/21.jpg" class="img-fluid" alt="">
                <a href="<?= base_url() ?>/assets/img/waru/11.jpg" data-gall="portfolioGallery" class="link-preview venobox" title="Preview"><i class="bx bx-plus text-center"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4>Camping</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?= base_url() ?>/assets/img/waru/2.jpg" class="img-fluid" alt="">
                <a href="<?= base_url() ?>/assets/img/waru/2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kolam Renang</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?= base_url() ?>assets/img/waru/241.jpg" class="img-fluid" alt="">
                <a href="<?= base_url() ?>assets/img/waru/24.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Cafe</a></h4>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Portfolio Section -->



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
