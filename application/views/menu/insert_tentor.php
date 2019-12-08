<!-- Begin Page Content -->
<div class="col-sm-10 container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('Admin/daftartentor'); ?>" method="POST">
        <div class="">
            <br>
            <h2 align="center">Form Input Tentor</h2>
            <br>
        </div>
        <div class="form-group row">
            <label for="inputNama" class="col-sm-3 col-form-label">Nama Tentor</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat Tentor</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Keahlian</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="ahli" name="ahli" placeholder="Nama Ibu">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">No HP</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-7">
                <select name="jk" id="jk" class="form-control">
                    <option selected>Pilih Jenis Kelamin</option>
                    <?php foreach ($jk as $key => $value) { ?>
                        <option value="<?= $value->ID_JK ?>">
                            <?= $value->JK ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-10">
                <button class="btn btn-primary">INPUT</button>
            </div>
        </div>
    </form>
</div>
</div>