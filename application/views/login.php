<form action="<?= base_url('auth/login') ?>" method="post">
	<div class="form-group">
		<label>Your email</label>
		<input name="email" class="form-control" placeholder="Email" type="email">
	</div> <!-- form-group// -->
	<div class="form-group">
		<a class="float-right" href="#">Forgot?</a>
		<label>Your password</label>
		<input class="form-control" placeholder="******" type="password" name="password">
	</div> <!-- form-group// -->
	<div class="form-group">
		<div class="checkbox">
			<label> <input type="checkbox"> Save password </label>
		</div> <!-- checkbox .// -->
	</div> <!-- form-group// -->
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block"> Login </button>
	</div> <!-- form-group// -->
</form>
