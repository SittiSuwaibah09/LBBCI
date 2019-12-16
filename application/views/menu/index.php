<head!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->


    <h1 class="h3 mb-2 text-gray-800">Data Siswa Les</h1>
    <p class="mb-4"></p>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" id="input" class="form-control bg-light border-0 small" placeholder="Search for..." onkeyup='searchTable()' aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button style="background-color: #6B8E23 ;background-image: linear-gradient(180deg,#6B8E23 10%,#6B8E23 100%);" class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>

        </form>

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
                <th class="text-center" colspan="3">Action</th>
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
                  <td> <a class="btn btn-primary" href="hedit/<?= $value->ID_DAFTAR ?>">Edit</a>
                  </td>
                  <td><a class="btn btn-danger" href="delete/<?= $value->ID_DAFTAR ?>">Delete</a></td>
                </tr>
              <?php } ?>
            </tbody>
            <script>
function searchTable() {
    var input;
    var saring;
    var status;
    var tbody;
    var tr;
    var td;
    var i;
    var j;
    input = document.getElementById("input");
    saring = input.value.toUpperCase();
    tbody = document.getElementsByTagName("tbody")[0];;
    tr = tbody.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
                status = true;
            }
        }
        if (status) {
            tr[i].style.display = "";
            status = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>
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
