<head!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->


    <h1 class="h3 mb-2 text-gray-800">Daftar siswa yanag telah transfer</h1>
    <p class="mb-4"></p>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>

      </div>
      <div class="card-body">
        <div class="table-responsive">

          <table class="mb-0 table table-striped" id="dataTable" width="100%" cellspacing="0">


              <?php
              foreach ($all as $key => $value) { ?>

                <tr>
                  <th>Nama</th>
                  <td><?= $value->NAMA ?></td>
                </tr>
                  <tr>
                  <th>Jenis kelamin</th>
                  <td><?= $value->JK ?></td>
                   </tr>
                   <tr>
                  <th>Paket les</th>
                  <td><?= $value->JENIS_PAKET ?></td>
                   </tr>
                   <tr>
                  <th>Foto bukti pembayaran</th>
                  <td><img src="<?= base_url('assets/img/profile/').$value->BUKTI_PEMBAYARAN ;?>" alt="<?= $value->BUKTI_PEMBAYARAN ?>"></td>
                   </tr>
                   <tr>
                       <th><h3 >sudah membayar</h3></th>
                       <td></td>
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
