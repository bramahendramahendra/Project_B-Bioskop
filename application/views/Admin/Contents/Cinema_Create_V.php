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
						<form action="<?= site_url('Admin/Cinema/create'); ?>" method="post" enctype="multipart/form-data">
							<h3>Tambahkan Data Cinema</h3>
							<div class="form-group">
								<label for="inputNamaCinema">Nama Cinema</label>
								<input type="text" name="nama_cinema" class="form-control" id="inputNamaCinema" placeholder="Nama Cinema">
							</div>
							<div class="form-group">
								<label for="inputLokasi">Lokasi</label>
								<textarea class="form-control" name="lokasi" id="textareaLokasi" rows="3" placeholder="Lokasi"></textarea>
							</div>

							<div class="form-group">
								<label for="inputStudio">Studio</label>
								<select name='studio[]' class="bootstrap-select form-control" multiple data-live-search="true" placeholder="Studio">
									<?php foreach ($studio as $value) : ?>
										<option value="<?= $value['idStudio']; ?>"> Nomor Studio : <?= $value['nomorStudio']; ?> - Kelas : <?= $value['kelas']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>

							<br><br>
							<a href="<?= site_url('Admin/Cinema') ?>" class="btn btn-warning">Back</a>
							<button type="submit" class="btn btn-primary">Save</button>
						</form>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
<br><br>
