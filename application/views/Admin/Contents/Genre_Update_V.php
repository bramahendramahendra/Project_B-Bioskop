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
						<form action="<?php echo site_url('Admin/Genre/update/'.$genre->id); ?>" method="post">
							<div class="form-row">
								<div class="form-group col-md-3">
									<label for="inputGenre">Genre</label>
									<input value="<?= $genre->genre; ?>" name="genre" type="text" class="form-control" id="inputAddress" placeholder="Genre">
								</div>

							</div>
							<a href="<?php echo site_url('Admin/Genre');?>" class="btn btn-primary">Back</a>
							<button type="submit" class="btn btn-success">Save</button>
						</form>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
