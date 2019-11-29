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
						<h3>Details Film</h3>
					</div>
				</div>
			</div>
			<br>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col"><?= $studio->id; ?></th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<th scope="row">Nomor Studio</th>
							<td><?= $studio->nomorStudio; ?></td>
						</tr>
						<tr>
							<th scope="row">Kelas</th>
							<td><?= $studio->kelas; ?></td>
						</tr>
						<tr>
							<th scope="row">Harga</th>
							<td><?= $studio->harga; ?></td>
						</tr>
						<tr>
							<th scope="row">Seat</th>
							<td><?php
								$huruf = 'A';
								$nomor = 1;
								$bool = FALSE;
								while ($huruf <> 'S') {
									while ($nomor <= 50) {
										foreach ($seat as $value) :
											if ($huruf . $nomor == $value['seat']) {
												echo $value['seat'] . ' | ';
												$bool = TRUE;
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
								?></td>
						</tr>

					</tbody>

				</table>
				<div class="container">
					<div class="row">
						<div class="col-10">
							<a href="<?= site_url('Admin/Studio') ?>" class="btn btn-primary float-left">Back</a>
						</div>
						<div class="col-1">
							<a href="<?= site_url('Admin/Studio/Edit/' . $studio->id) ?>" class="btn btn-warning float-right">Edit</a>
						</div>
						<div class="col-1">
							<a href="<?= site_url('Admin/Studio/Delete/' . $studio->id) ?>" class="btn btn-danger float-right">Delete</a>
						</div>
					</div>
				</div>

				<br><br>
			</div>
		</main>
	</div>
</div>
