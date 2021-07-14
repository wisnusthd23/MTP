<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html" class="header-text"><b>SKS</b>UAD</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Reset Password</p>
            <!-- <?= $this->session->flashdata('changepassword'); ?> -->
            <?= $this->session->flashdata('changepassword'); ?>
            <form action="<?= base_url('pelanggan/changePassword'); ?>" method="post">
                <div class="input-group mb-1">
                    <input type="password" class="form-control" placeholder="Password Baru" id="password1" name="password1">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
                <div class="input-group mb-1">
                    <input type="password" class="form-control" placeholder="Ulangi Password" id="password2" name="password2">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password2', '<small class="text-danger pl-1">', '</small>'); ?>
                <div class="row">
                    <div class="col-6">
                        <div class="icheck-primary">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="<?= base_url('pelanggan') ?>">&larr; Kembali ke Halaman Login!</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->