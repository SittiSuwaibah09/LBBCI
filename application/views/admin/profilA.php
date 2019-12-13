<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/') . $user['IMAGE']; ?>" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">MY PROFILE</h5>
          <p class="card-text">Nama :<?= $user['NAME']; ?></p>
          <p class="card-text">Email :<?= $user['EMAIL']; ?></p>

        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-primary text-uppercase mb-4">Cek Data Peserta</div>
              <div class="text-xs font-weight-bold text-gray-800"><a class="nav-link" href="<?= base_url('Menu/index'); ?>">View >>></a> </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-success text-uppercase mb-4">Cek Data Admin</div>
              <div class="text-xs font-weight-bold text-gray-800"><a class="nav-link" href="<?= base_url('Menu/dataadmin'); ?>">View >>></a></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-info text-uppercase mb-4">Cek Data Tentor</div>
              <div class="text-xs font-weight-bold text-gray-800"><a class="nav-link" href="<?= base_url('Menu/gettentor'); ?>">View >>></a></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>


<!-- End of Main Content -->
