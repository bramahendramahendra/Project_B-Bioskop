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
							<th scope="col"><?= $film->idMovie; ?></th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<th scope="row">Judul</th>
							<td><?= $film->judul; ?></td>
						</tr>
						<tr>
							<th scope="row">Tanggal Rilis</th>
							<td><?= $film->tanggal_rilis; ?></td>
						</tr>
						<tr>
							<th scope="row">Durasi</th>
							<td><?= $film->durasi; ?></td>
						</tr>
						<tr>
							<th scope="row">Genre</th>
							<td><?php foreach ($genre as $value) : echo $value['genre'].' | ';
								endforeach; ?></td>
						</tr>
						<tr>
							<th scope="row">Kategori</th>
							<td><?= $film->kategori; ?></td>
						</tr>
						<tr>
							<th scope="row">Rating</th>
							<td><?= $film->rating; ?></td>
						</tr>
						<tr>
							<th scope="row">Pemain</th>
							<td><?= $film->pemain; ?></td>
						</tr>
						<tr>
							<th scope="row">Sutradara</th>
							<td><?= $film->sutradara; ?></td>
						</tr>
						<tr>
							<th scope="row">Language</th>
							<td><?= $film->language; ?></td>
						</tr>

						<tr>
							<th scope="row">Subtitle</th>
							<td><?= $film->subtitle; ?></td>
						</tr>
						<tr>
							<th scope="row">Sinopsis</th>
							<td><?= $film->sinopsis; ?></td>
						</tr>
						<tr>
							<th scope="row">Image</th>
							<td><img src="<?= base_url('upload/movie/' . $film->image); ?>" alt="<?= $film->judul; ?>"></td>
						</tr>
					</tbody>

				</table>
				<div class="container">
					<div class="row">
						<div class="col-10">
							<a href="<?= site_url('Admin/Film') ?>" class="btn btn-primary float-left">Back</a>
						</div>
						<div class="col-1">
							<a href="<?= site_url('Admin/Film/Edit/'. $film->idMovie) ?>" class="btn btn-warning float-right">Edit</a>
						</div>
						<div class="col-1">
							<a href="<?= site_url('Admin/Film/Delete/'. $film->idMovie) ?>" class="btn btn-danger float-right">Delete</a>
						</div>
					</div>
				</div>

				<br><br>
			</div>
		</main>
	</div>
</div>
