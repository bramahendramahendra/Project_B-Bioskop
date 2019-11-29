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
							<a class="btn btn-success" href="<?= site_url('Admin/Cinema/add'); ?>">Add Cinema</a>
						</div>

					</div>
				</div>
				<br>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">ID Cinema</th>
								<th scope="col">Nama Cinema</th>
								<th scope="col">Lokasi</th>
								<!-- <th scope="col">Kelas</th> -->
								<th scope="col">Details</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($cinema as $value) { ?>
								<tr>
									<th scope="row"><?= $no++; ?></th>
									<td><?= $value['idCinema']; ?></td>
									<td><?= $value['namaCinema']; ?></td>
									<td><?= $value['lokasi']; ?></td>

									<td>

										<a href="<?php echo site_url('Admin/cinema/details/' . $value['id']); ?>" class="btn btn-info">Details</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</main>
		</div>
	</div>
