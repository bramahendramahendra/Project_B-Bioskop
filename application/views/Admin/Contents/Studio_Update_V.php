<!-- NAVBAR  -->
<?php $this->load->view('Admin/include/Navbar_V.php') ?>

<div class="container-fluid">
	<div class="row">
		<!-- SIDEBAR  -->
		<?php $this->load->view('Admin/include/Sidebar_V.php') ?>

		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
			<!-- TITLE  -->
			<?php $this->load->view('Admin/include/Title_V.php') ?>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<form action="<?= site_url('Admin/Studio/update/' . $studio->id); ?>" method="post" enctype="multipart/form-data">
							<h3>Edit Data Studio</h3>
							
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="inputID">ID</label>
									<input readonly disabled value="<?= $studio->id; ?>" type="text" name="judul" class="form-control" id="inputJudul" placeholder="Judul">
								</div>
								<div class="form-group col-md-4">
									<label for="inputJudul">ID Studio</label>
									<input readonly disabled value="<?= $studio->idStudio; ?>" type="text" name="judul" class="form-control" id="inputJudul" placeholder="Judul">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="inputJudul">Nomor Studio</label>
									<input value="<?= $studio->nomorStudio; ?>" type="text" name="nomor_studio" class="form-control" id="inputJudul" placeholder="Judul">
								</div>
								<div class="form-group col-md-4">
									<label for="inputDurasi">Kelas</label>
									<input value="<?= $studio->kelas; ?>" type="text" name="kelas" class="form-control" id="inputDurasi" placeholder="Durasi">
								</div>
								<div class="form-group col-md-4">
									<label for="inputKategori">Harga</label>
									<input value="<?= $studio->harga; ?>" type="text" name="harga" class="form-control" id="inputKategori" placeholder="Kategori">
								</div>
							</div>

							<div class="form-group">
								<label for="inputKategori">Seat</label>
							</div>

							<div class="custom-control custom-switch">
								<?php
								$huruf = 'A';
								$nomor = 1;
								$bool = FALSE;
								while ($huruf <> 'S') {
									while ($nomor <= 50) {
										foreach ($all_seat as $value) :
											if ($huruf . $nomor == $value['nomorSeat']) {
												$bool = TRUE;
												?>
												<label class="custom-checkbox-brm"><?= $value['nomorSeat'] ?>
													<input type="checkbox" value="<?= $value['idSeat'] ?>" name="seat[]" <?php foreach ($seat as $value1) : echo $value['nomorSeat'] == $value1['seat'] ? "checked" : null; endforeach; ?>>
													<span class="checkmark-brm"></span>
												</label>
								<?php
											}
										endforeach;
										$nomor++;
									}
									if ($bool == TRUE) {
										echo '<br>';
										$bool = FALSE;
									}
									$huruf = chr(ord($huruf) + 1);
									$nomor = 1;
								}

								?>
							</div>

							<br><br>
							<a href="<?= site_url('Admin/Studio/details/' . $studio->id) ?>" class="btn btn-warning">Back</a>
							<button type="submit" class="btn btn-primary">Save</button>
						</form>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
<br><br>
