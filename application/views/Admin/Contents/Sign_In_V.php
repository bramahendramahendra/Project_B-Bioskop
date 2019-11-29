
<div class="container-fluid text-center">
	<form action="<?php echo site_url('Admin/Sign_In/Process');?>" method="post" class="form-signin">
		
		<img class="mb-4" src="{{ site.baseurl }}/docs/{{ site.docs_version }}/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
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
		
		<label for="inputUsername" class="sr-only">Username</label>
		<input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
		
		<label for="inputPassword" class="sr-only">Password</label>
		<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<p class="mt-5 mb-3 text-muted">Belum terdapat akun. <a href="<?php echo site_url('Admin/Sign_Up');?>">Sign Up</a></p>
		<p class="mt-5 mb-3 text-muted">&copy; 2017- Ganteng</p>
	</form>
</div>
