<!-- NAVBAR  -->
<?php $this->load->view('Admin/include/Navbar_V.php') ?>

<div class="container-fluid">
	<div class="row">
		<!-- SIDEBAR  -->
		<?php $this->load->view('Admin/include/Sidebar_V.php') ?>

		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
			<!-- TITLE  -->
			<?php $this->load->view('Admin/include/Title_V.php') ?>

			<div class="container">
				<div class="row">
					<div class="col-10"></div>
					<div class="col-2">
						<a class="btn btn-success" href="<?= site_url('Admin/Film/add'); ?>">Add Movie</a>
					</div>

				</div>
			</div>
			<br>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Judul</th>
							<th scope="col">Tanggal Rilis</th>
							<th scope="col">Durasi</th>
							<th scope="col">Genre</th>
							<th scope="col">Rating</th>
							<th scope="col">Details</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($film as $value) { ?>
							<tr>
								<th scope="row"><?= $no++; ?></th>
								<td><?= $value['judul']; ?></td>
								<td><?= $value['tanggal_rilis']; ?></td>
								<td><?= $value['durasi']; ?></td>
								<td>
									<?php foreach ($movie_genre as $value1) {
											if ($value1['movie'] == $value['genre']) {
												foreach ($genre as $value2) :
													if ($value2['id'] == $value1['genre']) {
														echo $value2['genre'];
														echo ' | ';
													}
												endforeach;
											}
										} ?>
								</td>
								<td><?= $value['rating']; ?></td>
								<td>
									<a href="<?php echo site_url('Admin/Film/details/' . $value['idMovie']); ?>" class="btn btn-info">Details</a>
									<!-- <button type="button" class="btn btn-danger">Delete</button> -->
								</td>
							</tr>
						<?php } ?>
						<!-- <tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
						</tr> -->
					</tbody>
				</table>
			</div>
		</main>
	</div>
</div>
