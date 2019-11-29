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
						<a class="btn btn-success" href="<?= site_url('Admin/Studio/add'); ?>">Add Studio</a>
					</div>

				</div>
			</div>
			<br>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">idStudio</th>
							<th scope="col">Nomor Studio</th>
							<th scope="col">Kelas</th>
							<th scope="col">Harga</th>
							<th scope="col">Details</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($studio as $value) { ?>
							<tr>
								<th scope="row"><?= $no++; ?></th>
								<td><?= $value['idStudio']; ?></td>
								<td><?= $value['nomorStudio']; ?></td>
								<td><?= $value['kelas']; ?></td>
								<td><?= $value['harga']; ?></td>
								<td>
									<a href="<?php echo site_url('Admin/Studio/details/' . $value['id']); ?>" class="btn btn-info">Details</a>
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
