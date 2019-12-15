<head!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->


    <h1 class="h3 mb-2 text-gray-800">Data tentor</h1>
    <p class="mb-4"></p>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" id="input" class="form-control bg-light border-0 small" placeholder="Search for..." onkeyup='searchTable()' aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button style="background-color:#0C9A9C;" class="btn btn-primary" type="button">
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
                <th>Id Tentor</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Keahlian</th>
                <th>No. Hp</th>
                <th>Jenis kelamin</th>
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

                </tr>
              <?php } ?>
            </tbody>
          </table>
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
