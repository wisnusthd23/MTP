<div class="container mt-5">
    <div class="row">
        <div class="col-md-6" style="align-self: center;">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/profile/') . $user['foto']; ?>" class="card-img" style=" padding-top: 10px;
                                                                                                                padding-bottom: 10px;
                                                                                                                margin-left: 5px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['name']; ?></h5>
                            <p class="card-text"><?= $user['email']; ?></p>
                            <p class="card-text"><small class="text-muted">Bergabung Sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4>Form Ubah Password</h4>
            <!-- <?= $this->session->flashdata('ubahpassword'); ?> -->

            <?php

            if ($this->session->flashdata('ubahpassword')) {
                echo $this->session->flashdata('ubahpassword');
            }
            ?>


            <form action="ubahPassword" method="post">
                <div class="form-group">
                    <label for="current_password">Password Sekarang</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password1">Password Baru</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password2">Ulangi Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="mb-5"></div>