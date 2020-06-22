<form action="<?= base_url('auth/register') ?>" method="post">
	<div class="form-group">
		<label>Your name</label>
		<input name="name" class="form-control" placeholder="Name" type="text" required>
	</div> <!-- form-group// -->
	<div class="form-group">
		<label>Your email</label>
		<input name="email" class="form-control" placeholder="Email" type="email" required>
	</div> <!-- form-group// -->
	<div class="form-group">
		<label>Your password</label>
		<input class="form-control" placeholder="******" type="password" name="password" required>
	</div> <!-- form-group// -->
	<div class="form-group">
		<label>Confirm password</label>
		<input class="form-control" placeholder="******" type="password" name="confirmation" required>
	</div> <!-- form-group// -->
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block"> Register </button>
	</div> <!-- form-group// -->
</form>
