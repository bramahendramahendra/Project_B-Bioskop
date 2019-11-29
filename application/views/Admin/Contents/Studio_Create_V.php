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
						<form action="<?= site_url('Admin/Studio/create'); ?>" method="post" enctype="multipart/form-data">
							<h3>Tambahkan Data Studio</h3>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="inputNomorStudio">Nomor Studio</label>
									<input type="text" name="nomor_studio" class="form-control" id="inputNomorStudio" placeholder="Nomor Studio">
								</div>
								<div class="form-group col-md-4">
									<label for="inputKelas">Kelas</label>
									<input type="text" name="kelas" class="form-control" id="inputKelas" placeholder="Kelas">
								</div>
								<div class="form-group col-md-4">
									<label for="inputHarga">Harga</label>
									<input type="text" name="harga" class="form-control" id="inputHarga" placeholder="Harga">
								</div>
							</div>

							<div class="form-group">
								<label for="inputKategori">Seat</label>
							</div>
<!-- 
							<label class="custom-checkbox-brm">One
								<input type="checkbox" checked="checked">
								<span class="checkmark-brm"></span>
							</label>
							<label class="custom-checkbox-brm">Two
								<input type="checkbox">
								<span class="checkmark-brm"></span>
							</label>
							<label class="custom-checkbox-brm">Three
								<input type="checkbox">
								<span class="checkmark-brm"></span>
							</label>
							<label class="custom-checkbox-brm">Four
								<input type="checkbox">
								<span class="checkmark-brm"></span>
							</label> -->



							<div class="custom-control custom-switch">
								<?php
								$huruf = 'A';
								$nomor = 1;
								$bool = FALSE;
								while ($huruf <> 'S') {
									while ($nomor <= 50) {
										foreach ($seat as $value) :
											if ($huruf . $nomor == $value['nomorSeat']) {
												$bool = TRUE;
												?>
												<label class="custom-checkbox-brm"><?= $value['nomorSeat'] ?>
													<input type="checkbox" value="<?= $value['idSeat'] ?>" name="seat[]">
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

								<!-- <div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
											<label class="form-check-label" for="inlineCheckbox2"><? //= $value['nomorSeat']; 
																									?></label>
										</div> -->
								<?php  ?>
							</div>

							<br><br>
							<a href="<?= site_url('Admin/Studio') ?>" class="btn btn-warning">Back</a>
							<button type="submit" class="btn btn-primary">Save</button>
						</form>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
<br><br>
