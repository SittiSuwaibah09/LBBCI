<head!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->


    <h1 class="h3 mb-2 text-gray-800">Data Tentor LBBCI</h1>
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
                <th>Id Tentor</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Keahlian</th>
                <th>No. Hp</th>
                <th>Jenis kelamin</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php
              foreach ($all as $key => $value) { ?>
                <tr>
                  <td><?= $value->ID_TENTOR ?></td>
                  <td><?= $value->NAMA_TENTOR ?></td>
                  <td><?= $value->ALAMAT_TENTOR ?></td>
                  <td><?= $value->KEAHLIAN ?></td>
                  <td><?= $value->NOHP_TENTOR ?></td>
                  <td><?= $value->JK ?></td>
                  <td> <a class="btn btn-primary" href="tedit/<?= $value->ID_TENTOR ?>">Edit</a>
                  </td>
                  <td><a class="btn btn-danger" href="deleteT/<?= $value->ID_TENTOR ?>">Delete</a></td>
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