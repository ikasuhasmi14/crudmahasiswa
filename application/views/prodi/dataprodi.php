


<body class="g-sidenav-show  bg-gray-100">

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
     <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><?php echo $judul; ?></li>
          </ol>
          <h6 class="font-weight-bolder mb-0"><?php echo $judul; ?></h6>
        </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
     
    <div class="row">
        <div class="col-12">
        <div class="col text-start">
                      <a class="btn bg-gradient-primary mb-0" href="<?= site_url('Prodi/tambah')?>"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah <?php echo $judul; ?> </a>
                    </div>
                    <br>
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tabel <?php echo $judul; ?></h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Prodi</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ruangan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jurusan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Akreditasi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahun Berdiri</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Output Lulusan</th>
                      
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($prodi as $pro) : ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $pro['nama_prodi']?></h6>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= $pro['ruangan']?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold mb-0"><?= $pro['jurusan']?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $pro['akreditasi']?></span>
                      </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $pro['tahun_berdiri']?></span>
                      </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $pro['output_lulusan']?></span>
                      </td>
                      
                      <td class="align-middle">
                        <a href="<?= base_url('Prodi/detail/').$pro['id']; ?>" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                          Detail
                        </a>
                        <a href="<?= base_url('Prodi/edit/').$pro['id']; ?>" class="badge badge-sm bg-gradient-warning" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="<?= base_url('Prodi/hapus/').$pro['id']; ?>" class="badge badge-sm bg-gradient-danger" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>
                   <?php $i++; ?>
                   <?php endforeach ; ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

    </div>
     
    
    