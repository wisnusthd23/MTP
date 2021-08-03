<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row">
      <div class="mouse">
        <a href="#" class="mouse-icon">
          <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
        </a>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Vegefoods</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="https://www.instagram.com/inisaya24/"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="https://twitter.com/inisaya24"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://facebook.com/inisaya24"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div style="margin-left: 9rem !important;" class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Menu</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Shop</a></li>
            <li><a href="#" class="py-2 d-block">About</a></li>
            <li><a href="#" class="py-2 d-block">Journal</a></li>
            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md">
        <div class="ftco-footer-widget ml-5 mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">apotekeisda24@gmail.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved <i class="icon-heart color-danger" aria-hidden="true"></i> by Apotek Eisda
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>


<script src="  <?= base_url() ?>nu/js/jquery.min.js"></script>
<script src="  <?= base_url() ?>nu/js/jquery-migrate-3.0.1.min.js"></script>
<script src="  <?= base_url() ?>nu/js/popper.min.js"></script>
<script src="  <?= base_url() ?>nu/js/bootstrap.min.js"></script>
<script src="  <?= base_url() ?>nu/js/jquery.easing.1.3.js"></script>
<script src="  <?= base_url() ?>nu/js/jquery.waypoints.min.js"></script>
<script src="  <?= base_url() ?>nu/js/jquery.stellar.min.js"></script>
<script src="  <?= base_url() ?>nu/js/owl.carousel.min.js"></script>
<script src="  <?= base_url() ?>nu/js/jquery.magnific-popup.min.js"></script>
<script src="  <?= base_url() ?>nu/js/aos.js"></script>
<script src="  <?= base_url() ?>nu/js/jquery.animateNumber.min.js"></script>
<script src="  <?= base_url() ?>nu/js/bootstrap-datepicker.js"></script>
<script src="  <?= base_url() ?>nu/js/scrollax.min.js"></script>
<script src="  <?= base_url() ?>nu/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="  <?= base_url() ?>nu/js/google-map.js"></script>
<script src="  <?= base_url() ?>nu/js/main.js"></script>
<script src="<?= base_url() ?>nu/js/sweetalert2.min.js"></script>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbwl3F61QNccqCXwtxQZRrwQeOxWSIAE8reWy3lKL8nwBZHML4rOSrOInCEvAtYn54KGHA/exec'
  const form = document.forms['submit-to-google-sheet']
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert');

  form.addEventListener('submit', e => {
    e.preventDefault();
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    fetch(scriptURL, {
        method: 'POST',
        body: new FormData(form)
      })
      .then(response => {
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        myAlert.classList.toggle('d-none');
        form.reset();
        console.log('Success!', response)
      })
      .catch(error => console.error('Error!', error.message));
  })
</script>
<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Berhasil Ditambahkan ke Keranjang'
      })
    });
  });
</script>
<script>
  $(document).ready(function() {
    //masukkan data ke selec provinsi
    $.ajax({
      type: "POST",
      url: "<?= base_url('rajaongkir/provinsi') ?>",
      success: function(hasil_provinsi) {
        //console.log(hasil_provinsi);
        $("select[name=provinsi]").html(hasil_provinsi);
      }
    });

    //masukkan data ke selec kota
    $("select[name=provinsi]").on("change", function() {
      var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
      $.ajax({
        type: "POST",
        url: "<?= base_url('rajaongkir/kota') ?>",
        data: 'id_provinsi=' + id_provinsi_terpilih,
        success: function(hasil_kota) {
          $("select[name=kota]").html(hasil_kota);
        }
      });
    });

    $("select[name=kota]").on("change", function() {
      $.ajax({
        type: "POST",
        url: "<?= base_url('rajaongkir/expedisi') ?>",
        success: function(hasil_expedisi) {
          $("select[name=expedisi]").html(hasil_expedisi);
        }
      });
    });

    //mendapatkan data paket
    $("select[name=expedisi]").on("change", function() {
      //mendapatkan expedisi terpilih
      var expedisi_terpilih = $("select[name=expedisi]").val()
      // mendapatkan id kota tujuan terpilih
      var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');
      //mengambil data ongkos kirim
      var total_berat = <?= $tot_berat ?>;

      $.ajax({
        type: "POST",
        url: "<?= base_url('rajaongkir/paket') ?>",
        data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + total_berat,
        success: function(hasil_paket) {
          $("select[name=paket]").html(hasil_paket);
        }
      });
    });

    //
    $("select[name=paket]").on("change", function() {
      //menampilkan ongkir
      var dataongkir = $("option:selected", this).attr('ongkir');
      var reverse = dataongkir.toString().split('').reverse().join(''),
        ribuan_ongkir = reverse.match(/\d{1,3}/g);
      ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');

      $("#ongkir").html("Rp. " + ribuan_ongkir)
      //menghitung totol Bayar
      var data_total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
      var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
        ribuan_total_bayar = reverse2.match(/\d{1,3}/g);
      ribuan_total_bayar = ribuan_total_bayar.join(',').split('').reverse().join('');
      $("#total_bayar").html("Rp. " + ribuan_total_bayar);

      //estimasi dan ongkir
      var estimasi = $("option:selected", this).attr('estimasi');
      $("input[name=estimasi]").val(estimasi);
      $("input[name=ongkir]").val(dataongkir);
      $("input[name=total_bayar]").val(data_total_bayar);
    });




  });
</script>
</body>

</html>