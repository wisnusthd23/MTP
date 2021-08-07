<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Resep Masuk</h3>

            <div class="card-tools">

            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }


            ?>
            <table class="table table-bordered" id="example1">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($resep_admin as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->email ?></td>
                            <td class="text-center"><img src="<?= base_url('assets/resep/' . $value->resep) ?>" width="100px"></td>
                            <td class="text-center">
                                <!-- <a target="__blank" href="<?= base_url('assets/resep/' . $value->resep) ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Lihat Resep</a> -->
                                <button class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#cek<?= $value->id_resep ?>"><i class="fas fa-eye"></i> Resep Obat</button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_resep ?>"><i class="fas fa-trash"></i></button>

                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<?php foreach ($resep_admin as $key => $value) { ?>

    <!-- modal cek bukti pembayaran -->
    <div class="modal fade" id="cek<?= $value->id_resep ?>">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h4 class="modal-title"><?= $value->email ?></h4> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <table class="table">
                        <tr>
                            <th>Email</th>
                            <th>:</th>
                            <td><?= $value->email ?></td>
                        </tr>
                    </table>

                    <img class="img-fluid pad" src="<?= base_url('assets/resep/' . $value->resep) ?>" alt="">

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>


<?php foreach ($resep_admin as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_resep ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Resep dari <?= $value->email ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <h5>Apakah Anda Yakin Ingin Menghapus Data Ini...?</h5>


                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('admin/resep_masuk_delete/' . $value->id_resep) ?>" class="btn btn-primary">Delete</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>