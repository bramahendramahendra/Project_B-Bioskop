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
							<h3>Tambahkan Data Jadwal Tayang</h3>
							<div class="form-group">
								<label for="inputStudio">Movie</label>
								<select name='movie' class="bootstrap-select form-control" id="select-movie" data-live-search="true" placeholder="Studio" required>
									<option value="">Please Select</option>
									<?php foreach ($movie as $value) : ?>
										<option value="<?= $value['idMovie']; ?>"> Movie : <?= $value['judul']; ?> </option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="form-group">
								<label for="inputStudio">Cinema</label>
								<select name='cinema' class="bootstrap-select form-control" id="select-cinema" data-live-search="true" placeholder="Studio" required>
									<option value="">Please Select</option>
									<?php foreach ($cinema as $value) : ?>
										<option 
										value="<?= $value['idCinema']; ?>"> Cinema : <?= $value['namaCinema']; ?> </option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="form-group">
								<label for="inputStudio">Studio</label>
								<select name='studio' class="bootstrap-select form-control" id="select-studio" data-live-search="true" placeholder="Studio" required>
									<option value="">Please Select</option>
									<?php foreach ($studio as $value) : ?>
										<option <?php echo $studio_selected == $value['idStudio'] ? 'selected="selected"' : '' ?> 
										class="<?php echo $value['idCinema'] ?>" value="<?= $value['idStudio']; ?>"> Cinema : <?= $value['kelas']; ?> </option>
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
