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
						<form action="<?= site_url('Admin/Film/create'); ?>" method="post" enctype="multipart/form-data">
							<h3>Tambahkan Data Film</h3>
							<div class="form-group">
								<label for="inputJudul">Judul</label>
								<input type="text" name="judul" class="form-control" id="inputJudul" placeholder="Judul">
							</div>
							<div class="form-row">
								<div class="form-group col-md-3">
									<label for="inputTanggalRilis">Tanggal Rilis</label>
									<input type="text" name="tanggal_rilis" placeholder="Tanggal Rilis" class="form-control datepicker-here" id="data-date">
									<!-- <input type="text" class="form-control" id="inputTanggalRilis" placeholder="Tanggal Rilis"> -->
								</div>
								<div class="form-group col-md-3">
									<label for="inputDurasi">Durasi</label>
									<input type="text" name="durasi" class="form-control" id="inputDurasi" placeholder="Durasi">
								</div>
								<div class="form-group col-md-3">
									<label for="inputKategori">Kategori</label>
									<input type="text" name="kategori" class="form-control" id="inputKategori" placeholder="Kategori">
								</div>
								<div class="form-group col-md-3">
									<!-- <label for="inputRating">Rating</label>
									<input type="text" name="rating" class="form-control" id="inputRating" placeholder="Rating"> -->
									<label for="Rating">Rating</label>
									<input type="range" name="rating" class="custom-range" min="0" max="10" step="0.5" id="rating">
									<p>Rating: <span id="skor_rating"></span></p>
								</div>
							</div>

							<div class="form-group">
								<label for="inputGenre">Genre</label>
								<select name='genre[]' class="bootstrap-select form-control" multiple data-live-search="true" placeholder="Genre">
									<?php foreach ($genre as $value) : ?>
										<option value="<?= $value['id']; ?>"><?= $value['genre']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="inputPemain">Pemain</label>
								<input type="text" name="pemain" class="form-control" id="inputPemain" placeholder="Pemain">
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="inputSutradara">Sutradara</label>
									<input type="text" name="sutradara" class="form-control" id="inputPemain" placeholder="Judul">
								</div>
								<div class="form-group col-md-4">
									<label for="inputLanguage">Language</label>
									<input type="text" name="language" class="form-control" id="inputLanguage" placeholder="Language">
								</div>
								<div class="form-group col-md-4">
									<label for="inputSubtitle">Subtitle</label>
									<input type="text" name="subtitle" class="form-control" id="inputSubtitle" placeholder="Subtitle">
								</div>
							</div>
							<div class="form-group">
								<label for="inputJudul">Sinopsis</label>
								<textarea class="form-control" name="sinopsis" id="textareaSinopsis" rows="3" placeholder="Lokasi"></textarea>
							</div>
							<div class="form-group">
								<label for="inputJudul">Image</label>
								<!-- <input type="file"  class="form-control-file" id="exampleFormControlFile1"> -->
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" id="customFile">
									<label class="custom-file-label" for="customFile">Pilih Image</label>
								</div>
							</div>



							<br><br>
							<a href="<?= site_url('Admin/Film') ?>" class="btn btn-warning">Back</a>
							<button type="submit" class="btn btn-primary">Save</button>
						</form>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
<br><br>
