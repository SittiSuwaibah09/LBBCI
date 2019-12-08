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
                                <th>Name</th>
                                <th>Email</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all as $key => $value) { ?>
                                    <tr>
                                        <td><?= $value->NO ?></td>
                                        <td><?= $value->NAME ?></td>
                                        <td><?= $value->EMAIL ?></td>
                                        <td> <a class="btn btn-primary" href="updateadmin/<?= $value->NO ?>">Edit</a>
                                        
                                        <a class="btn btn-danger" href="delete_admin/<?= $value->NO ?>">Delete</a></td>
                                    </tr>
            
                            </tr>
                            <?php } ?>
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