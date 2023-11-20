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
									<form action="<?= base_url('Mahasiswa/update'); ?>" method="POST">
										<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
										<div class="row">
											<div class="mb-3 col-6">
												<input type="text" class="form-control" placeholder="Nama" name="nama"
													value="<?= $mahasiswa['nama']; ?>">
											</div>
											<div class="mb-3 col-6">
												<input type="text" class="form-control" placeholder="Nim" name="nim"
													value="<?= $mahasiswa['nim']; ?>">
											</div>
										</div>

										<div class="mb-3">
											<input type="email" class="form-control" placeholder="Email" name="email"
												value="<?= $mahasiswa['email']; ?>">
										</div>

										<div class="row">
											<div class="mb-3 col-6">
												<select name="jenis_kelamin" id="jenis_kelamin"
													placeholder="Jenis Kelamin" class="form-select">

													<option value="Laki-laki" <?php if($mahasiswa['jenis_kelamin'] == "Laki-laki") {
                                                        echo "selected";
                                                    }?>>Laki-laki</option>
													<option value="Perempuan" <?php if($mahasiswa['jenis_kelamin'] == "Perempuan") {
                                                        echo "selected";
                                                    }?>>Perempuan</option>
												</select>

											</div>
											<div class="mb-3 col-6">
												<select name="prodi" id="prodi" placeholder="prodi" class="form-select">
													<?php foreach ($prodi as $p) : ?>
													<option value="<?= $p['id'];?>" <?php if($mahasiswa['prodi'] == $p['id']) {
                                                        echo "selected";
                                                    }?>><?= $p['nama_prodi'];?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>

										<div class="mb-3">
											<input type="text" class="form-control" placeholder="Asal Sekolah"
												name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>">
										</div>



										<div class="row">
											<div class="mb-3 col-6">
												<input type="text" class="form-control" placeholder="No Hp" name="no_hp"
													value="<?= $mahasiswa['no_hp']; ?>">
											</div>
											<div class="mb-3 col-6">
												<input type="text" class="form-control" placeholder="Alamat"
													name="alamat" value="<?= $mahasiswa['alamat']; ?>">
											</div>
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
