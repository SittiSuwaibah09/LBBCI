<!-- Begin Page Content -->
<div class="col-sm-10 container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('user/bayar'); ?>" method="POST">
        <div class="">
            <br>
            <h2 align="center">Form Pembayaran Les LBBCI</h2>
            <br>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Pilih Nama</label>
            <div class="col-sm-7">
                <select name="nama" id="nama" class="form-control">
                    <option selected>Pilih Nama</option>
                    <?php foreach ($nama as $key => $value) { ?>
                        <option value="<?= $value->ID_DAFTAR ?>">
                            <?= $value->NAMA ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Bukti Pembayaran</label>
            <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Bayar</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->