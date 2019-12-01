<head!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->


    <h1 class="h3 mb-2 text-gray-800">Data Siswa Les</h1>
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
                <th>No.Pendaftaran</th>
                <th>Jenis kelamin</th>
                <th>Paket les</th>
                <th>Jenjang</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>N.Bapak</th>
                <th>N.Ibu</th>
                <th>No.Hp</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php
              foreach ($all as $key => $value) { ?>
                <tr>
                  <td><?= $value->ID_DAFTAR ?></td>
                  <td><?= $value->JK ?></td>
                  <td><?= $value->JENIS_PAKET ?></td>
                  <td><?= $value->JENJANG ?></td>
                  <td><?= $value->NAMA ?></td>
                  <td><?= $value->ALAMAT ?></td>
                  <td><?= $value->UMUR ?></td>
                  <td><?= $value->NAMA_BAPAK ?></td>
                  <td><?= $value->NAMA_IBU ?></td>
                  <td><?= $value->NO_HP ?></td>
                  <td> <a class="btn btn-primary" href="">Edit</a>
                  </td>
                  <td><a class="btn btn-danger" href="">Delete</a></td>
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