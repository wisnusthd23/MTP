<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Apotek</b>.......</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register</p>

            <form action="<?= base_url('pelanggan/registrasi') ?>" method="post">
                <div class="input-group mb-1">
                    <input type="text" class="form-control" placeholder="Full name" id="name" name="name" value="<?= set_value('name'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                <div class="input-group mb-1">
                    <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                <div class="input-group mb-1">
                    <input type="password" class="form-control" placeholder="Password" id="password1" name="password1">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Retype password" id="password2" name="password2">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4 mt-2">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="<?= base_url('auth'); ?>" class="text-center">Saya Sudah Punya Akun</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->