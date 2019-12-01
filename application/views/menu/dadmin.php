<head!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <p class="mb-4"></p>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($siswa->num_rows() > 0) : ?>
                                <?php foreach ($siswa->result() as $p) : ?>
                                    <tr>
                                        <td><?php echo $p->NO ?></td>
                                        <td><?php echo $p->NAMA_ADMIN ?></td>
                                        <td><?php echo $p->ALAMAT_ADMIN ?></td>
                                        <td><?php echo $p->NOHP_ADMIN ?></td>
                                        <td><?php echo $p->EMAIL_ADMIN ?></td>
                                        <td><?php echo $p->ID_JK ?></td>
                                        <td> <a class="btn btn-primary" href="">Edit</a>
                                        </td>
                                        <td><a class="btn btn-danger" href="">Delete</a></td>
                                    </tr>
                                <?php endforeach; ?>

                            <?php endif; ?>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->