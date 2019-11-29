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
							<a class="btn btn-success" href="<?= site_url('Admin/JadwalTayang/add'); ?>">Add Jadwal Tayang</a>
						</div>
					</div>
				</div>
				<br>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Movie</th>
								<th scope="col">Hari</th>
								<th scope="col">Tanggal Tayang</th>
								<th scope="col">Start Time</th>
								<th scope="col">End Time</th>
								<!-- <th scope="col">Kelas</th> -->
								<th scope="col">Details</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($jadwaltayang as $value) { ?>
								<tr>
									<th scope="row"><?= $no++; ?></th>
									<td><?= 'movie'; ?></td>
									<td><?= date("l",strtotime($value['tanggalTayang'])); ?></td>
									<td><?= date("d F Y",strtotime($value['tanggalTayang'])); ?></td>
									<td><?= $value['startTime']; ?></td>
									<td><?= $value['endTime']; ?></td>
									
									<td>
										<a href="<?php echo site_url('Admin/JadwalTayang/details/' . $value['idJadwalTayang']); ?>" class="btn btn-info">Details</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</main>
		</div>
	</div>
