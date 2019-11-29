<div class="container-fluid text-center">
	<form action="<?php echo site_url('Admin/Sign_Up/Process'); ?>" method="post" class="form-signin">
		<img class="mb-4" src="{{ site.baseurl }}/docs/{{ site.docs_version }}/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Please sign Up</h1>
		
		<?php if($this->session->flashdata('Success')) { ?>
		<div class="alert alert-success" role="alert">
		<?php echo $_SESSION['Success']; ?>
		</div>
		<?php } ?>
		
		<?php if($this->session->flashdata('Failed')) { ?>
		<div class="alert alert-danger" role="alert">
		<?php echo $_SESSION['Failed'];  ?>
		</div>
		<?php } ?>
		
		<label for="inputNama" class="sr-only">Nama</label>
		<input name="nama" type="text" id="inputNama" class="form-control" placeholder="Nama" required autofocus>

		<label for="inputUsername" class="sr-only">Username</label>
		<input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required>

		<label for="inputEmail" class="sr-only">Email</label>
		<input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required>

		<label for="inputPassword" class="sr-only">Password</label>
		<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

		<label for="inputPassword" class="sr-only">Confirm Password</label>
		<input name="confirm_password" type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>

		<!-- <div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div> -->
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
		<p class="mt-5 mb-3 text-muted">Sudah memiliki Akun. <a href="<?php echo site_url('Admin/Sign_In'); ?>">Sign In</a></p>
		<p class="mt-5 mb-3 text-muted">&copy; 2017- Ganteng</p>
	</form>
</div>
