<body class="g-sidenav-show  bg-gray-100">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                    <?php echo $judul; ?>
                </li>
            </ol>
            <h6 class="font-weight-bolder mb-0">
                <?php echo $judul; ?>
            </h6>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">

                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Form
                                <?php echo $judul; ?>
                            </h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <div class="card-body">
                                    <form action="<?= base_url('Prodi/update'); ?>" method="POST">
                                    <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                                        <div class="row">
                                            <div class="mb-3 col-6">
                                                <input type="text" class="form-control" placeholder="Nama Prodi"
                                                    name="nama_prodi" value="<?= $prodi['nama_prodi']; ?>">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <input type="text" class="form-control" placeholder="Ruangan"
                                                    name="ruangan" value="<?= $prodi['ruangan']; ?>">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Jurusan"
                                                name="jurusan" value="<?= $prodi['jurusan']; ?>">
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 col-6">
                                                <input type="text" class="form-control" placeholder="Akreditasi"
                                                    name="akreditasi" value="<?= $prodi['akreditasi']; ?>">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <input type="text" class="form-control" placeholder="Tahun Berdiri"
                                                    name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Output Lulusan"
                                                name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>">
                                        </div>


                                        <div class="text-end">
                                            <button type="submit" class="btn bg-gradient-primary my-4 mb-2"
                                                style="width: fit-content;">Update</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>