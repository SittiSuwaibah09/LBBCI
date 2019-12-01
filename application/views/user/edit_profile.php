<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>
    <form method="POST" action="<?= base_url('user/editprofile') ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $user_edit['NAME'] ?>">
            <small id="nameHelp" class="form-text text-muted">Isikan Nama Baru!</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?= $user_edit['EMAIL'] ?>">
            <small id="emailHelp" class="form-text text-muted">Isikan email baru!</small>
        </div>


        <div class="form-group">
            <label for="exampleFormControlFile1">Edit Foto Profile</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->