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
						<a class="btn btn-success" href="<?= site_url('Admin/Genre/add'); ?>">Add Genre</a>
					</div>
					
				</div>
			</div>
			<br>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Genre</th>
							
							<th scope="col">Details</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($genre as $value) { ?>
							<tr>
								<th scope="row"><?= $no++; ?></th>
								<td><?= $value['genre']; ?></td>
								<td>
									<a href="<?= site_url('Admin/Genre/edit/'.$value['id']); ?>" class="btn btn-warning">Edit</a>
									<a href="<?= site_url('Admin/Genre/delete/'.$value['id']); ?>" class="btn btn-danger">Delete</a>
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

<!-- MODAL  -->
<!-- SIDEBAR  -->
<?php $this->load->view('Admin/include/Modal_V.php') ?>
