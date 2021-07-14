<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url() ?>nu/images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
                <h1 class="mb-0 bread">Resep Obat</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Kami akan menghubungi anda melalui email, pastikan email anda aktif! Terimakasih! -->
                    <?php
                    //notifikasi form kosong
                    //             echo validation_errors('<div class="alert alert-danger alert-dismissible">
                    // <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    // <h5><i class="icon fas fa-info"></i>', '</h5> </div>');
                    //notifikasi gagal upload gambar
                    if ($this->session->flashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i>';
                        echo $this->session->flashdata('pesan');
                        echo '</h5></div>';
                    }


                    if (isset($error_upload)) {
                        echo '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-info"></i>' . $error_upload . '</h5> </div>';
                    }
                    echo form_open_multipart('resep') ?>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label>Resep Obat</label>
                        <input type="file" name="resep" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5"></div>