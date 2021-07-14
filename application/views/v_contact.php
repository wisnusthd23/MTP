<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url() ?>nu/images/bg_1.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
        <h1 class="mb-0 bread">Contact us</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Email:</span>
            <a href="mailto:info@yoursite.com">apotekeisda24@gmail.com</a>
          </p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Website</span> <a href="#">yoursite.com</a></p>
        </div>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-12">
        <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
          <strong>Pesan Anda!</strong> Sudah di Kami Terima, Terimakasih!
        </div>
        <form action="#" name="submit-to-google-sheet" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea cols="30" rows="7" class="form-control" name="pesan" placeholder="Pesan"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary py-3 px-5 btn-kirim">Kirim</button>
          </div>
          <button class="btn btn-primary btn-loading py-3 px-5 d-none" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Loading...
          </button>
        </form>

      </div>
    </div>
  </div>
</section>