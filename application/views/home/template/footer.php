<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>waruwangi</span></strong>. 2021
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->

      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/lumia/assets') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/lumia/assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/lumia/assets') ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/lumia/assets') ?>/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('assets/lumia/assets') ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/lumia/assets') ?>/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url('assets/lumia/assets') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/lumia/assets') ?>/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url('assets/lumia/assets') ?>/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/lumia/assets') ?>/js/main.js"></script>
<script type="text/javascript">

$('#pay-button').click(function (event) {

  event.preventDefault();
  $(this).attr("disabled", "disabled");

  let nama = $('#nama').val();
  let total = $('#total').val();
  let no_hp = $('#no_hp').val();
  let email = $('#email').val();


$.ajax({
  url: '<?=site_url()?>/snap/token',
  data: {
    nama: nama,
    total: total,
    no_hp: no_hp,
    email : email
  },
  method: 'post',
  cache: false,

  success: function(data) {
    //location = data;

    console.log('token = '+data);

    var resultType = document.getElementById('result-type');
    var resultData = document.getElementById('result-data');

    function changeResult(type,data){
      $("#result-type").val(type);
      $("#result-data").val(JSON.stringify(data));
      //resultType.innerHTML = type;
      //resultData.innerHTML = JSON.stringify(data);
    }

    snap.pay(data, {

      onSuccess: function(result){
        changeResult('success', result);
        console.log(result.status_message);
        console.log(result);
        $("#payment-form").submit();
      },
      onPending: function(result){
        changeResult('pending', result);
        console.log(result.status_message);
        $("#payment-form").submit();
      },
      onError: function(result){
        changeResult('error', result);
        console.log(result.status_message);
        $("#payment-form").submit();
      }
    });
  }
});
});

</script>
</body>

</html>
