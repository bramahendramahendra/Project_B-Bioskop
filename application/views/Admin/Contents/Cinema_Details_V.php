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
					<div class="col-12">
						<h3>Details Cinema</h3>
					</div>
				</div>
			</div>
			<br>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col"><?= $cinema->idCinema; ?></th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<th scope="row">Nomor Cinema</th>
							<td><?= $cinema->namaCinema; ?></td>
						</tr>
						<tr>
							<th scope="row">Lokasi</th>
							<td><?= $cinema->lokasi; ?></td>
						</tr>
						<tr>
							<th scope="row">Studio</th>			
							<td><?php foreach ($studio as $value) : echo 'Nomor Studio : '.$value['nomorStudio'] . ' - Kelas : '.$value['kelas'].' - Harga : '.$value['harga'].' <br> ';
								endforeach; ?></td>
							</td>
						</tr>

					</tbody>

				</table>
				<div class="container">
					<div class="row">
						<div class="col-10">
							<a href="<?= site_url('Admin/Cinema') ?>" class="btn btn-primary float-left">Back</a>
						</div>
						<div class="col-1">
							<a href="<?= site_url('Admin/Cinema/Edit/' . $cinema->id) ?>" class="btn btn-warning float-right">Edit</a>
						</div>
						<div class="col-1">
							<a href="<?= site_url('Admin/Cinema/Delete/' . $cinema->id) ?>" class="btn btn-danger float-right">Delete</a>
						</div>
					</div>
				</div>

				<br><br>
			</div>
		</main>
	</div>
</div>
